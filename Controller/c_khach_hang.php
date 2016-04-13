<?php
require_once ("Controller/smarty.php");
require_once ("Library/gio_hang.php");
require_once ("Models/m_san_pham.php");
require_once ("Models/m_khach_hang.php");
require_once ("Models/m_table_khach_hang.php");
require_once ('Library/PHPMailer/PHPMailerAutoload.php');
class c_khach_hang {
	private $gio_hang, $m_san_pham, $smarty, $m_table_khach_hang;
	public function __construct() {
		$this -> gio_hang = new gio_hang();
		$this -> m_san_pham = new m_san_pham();
		$this -> smarty = new Smarty_ban_hang();
		$this -> m_table_khach_hang = new M_table_khach_hang();

	}

	public function them() {

		$sp = $_POST['sp'];
		$mang = explode("-", $sp);
		$id = $mang[0];
		$don_gia = $mang[1];
		$sl = $_POST['sl'];
		$this -> gio_hang -> them($id, $don_gia, $sl);
		echo json_encode(array('tsl' => $this -> gio_hang -> tongSoLuong(), 'tt' => $this -> gio_hang -> tongTien()));
	}

	public function xem_gio_hang() {
		if (isset($_POST['xoa'])) {
			$id_sp = $_POST['txtid'];
			$tt_gio_hang = $this -> gio_hang -> ThongTinGioHang();
			foreach ($tt_gio_hang as $key => $sp) {
				$this -> gio_hang -> xoaGioHang($id_sp);
			}
		}
		if (isset($_POST['capnhat'])) {
			$tt_gio_hang = $this -> gio_hang -> ThongTinGioHang();
			if ($tt_gio_hang) {
				foreach ($tt_gio_hang as $id => $sp) {
					$sl = $_POST['sl_' . $id];
					// v_thong_tin_gio_hang.tpl
					if ($sl == '0' || !is_numeric($sl)) {
						$this -> gio_hang -> xoaGioHang($id);
					}
				}
			}
			$tt_gio_hang = $this -> gio_hang -> ThongTinGioHang();
			if ($tt_gio_hang) {
				foreach ($tt_gio_hang as $id => $sp) {
					$sl_moi = $_POST['sl_' . $id];
					if ($sl_moi != $sp[1]) {
						$this -> gio_hang -> CapNhatGioHang($id, $sl_moi);
					}
				}
			}
		}
		$tt_gio_hang = $this -> gio_hang -> ThongTinGioHang();
		if ($tt_gio_hang) {
			$array_id = array();
			foreach ($tt_gio_hang as $id => $sp) {
				$array_id[] = $id;
			}
			$chuoi_id = implode(',', $array_id);
			//lay id cua sp
			$dssp_gio_hang = $this -> m_san_pham -> lay_gio_hang($chuoi_id);
			$mang_ddsp_giohang = array();
			foreach ($dssp_gio_hang as $sp_giohang) {
				$tt_sp_giohang = $tt_gio_hang[$sp_giohang['ma_san_pham']];
				$sp_giohang['so_luong'] = $tt_sp_giohang[1];
				$mang_ddsp_giohang[] = $sp_giohang;
			}
			$this -> smarty -> assign('tt_gio_hang', $mang_ddsp_giohang);
		}
		$this -> smarty -> assign('tslGh', $this -> gio_hang -> tongSoLuong());
		$this -> smarty -> assign('dgGh', $this -> gio_hang -> tongTien());
		$this -> smarty -> display('sanpham/v_thong_tin_gio_hang.tpl');

	}

	public function dat_hang() {
		$tt_gio_hang = $this -> gio_hang -> ThongTinGioHang();
		if (!$tt_gio_hang)
			header('location:' . path);
	}

	public function xoa_gio_hang() {
		unset($_SESSION['giohang']);
		header("location:" . path . "/gio-hang/thong-tin-gio-hang.html");
	}

	public function nhap_thong_tin_dat_hang() {

		$gio_hang = $this -> gio_hang -> ThongTinGioHang();
		if (!$gio_hang)
			header('location:' . path);
		$data = array('ten_khach_hang' => '', 'phai' => '', 'ngay_sinh' => '', 'dia_chi' => '', 'dien_thoai' => '', 'email' => '');
		if (isset($_POST['dat_hang'])) {
			$data = array('ten_khach_hang' => $_POST['ten_khach_hang'], 'phai' => $_POST['phai'], 'ngay_sinh' => $_POST['ngay_sinh'], 'dia_chi' => $_POST['dia_chi'], 'dien_thoai' => $_POST['dien_thoai'], 'email' => $_POST['email']);
			$this -> m_table_khach_hang -> setDataKhachHang($data);
			$m_khach_hang = new M_khach_hang();
			//them khach hang

			$makh = $m_khach_hang -> them_khach_hang($this -> m_table_khach_hang -> getDataKhachHang());
			//them hoa don
			$so_hoa_don = $m_khach_hang -> them_hoa_don($makh, date('Y-m-d'), $this -> gio_hang -> tongTien());
			//them mat hang
			foreach ($gio_hang as $id => $ttsp) {
				$m_khach_hang -> them_chi_tiet_hoa_don($so_hoa_don, $id, $ttsp[1], $ttsp[0]);
			}
			$this -> gio_hang -> huyGioHang();
			$tt_dat_hang = $m_khach_hang -> lay_don_dat_hang($so_hoa_don);
			$this -> guimail($tt_dat_hang);
			header('location:' . path . '/khach-hang/thong-tin-dat-hang/' . $so_hoa_don);
		}
		$this -> smarty -> assign('data', $data);
		$this -> smarty -> display('sanpham/dat_hang.tpl');
	}

	public function thong_tin_dat_hang() {
		if (isset($_REQUEST['chuoi'])) {
			$sohoadon = $_REQUEST['chuoi'];
			//lay thong tin dat hang
			$m_khach_hang = new M_khach_hang();
			$tt_dat_hang = $m_khach_hang -> lay_don_dat_hang($sohoadon);
			$this -> smarty -> assign('tt_dat_hang', $tt_dat_hang);
			$this -> smarty -> display('sanpham/hien_tt_dat_hang.tpl');
		} else
			header('location:' . path);
	}

	public function guimail($data) {

		require_once ('Library/PHPMailer/PHPMailerAutoload.php');
		$phpMailer = new PHPMailer();
		$phpMailer -> isSMTP();
		$phpMailer -> SMTPDebug = 0;
		$phpMailer -> Debugoutput = 'html';
		$phpMailer -> Host = 'smtp.gmail.com';
		$phpMailer -> Port = 465;
		$phpMailer -> SMTPSecure = 'ssl';
		$phpMailer -> SMTPAuth = true;
		$phpMailer -> Username = "lephuocdev@gmail.com";
		$phpMailer -> Password = "lephuoc18101993";
		$phpMailer -> setFrom("lephuocdev@gmail.com", "Ngo Hung Phuc");
		$phpMailer -> addAddress($data[0]['email'], $data[0]['ten_khach_hang']);
		$phpMailer -> Subject = "Order Information";
		$phpMailer -> msgHTML($this -> tao_noi_dung_gui_mail($data));
		$phpMailer -> send();
		if (!$phpMailer -> send()) {
			echo "Mail lỗi" . $phpMailer -> ErrorInfo;
		} else {
			echo "Gửi mail thành công";
		}

	}

	public function tao_noi_dung_gui_mail($data) {
		$chuoi = '<p>Customer ID ' . $data[0]['ma_khach_hang'];
		$chuoi = '   Customer Name: ' . $data[0]['ten_khach_hang'];
		$chuoi .= '</p>';

		$chuoi .= '<p>Address:' . $data[0]['dia_chi'];
		$chuoi = '    Phone:' . $data[0]['dien_thoai'];
		$chuoi .= '</p>';

		$chuoi .= '<p>Order Number:' . $data[0]['so_hoa_don'];
		$chuoi = '    Date:' . $data[0]['ngay_hd'];
		$chuoi .= '</p>';

		$chuoi .= '<table class="table">
            <thead>
              <tr>
                <th>Ordinal Numbers</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Total</th>
              </tr>
            </thead>
            <tbody>';
		$i = 1;
		$tt = 0;
		foreach ($data as $item) {
			$chuoi .= '<tr>';
			$chuoi .= '<th scope="row"> {$i} </th>';
			$chuoi .= '<td>' . $item['ma_san_pham'] . '</td>';
			$chuoi .= '<td>' . $item['ten_san_pham'] . '</td>';
			$chuoi .= '<td>' . number_format($item['don_gia']) . '</td>';
			$chuoi .= '<td>' . $item['so_luong'] . '</td>';
			$chuoi .= '<td align="right">' . number_format($item['don_gia'] * $item['so_luong']) . '</td>';
			$chuoi .= '</tr>';
			$tt = $tt + $item['so_luong'] * $item['don_gia'];
			$i = $i + 1;
		}
		$chuoi .= '<tr> <td colspan="5"  align="right"><b>Totals</b></td><td  align="right"><b></b>' . number_format($tt) . '</b></td></tr>';
		$chuoi .= '  </tbody>
          </table>';

		return $chuoi;
	}

}
?>
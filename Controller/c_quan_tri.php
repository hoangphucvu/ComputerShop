<?php
require_once ('smarty.php');
require_once ('Models/m_quan_tri.php');
require_once ('Models/m_san_pham_table.php');
require_once ('Models/m_san_pham.php');
require_once ('Library/pager.php');
class c_quan_tri extends Database {
	private $smarty, $m_quan_tri,$m_sanpham;
	function __construct() {
		$this -> smarty = new Smarty_ban_hang();
		$this -> m_quan_tri = new m_quan_tri();
		$this-> m_sanpham=new m_san_pham();
	}

	public function trang_quan_tri() {

		if (!isset($_SESSION['user']))
			header('location:' . path . "/ngo-hung-phuc/dang-nhap");
		$this -> smarty -> display('quan_tri/quan_tri.tpl');
	}

	public function dang_nhap() {
		
		if (isset($_POST['submit_login'])) {
		
			$ten_dang_nhap = $_POST['username'];
			$mat_khau = $_POST['password'];

			if ($ten_dang_nhap != '' && $mat_khau != '') {
					
				$user = $this -> m_quan_tri -> getLogin($ten_dang_nhap,$mat_khau);
				
			
		
				
				if (!$user) {
					$this -> smarty -> assign('ten_dang_nhap', $ten_dang_nhap);
					$this -> smarty -> assign('err', 'Please check again your username or password');
				} else {
					$_SESSION['user'] = $user['ho_ten'];
					$_SESSION['role'] = $user['ma_loai_nguoi_dung'];
					header('location:' . path . '/ngo-hung-phuc/quan-tri');
				}
			}
		}
		$this -> smarty -> display('quan_tri/login.tpl');

	}
	public function dang_xuat()
	{
		session_unset($_SESSION['user']);
		session_unset($_SESSION['role']);
		header('location:'.path.'/ngo-hung-phuc/dang-nhap');
	}
	public function danh_sach_sp_admin()
	{
        $option="Split";
        $limit = 20;
		$total = $this ->m_quan_tri ->dem_sp_admin();
        $pager = new Pager($total,$limit);
        
        $start = $pager->startItem();
  
        $link_trang=$pager->pageList($option);
        
        $dssp=$this->m_quan_tri->danh_sach_sp_phan_trang($start,$limit);
        $this->smarty->assign('link_trang',$link_trang);
        $this->smarty->assign('dssp',$dssp);
        $this->smarty->display('quan_tri/doc_sp.tpl');
	}
	public function cap_nhat_san_pham(){
	   
		if (isset($_REQUEST['key'])) {
			$masanpham=$_REQUEST['key'];
			$san_pham=$this->m_sanpham->id_sp($masanpham);
			if (!$san_pham) 
				header('location:'.path.'/ngo-hung-phuc/update');
			if (isset($_POST['capnhat'])) {
				  $data=array('ma_san_pham'=>$masanpham,'ten_san_pham'=>$_POST['ten_san_pham'], 
                    'ten_san_pham_url'=>$_POST['ten_san_pham_url'], 
                    'ma_loai'=>$_POST['ma_loai'], 'mo_ta_tom_tat'=>$_POST['mo_ta_tom_tat'], 
                    'mo_ta_chi_tiet'=>$_POST['mo_ta_chi_tiet'], 
                    'don_gia'=>$_POST['don_gia'], 'hinh'=>$_FILES['hinh'], 
                    'san_pham_moi'=>isset($_POST['san_pham_moi'])?$_POST['san_pham_moi']:0, 
                    'so_lan_xem'=>$_POST['so_lan_xem'], 'ngay_tao'=>$_POST['ngay_tao']);
                  $m_san_pham_table=new m_san_pham_talbe();
                  $m_san_pham_table->setData($data);
                  
                  $dataErr=$m_san_pham_table->checkData();
           
                  if(empty($dataErr))
                  {
                    $hinh=$_FILES['hinh'];
                          
                    $ten_hinh=$san_pham['hinh'];
                   
                    if($hinh['error']==0){
                        $checkHinh=$m_san_pham_table->checkHinh($hinh);
                        
                        if(!$checkHinh){
                            $ten_hinh=time().'-'.$hinh['name'];
                            
                            move_uploaded_file($hinh['tmp_name'],'./Public/hinh_san_pham/'.$ten_hinh);
                            if(file_exists('./Public/hinh_san_pham/'.$san_pham['hinh']))
                                unlink('./Public/hinh_san_pham/'.$san_pham['hinh']);
                        }
                        else
                            $this->smarty->assign('err',$checkHinh);
                    }
                    $data=$m_san_pham_table->getData();
                    $data['hinh']=$ten_hinh;
                    $kq=$this->m_quan_tri->update_sp($data);
                    if($kq)
                        header('location:'.path.'/ngo-hung-phuc/update');
                    else
                        $thhis->smarty->assign('err','ko thanh cong');
                  }
                  else
                    $this->smarty->assign('dataErr',$dataErr);
			}
            require_once('Models/m_loai_san_pham.php');
            $m_loai_san_pham=new m_loai_san_pham();
            $this->smarty->assign('data',$san_pham);
            $this->smarty->assign('dsLoaiSanPham',$m_loai_san_pham->layloai_sp());
            $this->smarty->display('quan_tri/v_cap_nhat_san_pham.tpl');
		}
	}
    public function them_san_pham_vao_data(){
	       $data=array('ma_san_pham'=>'','ten_san_pham'=>'', 'ten_san_pham_url'=>'', 
            'ma_loai'=>'', 'mo_ta_tom_tat'=>'', 'mo_ta_chi_tiet'=>'', 
            'don_gia'=>'', 'hinh'=>'', 'san_pham_moi'=>'', 'so_lan_xem'=>'', 'ngay_tao'=>date('Y-m-d'));
            if (isset($_POST['addpro'])) {
				  $data=array('ma_san_pham'=>'','ten_san_pham'=>$_POST['ten_san_pham'], 
                    'ten_san_pham_url'=>$_POST['ten_san_pham_url'], 
                    'ma_loai'=>$_POST['ma_loai'], 'mo_ta_tom_tat'=>$_POST['mo_ta_tom_tat'], 
                    'mo_ta_chi_tiet'=>$_POST['mo_ta_chi_tiet'], 
                    'don_gia'=>$_POST['don_gia'], 'hinh'=>'', 
                    'san_pham_moi'=>isset($_POST['san_pham_moi'])?$_POST['san_pham_moi']:0, 
                    'so_lan_xem'=>$_POST['so_lan_xem'], 'ngay_tao'=>$_POST['ngay_tao']);
                  $m_san_pham_table=new m_san_pham_talbe();
                  $m_san_pham_table->setData($data);
                  
                
                    $hinh=$_FILES['hinh'];
                    $checkHinh=$m_san_pham_table->checkHinh($hinh);   
                    if(!empty($hinh)){
                        $ten_hinh=time().' '.$hinh['name'];
                        move_uploaded_file($hinh['tmp_name'],'./Public/hinh_san_pham/'.$ten_hinh);
                        $data=$m_san_pham_table->getData();
                        $data['hinh']=$ten_hinh;
                        $kq=$this->m_quan_tri->them_san_pham($data);
                          
                        if($kq)
                            header('location:'.path.'/ngo-hung-phuc/update');
                        else
                            $this->smarty->assign('err','ko thanh cong');
                           
                    }
                    
                   
			}
            require_once('Models/m_loai_san_pham.php');
            $m_loai_san_pham=new m_loai_san_pham();
            $this->smarty->assign('data',$data);
            $this->smarty->assign('dsLoaiSanPham',$m_loai_san_pham->layloai_sp());
            $this->smarty->display('quan_tri/them_san_pham.tpl');
		
        
    }
    public function xoa(){
        if(isset($_REQUEST['key'])){
            $ma_sp=$_REQUEST['key'];
            $kq=$this->m_quan_tri->xoa_san_pham($ma_sp);
            if($kq){
                  echo '<script language="javascript">';
                  echo 'alert("Done")';
                  echo '</script>';
                    header('location:'.path.'/ngo-hung-phuc/update');
            }
            
        }
    }
}
?>
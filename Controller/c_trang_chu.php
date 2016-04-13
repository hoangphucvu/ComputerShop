<?php

require_once ('Controller/smarty.php');
require_once ('Models/m_san_pham.php');
require_once ('Models/m_loai_san_pham.php');
require_once ('Library/pager.php');

class c_trang_chu {
	private $smarty, $sp_index, $chi_tiet_sp, $m_loai_sp;
	public function __construct() {
		$this -> smarty = new Smarty_ban_hang();
		$this -> sp_index = new m_san_pham();
		$this -> chi_tiet_sp = new m_san_pham();
		$this -> m_loai_sp = new m_loai_san_pham();

	}

	public function trang_chu() {
		$dssp_index = $this -> sp_index -> dssp_index();
		$this -> smarty -> assign('dssp_index', $dssp_index);
		$dssp_moi = $this -> sp_index -> san_pham_moi();
		$this -> smarty -> assign('dssp_moi', $dssp_moi);
		$this -> smarty -> display('index.tpl');
	}

	public function lien_he() {
		$this -> smarty -> display('contact/contact.tpl');
	}

	public function chi_tiet_sp() {

		$chuoi = $_GET["chuoi"];
		$mang = explode("-", $chuoi);
		$id = $mang[count($mang) - 1];
		$chitiet_sp = $this -> chi_tiet_sp -> id_sp($id);
		$ma_loai = $chitiet_sp['ma_loai'];
		$dssp_cung_loai = $this -> sp_index -> dssp_cungloai($ma_loai, $id);
		$this -> smarty -> assign('dssp_cung_loai', $dssp_cung_loai);
		$this -> smarty -> assign('sp', $chitiet_sp);
		$this -> smarty -> display('sanpham/chitiet.tpl');
	}

	public function sp_theo_loai() {

        $option="Split";
        $limit = 4;
        $chuoi = $_GET['chuoi'];
		$id = $chuoi;
		$sp_theo_loai = $this -> sp_index -> tong_san_pham_theo_loai($id);  
        $pager = new Pager($sp_theo_loai,$limit);
        $start = $pager->startItem();
        $link_trang=$pager->pageList($option);
        $dssp=$this->sp_index->san_pham_theo_loai_phan_trang($id,$start,$limit);
        $this -> smarty -> assign('sp_theo_loai', $sp_theo_loai);
		$loaicon = $this -> m_loai_sp -> lay_loai_sp($id);
		$loaicha = $this -> m_loai_sp -> lay_loai_sp($loaicon['ma_loai_cha']);
		$title = "Sản Phẩm / ";
		$title .= '<a href="' . path . '/san-pham/' . $loaicha['ten_loai_san_pham_url'] . '-' . $loaicha['ma_loai'] . '">' . $loaicha['ten_loai'] . '</a>';
		$title = " / " . $loaicon['ten_loai'] . "";
		$this -> smarty -> assign('title_ds', $loaicon);
		$this -> smarty -> assign('dssp_phan_trang', $dssp);
		$this -> smarty -> assign('link_trang', $link_trang);
		$this -> smarty -> display('sanpham/san_pham_theo_loai.tpl');
	}


}
?>
<?php
require_once 'database.php';
/**
 *
 */
class m_loai_san_pham extends Database {

	public function lay_loai_cha() {
		$chuoisql = "SELECT * FROM loai_san_pham WHERE ma_loai_cha=0";
		$this -> setQuery($chuoisql);
		$ds_loai_cha = $this -> loadAllRow();
		$mang = array();
		foreach ($ds_loai_cha as $item) {
			$mang[$item['ten_loai']] = array($item['ten_loai_san_pham_url'], $this -> lay_loai_con($item['ma_loai']));
		}
		return $mang;

	}

	public function lay_loai_con($ma_loai) {
		$chuoisql = "SELECT * FROM loai_san_pham WHERE ma_loai_cha=?";
		$this -> setQuery($chuoisql);
		$ds_loai_con = $this -> loadAllRow(array($ma_loai));
		return $ds_loai_con;
	}

	public function lay_loai_sp($id_loai) {
		$chuoisql = "SELECT * FROM loai_san_pham WHERE ma_loai=?";
		$this -> setQuery($chuoisql);
		return $this -> loadRow(array($id_loai));

	}

	public function layloai_sp() {
		$chuoisql = "SELECT * FROM loai_san_pham ";
		$this -> setQuery($chuoisql);
		return $this -> loadAllRow();
	}

}
?>
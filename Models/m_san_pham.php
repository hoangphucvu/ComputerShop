<?php
require_once 'Models/database.php';

class m_san_pham extends Database {
	public function dssp_index() {
		$chuoisql = "SELECT * FROM san_pham ORDER BY ma_san_pham limit 0,15";
		$this -> setQuery($chuoisql);
		return $this -> loadAllRow();
	}

	public function dssp_cungloai($ma_loai, $id) {
		$sql = "SELECT * FROM san_pham WHERE ma_loai=? AND ma_san_pham!=?";
		$this -> setQuery($sql);
		return $this -> loadAllRow(array($ma_loai, $id));
	}

	public function id_sp($id) {
		$chuoisql = "SELECT * FROM san_pham WHERE ma_san_pham=?";
		$this -> setQuery($chuoisql);
		return $this -> loadRow(array($id));
	}

	public function san_pham_theo_loai($id) {
		$chuoisql = "SELECT * FROM san_pham WHERE ma_loai=?";
		$this -> setQuery($chuoisql);
        return $this->loadAllRow(array($id));
	}

	public function san_pham_theo_loai_cha($id) {
		$chuoisql = "SELECT * FROM san_pham WHERE ma_loai_cha=?";
		$this -> setQuery($chuoisql);
		return $this -> loadRow(array($id));
	}

	public function san_pham_moi() {
		$sql = "SELECT * FROM san_pham WHERE san_pham_moi=1";
		$this -> setQuery($sql);
		return $this -> loadAllRow();

	}

	public function lay_gio_hang($chuoi_id) {
		$chuoisql = "SELECT * FROM san_pham WHERE ma_san_pham in($chuoi_id)";
		$this -> setQuery($chuoisql);
		return $this -> loadAllRow();
	}

	public function tong_sp() {
		$this -> setQuery('select * from san_pham');
		return $this -> CountAll();
	}
	
	public function danh_sach_sp_phan_trang($start, $limit) {
		$sql = "SELECT * FROM san_pham Limit $start,$limit";
		$this -> setQuery($sql);
		return $this -> loadAllRow();
	}
    
    
    public function tong_san_pham_theo_loai($id) {
		$chuoisql = "SELECT * FROM san_pham WHERE ma_loai=?";
		$this -> setQuery($chuoisql);
        return $this->CountAll(array($id));
	}
    
    public function san_pham_theo_loai_phan_trang($id,$start, $limit){
        $sql="select * from san_pham where ma_loai=? Limit $start,$limit";
        $this->setQuery($sql);
        return $this->loadAllRow(array($id));
    }

}
?>
<?php
/**
 *
 */

class m_quan_tri extends Database {

	public function getLogin($username, $pass) {
		$this -> setQuery('select * from nguoi_dung where ten_dang_nhap=? and mat_khau=?');

		return $this -> loadRow(array($username, $pass));

	}
    public function update_sp($data){
        $chuoi_Sql='update san_pham set `ten_san_pham`=?, `ten_san_pham_url`=?, `ma_loai`=?, `mo_ta_tom_tat`=?, `mo_ta_chi_tiet`=?, `don_gia`=?, `hinh`=?, `san_pham_moi`=?, `so_lan_xem`=?, `ngay_tao`=? where ma_san_pham=?';
        $this->setQuery($chuoi_Sql);
        return $this->execute(array($data['ten_san_pham'], $data['ten_san_pham_url'], $data['ma_loai'], $data['mo_ta_tom_tat'], $data['mo_ta_chi_tiet'], $data['don_gia'], $data['hinh'], $data['san_pham_moi'], $data['so_lan_xem'], $data['ngay_tao'], $data['ma_san_pham']));
    }
    public function view_sp_admin()
	{
		$this -> setQuery('select * from san_pham');
		return $this -> loadAllRow();
	}
    public function dem_sp_admin()
	{
		$this -> setQuery('select * from san_pham');
		return $this -> CountAll(array());
	}
    public function danh_sach_sp_phan_trang($start, $limit) {
		$sql = "SELECT * FROM san_pham Limit $start,$limit";
		$this -> setQuery($sql);
		return $this -> loadAllRow();
	}
    public function them_san_pham($data)
    {
        $chuoi_Sql='insert into san_pham(`ten_san_pham`, `ten_san_pham_url`, `ma_loai`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`, `don_gia`, `hinh`, `san_pham_moi`, `so_lan_xem`, `ngay_tao`) values(?,?,?,?,?,?,?,?,?,?)';
        $this->setQuery($chuoi_Sql);
        return $this->execute(array($data['ten_san_pham'], $data['ten_san_pham_url'], $data['ma_loai'], $data['mo_ta_tom_tat'], $data['mo_ta_chi_tiet'], $data['don_gia'], $data['hinh'], $data['san_pham_moi'], $data['so_lan_xem'], $data['ngay_tao']));

    }
    public function xoa_san_pham($id){
        $chuoiSQL='delete from san_pham where ma_san_pham=?';
        $this->setQuery($chuoiSQL);
        return $this->execute(array($id));
    }

}
?>
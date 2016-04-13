<?php
class M_khach_hang extends Database
{    
    public function them_khach_hang($data)
    {
        $this->setQuery('insert into khach_hang(`ten_khach_hang`, `phai`, `ngay_sinh`, `dia_chi`, `dien_thoai`, `email`) values(?,?,?,?,?,?)');
        $this->execute(array($data['ten_khach_hang'],$data['phai'],$data['ngay_sinh'],$data['dia_chi'],$data['dien_thoai'],$data['email']));
        return $this->lastInsertId();
    }
    public function them_hoa_don($makh,$ngay_hd,$tri_gia)
    {
        $this->setQuery('insert into hoa_don(ma_khach_hang,ngay_hd,tri_gia) values(?,?,?)');
        $this->execute(array($makh,$ngay_hd,$tri_gia));
        return $this->lastInsertId();
    }
    public function them_chi_tiet_hoa_don($so_hoa_don,$ma_san_pham,$so_luong,$don_gia)
    {
        $this->setQuery('insert into ct_hoa_don(`so_hoa_don`, `ma_san_pham`, `so_luong`, `don_gia`) values(?,?,?,?)');
        return $this->execute(array($so_hoa_don,$ma_san_pham,$so_luong,$don_gia));
    }
    public function lay_don_dat_hang($so_hoa_don)
    {
        $chuoi_sql='SELECT `khach_hang`.`ma_khach_hang`, `ten_khach_hang`, `phai`, `ngay_sinh`, `dia_chi`, `dien_thoai`, `email`,`hoa_don`.`so_hoa_don`,`ngay_hd`,`tri_gia`,`ct_hoa_don`.`so_luong`,`ct_hoa_don`.`don_gia`,`san_pham`.`ma_san_pham`,`san_pham`.`ten_san_pham` FROM `khach_hang`,`hoa_don`,`ct_hoa_don`,`san_pham` WHERE `khach_hang`.`ma_khach_hang`=`hoa_don`.`ma_khach_hang` and `hoa_don`.`so_hoa_don`=`ct_hoa_don`.`so_hoa_don` and `san_pham`.`ma_san_pham`=`ct_hoa_don`.`ma_san_pham` and `hoa_don`.`so_hoa_don`=?';
        $this->setQuery($chuoi_sql);
        return $this->loadAllRow(array($so_hoa_don));        
    }
}

?>
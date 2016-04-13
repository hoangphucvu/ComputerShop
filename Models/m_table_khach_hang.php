<?php 
/**
* 
*/
class M_table_khach_hang 
{
	private $ma_khach_hang,$ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email;
	public function setDataKhachHang($data)
	{
		$this->ma_khach_hang=isset($data['ma_khach_hang'])?$data['ma_khach_hang']:0;
		$this->ten_khach_hang=isset($data['ten_khach_hang'])?$data['ten_khach_hang']:'';
		$this->phai=isset($data['phai'])?$data['phai']:'';
		$this->ngay_sinh=isset($data['ngay_sinh'])?$data['ngay_sinh']:'';
		$this->dia_chi=isset($data['dia_chi'])?$data['dia_chi']:'';
		$this->dien_thoai=isset($data['dien_thoai'])?$data['dien_thoai']:'';
		$this->email=isset($data['email'])?$data['email']:'';
        

        
	}
	public function getDataKhachHang()
	{
		$data=array(
			'ma_khach_hang' =>$this->ma_khach_hang , 
			'ten_khach_hang' =>$this->ten_khach_hang , 
			'phai' =>$this->phai , 
			'ngay_sinh' =>$this->ngay_sinh , 
			'dia_chi' =>$this->dia_chi , 
			'dien_thoai' =>$this->dien_thoai,
            'email'=>$this->email
		);
     
        
		return $data;
	}
}



?>







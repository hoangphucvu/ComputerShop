<?php 
class m_san_pham_talbe{
    private $ma_san_pham,$ten_san_pham,$ten_san_pham_url,$ma_loai,$mo_ta_tom_tat, $mo_ta_chi_tiet, $don_gia, $hinh, $san_pham_moi, $so_lan_xem, $ngay_tao;
      public function setData($data)
    {
        $this->ma_san_pham=isset($data['ma_san_pham'])?$data['ma_san_pham']:0; 
        $this->ten_san_pham=isset($data['ten_san_pham'])?$data['ten_san_pham']:''; 
        $this->ten_san_pham_url=isset($data['ten_san_pham_url'])?$data['ten_san_pham_url']:''; 
        $this->ma_loai=isset($data['ma_loai'])?$data['ma_loai']:0; 
        $this->mo_ta_tom_tat=isset($data['mo_ta_tom_tat'])?$data['mo_ta_tom_tat']:''; 
        $this->mo_ta_chi_tiet=isset($data['mo_ta_chi_tiet'])?$data['mo_ta_chi_tiet']:''; 
        $this->don_gia=isset($data['don_gia'])?$data['don_gia']:0; 
        $this->hinh=isset($data['hinh'])?$data['hinh']:''; 
        $this->san_pham_moi=isset($data['san_pham_moi'])?$data['san_pham_moi']:1; 
        $this->so_lan_xem=isset($data['so_lan_xem'])?$data['so_lan_xem']:1; 
        $this->ngay_tao=isset($data['ngay_tao'])?$data['ngay_tao']:date('Y-m-d');
    }
    public function getData()
    {
        $data=array(
            'ma_san_pham'=>$this->ma_san_pham, 
            'ten_san_pham'=>$this->ten_san_pham, 
            'ten_san_pham_url'=>$this->ten_san_pham_url, 
            'ma_loai'=>$this->ma_loai, 
            'mo_ta_tom_tat'=>$this->mo_ta_tom_tat, 
            'mo_ta_chi_tiet'=>$this->mo_ta_chi_tiet, 
            'don_gia'=>$this->don_gia, 
            'hinh'=>$this->hinh, 
            'san_pham_moi'=>$this->san_pham_moi, 
            'so_lan_xem'=>$this->so_lan_xem, 
            'ngay_tao'=>$this->ngay_tao
        );
        return $data;
    }
    
    public function checkData(){
        $dataErr=array();
        if($this->ten_san_pham=='')
            $dataErr['ten_san_pham']='*';
        if($this->ten_san_pham_url=='')
            $dataErr['ten_san_pham_url']='*';
        if($this->don_gia=='' || !is_numeric($this->don_gia))
            $dataErr['don_gia']='*';
        return $dataErr;
    }
    public function checkHinh($hinh){
        $type=array('image/jpg','image/png','image/jpeg');
        if(array_search($hinh['type'],$type)===false)
            return 'file ko hop le';
        if($hinh['size']>=2000000)
            return 'File quá l?n';
        return false;
        
    }
}




?>
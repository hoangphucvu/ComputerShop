<?php 
session_start();
class gio_hang
{
    public function them($id,$don_gia,$sl)
    {
        if(isset($_POST['muahang']))
        echo '12313';
        if(isset($_SESSION['giohang']))
        {
            $giohang=$_SESSION['giohang'];
            $giohang[$id]=array($don_gia,$sl);
            $_SESSION['giohang']=$giohang;
        } 
        else       
            $_SESSION['giohang']=array($id=>array($don_gia,$sl));              
    }
    public function tongSoLuong()
    {
        $tsl=0;
        if(isset($_SESSION['giohang']))
        {
            foreach($_SESSION['giohang'] as $id=>$sp)
            {
                $tsl=$tsl+$sp[1];
            }
        }        
        return $tsl;
    }
    public function tongTien()
    {
       
        $tt=0;
        if(isset($_SESSION['giohang']))
        {
            foreach($_SESSION['giohang'] as $id=>$sp)
            {
                $tt+=$sp[0]*$sp[1];
            }
        }        
        return $tt;
    }
    public function ThongTinGioHang()
    {
        if(isset($_SESSION['giohang']))
            return $_SESSION['giohang'];
        return false;
    }
    public function xoaGioHang($id)
    {
        $tt_gio_hang=$this->ThongTinGioHang();
        if($tt_gio_hang)
        {
            $gio_hang_moi=array();
            foreach($tt_gio_hang as $key=>$sp)
            {
                if($key!=$id)
                {
                    $gio_hang_moi[$key]=$sp;
                }
            }
            if($gio_hang_moi)
                $_SESSION['giohang']=$gio_hang_moi;
            else
                unset($_SESSION['giohang']);
        }
    }
    public function xoa_sp($id){
        $this->xoaGioHang($id);
    }
    public function CapNhatGioHang($id,$sl)
    {
        $tt_gio_hang=$this->ThongTinGioHang();
        if($tt_gio_hang)
        {
            if(isset($tt_gio_hang[$id]))
            {
                $sp=$tt_gio_hang[$id];
                $tt_gio_hang[$id]=array($sp[0],$sl);
                $_SESSION['giohang']=$tt_gio_hang;
            }
        }
    }
    public function huyGioHang()
    {
        unset($_SESSION['giohang']);
    }
}



?>
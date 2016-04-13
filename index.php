<?php
include_once ("Controller/c_trang_chu.php");
$c_trang_chu = new c_trang_chu();
if (isset($_REQUEST['re'])) {
	switch($_REQUEST['re']) {
		case 'lien_he' :
			$c_trang_chu -> lien_he();
			break;
		case 'chi_tiet' :
			$c_trang_chu -> chi_tiet_sp();
			break;
		case 'danh_sach_loai_sp' :
			$c_trang_chu -> sp_theo_loai();
			break;
	}
} else
	$c_trang_chu -> trang_chu();
	
?>

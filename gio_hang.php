<?php
require_once 'Controller/c_khach_hang.php';
$c_khach_hang = new c_khach_hang();
if (isset($_REQUEST['re'])) {
	switch ($_REQUEST['re']) {
		case 'them' :
			$c_khach_hang -> them();
			break;
		case 'thong_tin_gio_hang' :
			$c_khach_hang -> xem_gio_hang();
			break;
		case 'xoa_gio_hang' :
			$c_khach_hang -> xoa_gio_hang();
			break;
		case 'dat_hang':
			$c_khach_hang->nhap_thong_tin_dat_hang();
			break;
		case 'thong_tin_dat_hang':
			$c_khach_hang->thong_tin_dat_hang();
			break;
	}
}
?>
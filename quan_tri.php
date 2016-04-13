<?php
include_once ("Controller/c_quan_tri.php");
$c_quan_tri = new c_quan_tri();
if (isset($_REQUEST['re'])) {
	switch($_REQUEST['re']) {
		case 'dang_nhap_admin' :
			$c_quan_tri ->dang_nhap();
			break;
		case 'dang_nhap_thanh_cong':
			$c_quan_tri ->trang_quan_tri();
			break;
		case 'dang_xuat':
			$c_quan_tri->dang_xuat();
			break;
        case 'xem_sp_admin':
            $c_quan_tri->danh_sach_sp_admin();
            break;
        case 'cap_nhat_san_pham':
            $c_quan_tri->cap_nhat_san_pham();
            break;
        case 'them_san_pham':
            $c_quan_tri->them_san_pham_vao_data();
            break;
        case 'xoa_san_pham':
            $c_quan_tri->xoa();
            break;
	}
}
?>
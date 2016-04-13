<?php

chdir(dirname('_DIR_'));
define('path', 'http://ngohungphuc-dev.esy.es');
require_once ("Smarty/libs/Smarty.class.php");
require_once ("Models/m_loai_san_pham.php");
require_once ("Library/gio_hang.php");
class Smarty_ban_hang extends Smarty {
	public function __construct() {
		parent::__construct();
		$this -> smarty -> setCacheDir("Views/cache");
		$this -> smarty -> setConfigDir("Views/config");
		$this -> smarty -> setTemplateDir("Views/template");
		$this -> smarty -> setCompileDir("Views/template_c");
		$this -> assign('path', path);
		$this -> assign('title', 'Ngô Hùng Phúc');
		$m_loai_san_pham = new m_loai_san_pham();
		$this -> assign('ds_loai_san_pham_menu', $m_loai_san_pham -> lay_loai_cha());
		$gio_hang = new gio_hang();
		$this -> assign('tsl_gh', $gio_hang -> tongSoLuong());
		$this -> assign('tt_dh', $gio_hang -> tongTien());
	}

}
?>
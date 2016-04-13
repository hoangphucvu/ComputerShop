<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-08 16:58:01
         compiled from "Views\template\quan_tri\v_cap_nhat_san_pham.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2018955707bd9854a22-30891815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7f0ce31fa30f66a44abe343744a3804e5dfe1e6' => 
    array (
      0 => 'Views\\template\\quan_tri\\v_cap_nhat_san_pham.tpl',
      1 => 1433477197,
      2 => 'file',
    ),
    '73e40c5fb8d82f61902f44e6118ca5d3b1762a96' => 
    array (
      0 => 'Views\\template\\layout.tpl',
      1 => 1433435693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2018955707bd9854a22-30891815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55707bd9b60ea7_26864027',
  'variables' => 
  array (
    'title' => 0,
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55707bd9b60ea7_26864027')) {function content_55707bd9b60ea7_26864027($_smarty_tpl) {?><!DOCTYPE html>
<html>

	<head>
		<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
		<meta  charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/font-awesome/css/font-awesome.min.css" />

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			$(document).ready(function() {
				$("#muahang").click(function() {
					//alert("123");
					var tt = $("#muahang").attr("name");
					var form_data = {
						sp : tt,
						sl : $("#soluong_sp").val()
					};

					$.ajax({
						url : "<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/gio-hang/them-san-pham.html",
						type : 'POST',
						data : form_data,
						dataType : 'json',
						success : function(data) {
							$("#TTGH").html(data['tsl'] + ' product - ' + data['tt'] + ' vnđ ');
						}
					});

				});
				   $("#ten_san_pham").blur(function(){
               var chuoi=$("#ten_san_pham").val();
               if(chuoi.length>0)
               {
                    $("#ten_san_pham_url").val(bodau(chuoi));
               }
            });
            function bodau(str)
            {
                var str = str;
                str= str.toLowerCase();
                str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
                str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
                str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
                str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
                str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
                str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
                str= str.replace(/đ/g,"d");
                str= str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,"-");
                str= str.replace(/-+-/g,"-"); 
                str= str.replace(/^\-+|\-+$/g,"");
                return str;
            }
			});

		<?php echo '</script'; ?>
>
	</head>

	<body>
		<div class="container-fluid">
			
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/ckeditor_sp/ckeditor.js"><?php echo '</script'; ?>
>
<h2 class="col-sm-offset-2">Thông tin sản phẩm</h2>
<?php if (isset($_smarty_tpl->tpl_vars['err']->value)) {?>
<h4 class="col-sm-offset-2" style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</h4>
<?php }?>
<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6">
				<label for="ma_san_pham">Mã sản phẩm: </label>
				<input type="text" class="form-control" id="ma_san_pham" name="ma_san_pham" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ma_san_pham'];?>
" placeholder="Mã sản phẩm" disabled="">
			</div>
			<div class="col-md-6">
				<label for="ten_san_pham">Tên sản phẩm: </label>
				<input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_san_pham'];?>
" placeholder="Tên sản phẩm">
			</div>
			<div class='col-md-6'>
				<label for="ten_san_pham_url">Tên URL: </label>
				<input type="text" class="form-control" id="ten_san_pham_url" name="ten_san_pham_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_san_pham'];?>
" placeholder="Tên URL:">
			</div>
			<div class='col-md-6'>
				<label for="ten_san_pham_url">Loại: </label>
				<select name="ma_loai" class="form-control">
					<?php  $_smarty_tpl->tpl_vars['lsp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lsp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dsLoaiSanPham']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lsp']->key => $_smarty_tpl->tpl_vars['lsp']->value) {
$_smarty_tpl->tpl_vars['lsp']->_loop = true;
?>
					<?php if ($_smarty_tpl->tpl_vars['data']->value['ma_loai']==$_smarty_tpl->tpl_vars['lsp']->value['ma_loai']) {?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['lsp']->value['ma_loai'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['lsp']->value['ten_loai'];?>
</option>
					<?php } else { ?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['lsp']->value['ma_loai'];?>
"><?php echo $_smarty_tpl->tpl_vars['lsp']->value['ten_loai'];?>
</option>
					<?php }?>
					<?php } ?>
				</select>
			</div>
			<div class='col-md-6'>
				<label for="don_gia">Đơn Giá: </label>
				<input type="number" class="form-control" id="don_gia" name="don_gia" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['don_gia'];?>
" placeholder="Đơn Giá">
			</div>
			<div class='col-md-6'>
				<label for="hinh">Hình:</label>
				<input type="file" name="hinh" class="form-control"/>
			</div>
			<div class='col-md-6'>
				<label for="san_pham_moi">Sản Phẩm Mới :</label>
				<input type="checkbox" id="san_pham_moi" name="san_pham_moi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['san_pham_moi'];?>
"/>
			</div>
			<div class='col-md-6'>
				<label for="so_lan_xem">Số Lần Xem :</label>
				<input type="number" name="so_lan_xem" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['so_lan_xem'];?>
"/>
			</div>
			<div class='col-md-6'>
				<label for="ngay_tao">Ngày tạo: </label>
				<input type="date" id="ngay_tao" name="ngay_tao" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ngay_tao'];?>
"/>
			</div>
			<div class='col-md-6'>
				<label for="mo_ta_tom_tat">Mô tả tóm tắt :</label>
				<textarea name="mo_ta_tom_tat" class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['mo_ta_tom_tat'];?>
</textarea>
			</div>
			<div class='col-md-12'>
				<label for="mo_ta_chi_tiet">Mô tả chi tiết:</label>
				<textarea name="mo_ta_chi_tiet" class="ckeditor"><?php echo $_smarty_tpl->tpl_vars['data']->value['mo_ta_chi_tiet'];?>
</textarea>
			</div>
		</div>
		<div class="col-md-12">
			<input type="submit" class="btn btn-primary btn-block" value="Update" name="capnhat" style="margin-top: 40px;"/>
		</div>

	</div>

	<!--
	<div class="form-group">
	<label class="control-label col-md-6" for="ten_san_pham">TÃªn sáº£n pháº©m:</label>
	<div class="col-md-6">
	<input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_san_pham'];?>
" placeholder="tÃªn sáº£n pháº©m">
	<span style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_san_pham'];?>
</span>
	</div>

	<label class="control-label col-md-6" for="ten_san_pham_url">TÃªn URL:</label>
	<div class="col-md-6">
	<input type="text" class="form-control" id="ten_san_pham_url" name="ten_san_pham_url" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ten_san_pham'];?>
" placeholder="tÃªn url">
	<span style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['ten_san_pham_url'];?>
</span>
	</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-6" for="ma_loai">Loáº¡i sáº£n pháº©m:</label>
	<div class="col-md-6">
	<select name="ma_loai" class="form-control">
	<?php  $_smarty_tpl->tpl_vars['lsp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lsp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dsLoaiSanPham']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lsp']->key => $_smarty_tpl->tpl_vars['lsp']->value) {
$_smarty_tpl->tpl_vars['lsp']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['data']->value['ma_loai']==$_smarty_tpl->tpl_vars['lsp']->value['ma_loai']) {?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['lsp']->value['ma_loai'];?>
" selected="selected"><?php echo $_smarty_tpl->tpl_vars['lsp']->value['ten_loai'];?>
</option>
	<?php } else { ?>
	<option value="<?php echo $_smarty_tpl->tpl_vars['lsp']->value['ma_loai'];?>
"><?php echo $_smarty_tpl->tpl_vars['lsp']->value['ten_loai'];?>
</option>
	<?php }?>
	<?php } ?>
	</select>
	</div>

	<label class="control-label col-md-6" for="don_gia">Ä�Æ¡n giÃ¡:</label>
	<div class="col-md-6">
	<input type="number" class="form-control" id="don_gia" name="don_gia" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['don_gia'];?>
" placeholder="Ä�Æ¡n giÃ¡">
	<span style="color:#ff0000"><?php echo $_smarty_tpl->tpl_vars['dataErr']->value['don_gia'];?>
</span>
	</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-6" for="hinh">HÃ¬nh:</label>
	<div class="col-md-6">
	<input type="file" name="hinh" class="form-control"/>
	</div>

	<label class="control-label col-md-6" for="san_pham_moi">Sáº£n pháº©m má»›i:</label>
	<div class="col-md-6">
	<input type="checkbox" id="san_pham_moi" name="san_pham_moi" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['san_pham_moi'];?>
" placeholder="tÃªn url"/>

	</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-6" for="so_lan_xem">Sá»‘ láº§n xem:</label>
	<div class="col-md-6">
	<input type="number" name="so_lan_xem" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['so_lan_xem'];?>
"/>
	</div>

	<label class="control-label col-md-6" for="san_pham_moi">NgÃ y táº¡o:</label>
	<div class="col-md-6">
	<input type="date" id="ngay_tao" name="ngay_tao" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['ngay_tao'];?>
" placeholder="tÃªn url"/>
	</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-6" for="so_lan_xem">MÃ´ táº£ tÃ³m táº¯t:</label>
	<div class="col-sm-10">
	<textarea name="mo_ta_tom_tat" class="form-control"><?php echo $_smarty_tpl->tpl_vars['data']->value['mo_ta_tom_tat'];?>
</textarea>
	</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-6" for="mo_ta_chi_tiet">MÃ´ táº£ chi tiáº¿t:</label>
	<div class="col-sm-10">
	<textarea name="mo_ta_chi_tiet" class="ckeditor"><?php echo $_smarty_tpl->tpl_vars['data']->value['mo_ta_chi_tiet'];?>
</textarea>
	</div>
	</div>

	<div class="form-group">
	<div class="col-md-12">
	<input type="submit" class="btn btn-primary" value="Cáº­p nháº­t" name="capnhat"/>
	</div>
	</div>-->

</form>

		</div>

	</body>
</html><?php }} ?>

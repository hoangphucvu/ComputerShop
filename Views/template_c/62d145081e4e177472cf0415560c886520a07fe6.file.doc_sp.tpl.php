<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-08 18:06:18
         compiled from "Views\template\quan_tri\doc_sp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20718556dc8c5c5fbb5-91995860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62d145081e4e177472cf0415560c886520a07fe6' => 
    array (
      0 => 'Views\\template\\quan_tri\\doc_sp.tpl',
      1 => 1433777718,
      2 => 'file',
    ),
    '73e40c5fb8d82f61902f44e6118ca5d3b1762a96' => 
    array (
      0 => 'Views\\template\\layout.tpl',
      1 => 1433435693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20718556dc8c5c5fbb5-91995860',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556dc8c60475f2_28945828',
  'variables' => 
  array (
    'title' => 0,
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556dc8c60475f2_28945828')) {function content_556dc8c60475f2_28945828($_smarty_tpl) {?><!DOCTYPE html>
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
			
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title" id="panel-title">Danh sách san pham<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
      </div>
      <div class="panel-body">
      <h3><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ngo-hung-phuc/them-san-pham.html">Thêm san pham</a></h3>
        <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Mã sp</th>
            <th>Tên sp</th>
            <th>Tên URL</th>
            <th>Ðon giá</th>
            <th>San pham moi</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dssp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?>
          <tr>
            <th scope="row"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham_url'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['don_gia'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['sp']->value['san_pham_moi'];?>
</td>
            <td>
                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ngo-hung-phuc/san-pham/cap-nhat-san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
" class="btn btn-danger">Cap nhat</a>
                <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ngo-hung-phuc/san-pham/xoa-san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
" class="btn btn-success" onclick="return confirm('Sure??')">Xóa</a>
                </td>
          </tr>
          <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
          <?php } ?>          
        </tbody>
      </table>
      <div class="row" align="center"><?php echo $_smarty_tpl->tpl_vars['link_trang']->value;?>
</div>
      </div>
    </div>

		</div>

	</body>
</html><?php }} ?>

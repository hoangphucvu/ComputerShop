<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 05:32:10
         compiled from "Views\template\quan_tri\quan_tri.tpl" */ ?>
<?php /*%%SmartyHeaderCode:803556d2eb070f1b7-13022627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8feeafd82b4d6bac37422c6767d2149bf73a890f' => 
    array (
      0 => 'Views\\template\\quan_tri\\quan_tri.tpl',
      1 => 1433251841,
      2 => 'file',
    ),
    '73e40c5fb8d82f61902f44e6118ca5d3b1762a96' => 
    array (
      0 => 'Views\\template\\layout.tpl',
      1 => 1433435693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '803556d2eb070f1b7-13022627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556d2eb0bd60d5_21598588',
  'variables' => 
  array (
    'title' => 0,
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556d2eb0bd60d5_21598588')) {function content_556d2eb0bd60d5_21598588($_smarty_tpl) {?><!DOCTYPE html>
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
			
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Quan Tri</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
     
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Quan Ly <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ngo-hung-phuc/update">San Pham</a></li>
            <li><a href="#">Nguoi Dung</a></li>
            <li><a href="#">Don Hang</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <div class="col-md-12"> 
        <?php if (isset($_SESSION['user'])) {?>
        Hello <?php echo $_SESSION['user'];?>

        <?php }?>
        </div>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Account <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/ngo-hung-phuc/dang-xuat">Log out</a></li>
            <li><a href="#">Change password</a></li>
          </ul>
        </li>

       
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


		</div>

	</body>
</html><?php }} ?>

<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-05 05:27:58
         compiled from "Views\template\quan_tri\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6968556c14b915e881-60715434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e60092ed6b3d58f57a74081555645a481df2992c' => 
    array (
      0 => 'Views\\template\\quan_tri\\login.tpl',
      1 => 1433250568,
      2 => 'file',
    ),
    '73e40c5fb8d82f61902f44e6118ca5d3b1762a96' => 
    array (
      0 => 'Views\\template\\layout.tpl',
      1 => 1433435693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6968556c14b915e881-60715434',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556c14b92095b6_61895173',
  'variables' => 
  array (
    'title' => 0,
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c14b92095b6_61895173')) {function content_556c14b92095b6_61895173($_smarty_tpl) {?><!DOCTYPE html>
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
			
<form class="form-signin" method="POST" role="form">
<div class="container">
	<div class="card card-container">
		<!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
		<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
		<p id="profile-name" class="profile-name-card"></p>
		
			<span id="reauth-email" class="reauth-email"></span>
			<input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
			<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
			<div id="remember" class="checkbox">
				<label>
					<input type="checkbox" value="remember-me">
					Remember me </label>
			</div>
			<button class="btn btn-lg btn-primary btn-block btn-signin " type="submit" name="submit_login">
				Sign in
			</button>
	
		<a href="#" class="forgot-password"> Forgot the password? </a>
	</div><!-- /card-container -->
</div><!-- /container -->

</form><!-- /form -->
<?php if (isset($_smarty_tpl->tpl_vars['err']->value)) {?>
<div style="col-sm-offset-5" style="color:#ea5145"><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</div>
<?php }?>

		</div>

	</body>
</html><?php }} ?>

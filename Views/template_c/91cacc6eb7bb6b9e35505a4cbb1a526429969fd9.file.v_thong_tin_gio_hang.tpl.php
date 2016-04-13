<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 12:58:22
         compiled from "Views\template\sanpham\v_thong_tin_gio_hang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3414556451ce269856-14467219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '91cacc6eb7bb6b9e35505a4cbb1a526429969fd9' => 
    array (
      0 => 'Views\\template\\sanpham\\v_thong_tin_gio_hang.tpl',
      1 => 1432522288,
      2 => 'file',
    ),
    '0ac3d165e5b44be46d2d248871ce5c1ca5864243' => 
    array (
      0 => 'Views\\template\\index.tpl',
      1 => 1432524662,
      2 => 'file',
    ),
    'a1e615d0275c1710e40f9609bac9491e30c8b94f' => 
    array (
      0 => 'Views\\template\\header.tpl',
      1 => 1432524658,
      2 => 'file',
    ),
    'ca3857acd97e446d8e48981c65df3fc0956fadee' => 
    array (
      0 => 'Views\\template\\nav.tpl',
      1 => 1432609234,
      2 => 'file',
    ),
    '9c0ffb0c64a6d9a5b0c83fbd87020106018a2b60' => 
    array (
      0 => 'Views\\template\\top.tpl',
      1 => 1432524688,
      2 => 'file',
    ),
    '755b412f0eb7910a0215f568475fbe4116a11d7c' => 
    array (
      0 => 'Views\\template\\header_pro.tpl',
      1 => 1432524654,
      2 => 'file',
    ),
    '41b8a24b66e0c03accc2bff424a11f06cd3414c2' => 
    array (
      0 => 'Views\\template\\style_featured.tpl',
      1 => 1432400008,
      2 => 'file',
    ),
    '63128d92559879be1a00fbe31fe263ada8195f38' => 
    array (
      0 => 'Views\\template\\pro_info.tpl',
      1 => 1432212576,
      2 => 'file',
    ),
    'd043da4c8e55e515937771a425cad497cefe129b' => 
    array (
      0 => 'Views\\template\\banner_flash.tpl',
      1 => 1431620230,
      2 => 'file',
    ),
    '67381906a85447b6034f90dfc57804f1c792a1d3' => 
    array (
      0 => 'Views\\template\\footer.tpl',
      1 => 1432216062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3414556451ce269856-14467219',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_556451ce545f16_85487715',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556451ce545f16_85487715')) {function content_556451ce545f16_85487715($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>

		<?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '3414556451ce269856-14467219');
content_556451ce31cd08_81754368($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row navbar-inverse">
				<!--nav-->
				<?php /*  Call merged included template "nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '3414556451ce269856-14467219');
content_556451ce36cec6_86053429($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "nav.tpl" */?>
			</div>
			
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title" id="panel-title">Thông tin giỏ hàng<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
	</div>
	<div class="panel-body">
		<form action="#" method="POST">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>STT</th>
						<th>Mã sản phẩm</th>
						<th>Tên sản phẩm</th>
						<th>Số Lượng</th>
						<th>Đơn giá</th>
						<th>Thành tiền</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
					<?php $_smarty_tpl->tpl_vars['tt'] = new Smarty_variable(0, null, 0);?>
					<?php if (isset($_smarty_tpl->tpl_vars['tt_gio_hang']->value)) {?>
					<?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tt_gio_hang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
						<td>
						<input name="sl_<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value['so_luong'];?>
" size="5" type="number" min="0" max="20"/>
						</td>
						<td><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['don_gia']);?>
</td>
						<td><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['don_gia']*$_smarty_tpl->tpl_vars['sp']->value['so_luong']);?>
</td>
						<input  type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
" name="masp"/>
						<th>
						<button type="submit" name="xoa" class="btn btn-danger">
							X
						</button></th>
						<input class="hidden" type="text" name="txtid" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
" />
					</tr>
					<?php $_smarty_tpl->tpl_vars['tt'] = new Smarty_variable($_smarty_tpl->tpl_vars['tt']->value+$_smarty_tpl->tpl_vars['sp']->value['don_gia']*$_smarty_tpl->tpl_vars['sp']->value['so_luong'], null, 0);?>
					<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
					<?php } ?>
					<?php }?>
					<tr>
						<td colspan="6" class="text-center"><h3><em>Tổng tiền:</em></h3></td>
						<td colspan="6" class="text-center"><h3><?php echo number_format($_smarty_tpl->tpl_vars['tt']->value);?>
 <small>vnđ</small></h3></td>

					</tr>
					<tr>
						<td colspan="6" class="text-center">
						<input type="submit" name="capnhat" value="Cập nhật giỏ hàng" class="btn btn-success" />
						<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/khach-hang/dat-hang.html">
						<button type="button" class="btn btn-info">
							Đặt hàng
						</button></a><a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/gio-hang/xoa-gio-hang.html">
						<button type="button" class="btn btn-danger">
							Xóa giỏ hàng
						</button></a></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</div>



		</div>

		<footer>
			<!--footer-->
			<?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '3414556451ce269856-14467219');
content_556451ce52b3e4_59525762($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>
		</footer>
	</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 12:58:22
         compiled from "Views\template\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_556451ce31cd08_81754368')) {function content_556451ce31cd08_81754368($_smarty_tpl) {?><head>
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
	<link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/js/jquery.min.js"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 type="text/javascript">
		jQuery(function($) {
			$('#carousel1').carousel({
				interval : 2000
			});

			var clickEvent = false;

			$('#carousel1').on('click', '.nav a', function() {
				clickEvent = true;
				$('.nav li').removeClass('active');
				$(this).parent().addClass('active');
			}).on('slid.bs.carousel', function(e) {
				if (!clickEvent) {
					var count = $('.nav').children().length - 1;
					var current = $('.nav li.active');
					current.removeClass('active').next().addClass('active');
					var id = parseInt(current.data('slide-to'));
					if (count == id) {
						$('.nav li').first().addClass('active');
					}
				}
				clickEvent = false;
			});
		});
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$(window).load(function() {
			$("#news").sticky({
				topSpacing : 10
			});
		});
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		function submit_search() {
			if (document.forms["form_search"]["key"].value.length == 0) {
				alert("Bạn chưa nhập từ khóa tìm kiếm! ");
				return false;
			} else {
				return true;
			}
		}


		$(".more").click(function() {
			$(".pro_info_small_wrap").css("height", "auto");

		});
	<?php echo '</script'; ?>
>
	<div id="fb-root"></div>
	<?php echo '<script'; ?>
>
		( function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id))
					return;
				js = d.createElement(s);
				js.id = id;
				js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=1591301387785409";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
	<?php echo '</script'; ?>
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
						$("#TTGH").html(data['tsl'] + ' sản phẩm - ' + data['tt'] + ' vnđ ');
					}
				});
			});
		});

	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		document.getElementById("more_click").onclick = function() {
			this.style.height - auto;
		}

	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$('.bxslider').bxSlider({
				minSlides : 10,
				maxSlides : 10,
				slideWidth : 170,
				slideMargin : 10,
				ticker : true,
				speed : 100000
			});
		});
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
><?php echo '</script'; ?>
>
</head><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 12:58:22
         compiled from "Views\template\nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_556451ce36cec6_86053429')) {function content_556451ce36cec6_86053429($_smarty_tpl) {?>
<div class="col-md-12">
	<div class="col-xs-3 col-md-3 visible-lg" id="logo">
        <a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
">
            <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/icon-php.png" alt="Home" title="Home" />
        
		</a>
	</div>
  	<!--  
    <div class="col-md-3" id="search_form">
		<h4><span class="glyphicon glyphicon-phone-alt"></span> Tư vấn miễn phí : 1900 6606 </h4>
		<form action="search.php" class="input-group" name="form_search"
		onsubmit="return submit_search();" role="search">
			<input type="text" class="form-control"
			placeholder="Tìm kiếm sản phẩm" id="key" name="key">
			<span
			class="input-group-btn">
				<button class="btn btn-info" type="submit">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
				</button>
              </span>
                
		</form>
	</div>-->

	<div id="login" class="col-md-9">
        
		<ul class="nav navbar-nav navbar-right" style="margin-top:-50px">

			<li>
				<a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
			</li>
			<li>
				<a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
			</li>
		</ul>
        
		<nav class="nav navbar-nav navbar-right">
           
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
                
			</div>

			<div class="collapse navbar-collapse js-navbar-collapse nav_pro">
				<ul class="nav navbar-nav">
					<li class="dropdown dropdown-large">
						

                            <a class="dropdown-toggle product_show" data-toggle="dropdown">Product</a>
                      
						<ul class="dropdown-menu dropdown-menu-large row">
							<?php if (isset($_smarty_tpl->tpl_vars['ds_loai_san_pham_menu']->value)) {?>
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
							<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['ten_loai_cha'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ds_loai_san_pham_menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['ten_loai_cha']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
							<li class="col-sm-3">
								<ul>
									<li class="dropdown-header">
										<?php echo $_smarty_tpl->tpl_vars['ten_loai_cha']->value;?>

									</li>
									<?php  $_smarty_tpl->tpl_vars['loai_con'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai_con']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai_con']->key => $_smarty_tpl->tpl_vars['loai_con']->value) {
$_smarty_tpl->tpl_vars['loai_con']->_loop = true;
?>
									<li>
										<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/san-pham/<?php echo $_smarty_tpl->tpl_vars['item']->value[0];?>
/<?php echo $_smarty_tpl->tpl_vars['loai_con']->value['ten_loai_san_pham_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['loai_con']->value['ma_loai'];?>
.html"><?php echo $_smarty_tpl->tpl_vars['loai_con']->value['ten_loai'];?>
</a>
									</li>
									<?php } ?>
									<li class="divider"></li>
								</ul>
							</li>

							<?php } ?>

							<?php }?>
						</ul>

					</li>
				</ul>
			</div><!-- /.nav-collapse -->
		</nav>

	</div>
</div>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 12:58:22
         compiled from "Views\template\top.tpl" */ ?>
<?php if ($_valid && !is_callable('content_556451ce3df5d8_29827393')) {function content_556451ce3df5d8_29827393($_smarty_tpl) {?><div class="col-md-3" id="left_menu">
	<div class="list-group">
		<a href="#" class="list-group-item disabled"> Cras justo odio </a>
		<a href="#" class="list-group-item">Dapibus ac facilisis in</a>
		<a href="#" class="list-group-item">Morbi leo risus</a>
		<a href="#" class="list-group-item">Porta ac consectetur ac</a>
		<a href="#" class="list-group-item">Vestibulum at eros</a>
	</div>
	<form name="form_search" id="form_search" style="background-img: url('<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/search-icon.png') no-repeat 9px center;" onsubmit="return submit_search();">
		<input type="search"
		placeholder="Tìm kiếm sản phẩm" id="key" name="key" />

	</form>
</div>
<div class="col-md-6" id="slider">
	<div id="carousel1" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/slider_1.jpg">
			</div>
			<div class="item">
				<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/slider_2.jpg">
				<!-- <div class="carousel-caption">
				<div class="col-lg-12 text-center v-center" style="font-size: 39pt;">
				<a href="#"><span class="avatar"><i class="fa fa-google-plus"></i></span></a>
				<a href="#"><span class="avatar"><i class="fa fa-linkedin"></i></span></a>
				<a href="#"><span class="avatar"><i class="fa fa-facebook"></i></span></a>
				<a href="#"><span class="avatar"><i class="fa fa-github"></i></span></a>
				</div>
				</div> -->
			</div>
			<div class="item">
				<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/slider_3.jpg">
			</div>
		</div>
		<ul class="nav nav-pills nav-justified">
			<li data-target="#carousel1" data-slide-to="0" class="active">
				<a href="#">Sản Phẩm Mới<small>Những mặt hàng mới
					nhất hiện nay</small></a>
			</li>
			<li data-target="#carousel1" data-slide-to="1">
				<a href="#">Sản
				Phẩm Hot<small>Top các sản phẩm bán chạy hiện nay</small> </a>
			</li>
			<li data-target="#carousel1" data-slide-to="2">
				<a href="#">Giảm
				Giá<small>Xả hàng,giảm giá các mặt hàng tồn kho</small> </a>
			</li>
		</ul>
	</div>
</div>
<div class="col-md-3 hidden-xs" id="banner_flash">
	<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/flash.jpg" alt="" title="">
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 12:58:22
         compiled from "Views\template\header_pro.tpl" */ ?>
<?php if ($_valid && !is_callable('content_556451ce409536_46924708')) {function content_556451ce409536_46924708($_smarty_tpl) {?><ol class="breadcrumb">
	<li>
		Sản Phẩm
	</li>
	<li>
		Sản Phẩm Mới Nhất
	</li>

</ol>

<?php if (isset($_smarty_tpl->tpl_vars['dssp_moi']->value)) {?>

<ul class="bxslider" >
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dssp_moi']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>

	<li>
		<a href="san-pham/<?php echo $_smarty_tpl->tpl_vars['item']->value['ten_san_pham_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['ma_san_pham'];?>
.html"> <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['item']->value['hinh'];?>
"
		class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['ten_san_pham'];?>
" > </a>
	</li>

	<?php } ?>
</ul>

<?php }?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 12:58:22
         compiled from "Views\template\style_featured.tpl" */ ?>
<?php if ($_valid && !is_callable('content_556451ce44a2c6_45603640')) {function content_556451ce44a2c6_45603640($_smarty_tpl) {?><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 12:58:22
         compiled from "Views\template\pro_info.tpl" */ ?>
<?php if ($_valid && !is_callable('content_556451ce464e06_82191393')) {function content_556451ce464e06_82191393($_smarty_tpl) {?><ol class="breadcrumb">
		<li class="">
			Sản Phẩm
		</li>
		<li>
			<a href="" class="active">Tổng Hợp</a>
		</li>
</ol>
<?php if (isset($_smarty_tpl->tpl_vars['dssp_index']->value)) {?>
<?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dssp_index']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?>
<div class="col-md-2 pro_info_small">
	<div class="cuadro_intro_hover ">
		<p >
			<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['hinh'];?>
"  alt="<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
">
		</p>
		<div class="caption">
			<div class="blur"></div>
			<div class="caption-text">
				<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;"><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['don_gia']);?>
 VND</h3>
				<p style="padding:10px">
					<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>

				</p>
				<a class=" btn btn-default btn_details" href="san-pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
.html"><span class="glyphicon glyphicon-plus"> Xem Thêm</span></a>
			</div>
		</div>
	</div>

</div>
<?php } ?>
<?php }?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 12:58:22
         compiled from "Views\template\banner_flash.tpl" */ ?>
<?php if ($_valid && !is_callable('content_556451ce4ad5b0_24090776')) {function content_556451ce4ad5b0_24090776($_smarty_tpl) {?><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/flash.gif" alt="" title="" class="hidden-xs visible-lg">
<div class="list-group hidden-xs visible-lg" id="news" >
	<a href="#" class="list-group-item active"> Cras justo odio </a>
	<a href="#" class="list-group-item">Dapibus ac facilisis inDapibus ac facilisis inDapibus ac facilisis inDapibus ac facilisis in</a>
	<a href="#" class="list-group-item">Morbi leo risus</a>
	<a href="#" class="list-group-item">Porta ac consectetur ac</a>
	<a href="#" class="list-group-item">Vestibulum at eros</a>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-26 12:58:22
         compiled from "Views\template\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_556451ce52b3e4_59525762')) {function content_556451ce52b3e4_59525762($_smarty_tpl) {?><div class="footer" id="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
				<h3> Lorem Ipsum </h3>
				<ul>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
				</ul>
			</div>
			<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
				<h3> Lorem Ipsum </h3>
				<ul>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
				</ul>
			</div>
			<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
				<h3> Lorem Ipsum </h3>
				<ul>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
				</ul>
			</div>
			<div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
				<h3> Lorem Ipsum </h3>
				<ul>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
					<li>
						<a href="#"> Lorem Ipsum </a>
					</li>
				</ul>
			</div>
			<div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
				<h3> Lorem Ipsum </h3>
				<ul>
					<li>
						<div class="input-append newsletter-box text-center">
							<input type="text" class="full text-center" placeholder="Email ">
							<button class="btn  bg-gray" type="button">
								Lorem ipsum <i class="fa fa-long-arrow-right"> </i>
							</button>
						</div>
					</li>
				</ul>
				<ul class="social">
					<li>
						<a href="#"> <i class=" fa fa-facebook">   </i> </a>
					</li>
					<li>
						<a href="#"> <i class="fa fa-twitter">   </i> </a>
					</li>
					<li>
						<a href="#"> <i class="fa fa-google-plus">   </i> </a>
					</li>
					<li>
						<a href="#"> <i class="fa fa-pinterest">   </i> </a>
					</li>
					<li>
						<a href="#"> <i class="fa fa-youtube">   </i> </a>
					</li>
				</ul>
			</div>
		</div>
		<!--/.row-->
	</div>
	<!--/.container-->
</div>
<!--/.footer-->

<div class="footer-bottom">
	<div class="container">
		<p class="pull-left">
			Copyright © Ngô Hùng Phúc. All right reserved.
		</p>
		<div class="pull-right">
			<ul class="nav nav-pills payments">
				<li>
					<i class="fa fa-cc-visa"></i>
				</li>
				<li>
					<i class="fa fa-cc-mastercard"></i>
				</li>
				<li>
					<i class="fa fa-cc-amex"></i>
				</li>
				<li>
					<i class="fa fa-cc-paypal"></i>
				</li>
			</ul>
		</div>
	</div>
</div>
<!--/.footer-bottom-->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/jquery.bxslider/jquery.bxslider.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/js/jquery.sticky.js"><?php echo '</script'; ?>
>
<?php }} ?>

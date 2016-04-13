<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-08 18:49:35
         compiled from "Views\template\sanpham\chitiet.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1545554e25c5789b7-88977163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5948d636a5bffc8430f3bdf0d40a222696236cb' => 
    array (
      0 => 'Views\\template\\sanpham\\chitiet.tpl',
      1 => 1433084968,
      2 => 'file',
    ),
    '5485d3848891c3948bccfd6ce9ddd742ec8ac773' => 
    array (
      0 => 'Views\\template\\index.tpl',
      1 => 1433084336,
      2 => 'file',
    ),
    '0f17e00b44a38dc26cd6bc8ddb61732c8dbac27b' => 
    array (
      0 => 'Views\\template\\header.tpl',
      1 => 1433132425,
      2 => 'file',
    ),
    '636df209ab5f4f4bdbeb882bfc1e8428530142ec' => 
    array (
      0 => 'Views\\template\\nav.tpl',
      1 => 1433217105,
      2 => 'file',
    ),
    '4ee628a5c5abd1b79d4464ebbb1ccb331f94adf2' => 
    array (
      0 => 'Views\\template\\top.tpl',
      1 => 1433132930,
      2 => 'file',
    ),
    'b293c97d0af3ffb0af50485542eadcc9fb245829' => 
    array (
      0 => 'Views\\template\\header_pro.tpl',
      1 => 1433172438,
      2 => 'file',
    ),
    'f7d10d15a61b38a1b90126d10b61e3f409551b80' => 
    array (
      0 => 'Views\\template\\style_featured.tpl',
      1 => 1432400008,
      2 => 'file',
    ),
    '6ef14cfa4c0023b70a2dd8e9cf6399a2a2f800cf' => 
    array (
      0 => 'Views\\template\\pro_info.tpl',
      1 => 1433084414,
      2 => 'file',
    ),
    'd78e2a2fe8d9e3fb240855841faceffb081eb372' => 
    array (
      0 => 'Views\\template\\banner_flash.tpl',
      1 => 1433084371,
      2 => 'file',
    ),
    '5b07418aca3626588aa550e90f6f70a50a442436' => 
    array (
      0 => 'Views\\template\\footer.tpl',
      1 => 1433476080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1545554e25c5789b7-88977163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5554e25cdd8054_42971216',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5554e25cdd8054_42971216')) {function content_5554e25cdd8054_42971216($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>

		<?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1545554e25c5789b7-88977163');
content_5575c79fe18ad9_11862719($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row navbar-inverse">
				<!--nav-->
				<?php /*  Call merged included template "nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1545554e25c5789b7-88977163');
content_5575c7a0074663_87497261($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "nav.tpl" */?>
			</div>
			
<ol class="breadcrumb">
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
"><i class="glyphicon glyphicon-home"></i></a>
	</li>
	<li>
		Product
	</li>
	<li class="active">
		<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>

	</li>
</ol>
<div class="row">
	<div class="col-md-4 ">
		<div class="panel panel-default product_infoma">
			<div class="panel-heading">
				<h3 class="panel-title" id="panel-title"><?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
			</div>
			<div class="panel-body">
				<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value['hinh'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
">
			</div>
		</div>
	</div>
	<div class="col-md-4 ">
		<div class="panel panel-default order">
			<div class="panel-heading">
				Your Shopping Cart
			</div>
			<div class="panel-body">
				<p>
					<span><i class="caret"></i></span><b> Product ID: </b><?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>

				</p>
				<p>
					<span><i class="caret"></i></span><b>Status: </b> Còn hàng
				</p>
				<p class="price">
					<span><i class="caret"></i></span><b>Price: </b><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['don_gia']);?>
 VND
				</p>

				<div class="form-group">

					Số Lượng:
					<input  name="soluong_sp" type="number" value="1"  max="20" min="0" class="form-control" maxlength="5" id="soluong_sp"/>

					<button type="button" name="<?php echo $_smarty_tpl->tpl_vars['sp']->value['ma_san_pham'];?>
-<?php echo $_smarty_tpl->tpl_vars['sp']->value['don_gia'];?>
" id="muahang" class="btn btn-default"/>
					<span class="fa fa-shopping-cart" ></span> Add to cart</button>
				</div>

				<div style="margin-top:10px;margin-left:5px;margin-bottom:10px"
				class="fb-like"
				data-share="true"
				data-width="450"
				data-show-faces="true"></div>
				<p>
					<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/gio-hang/thong-tin-gio-hang.html" class="btn btn-block btn-primary btn-danger"><span id="TTGH"> <?php echo $_smarty_tpl->tpl_vars['tsl_gh']->value;?>
 products- <?php echo number_format($_smarty_tpl->tpl_vars['tt_dh']->value);?>
 VND</span></a>
				</p>
			</div>
		</div>
	</div>
	<div class="col-md-4 ">
		<div class="panel panel-default chitiet details_description">
			<div class="panel-heading">
				Details
			</div>
			<div class="panel-body ">

				<?php echo $_smarty_tpl->tpl_vars['sp']->value['mo_ta_tom_tat'];?>

				<?php echo $_smarty_tpl->tpl_vars['sp']->value['mo_ta_chi_tiet'];?>


			</div>

		</div>

	</div>

</div>

<div class="fb-comments" data-href="" data-width="600" data-colorscheme="light" style="margin-top:20px;margin-bottom:20px"></div>
<ol class="breadcrumb">
	<li>
		<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
"><i class="glyphicon glyphicon-home"></i></a>
	</li>
	<li>
		Similar Products
	</li>
</ol>
<div class="row">
	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dssp_cung_loai']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<div class="col-xs-6 col-md-3 similar_pro">
		<p>
			<a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['ten_san_pham_url'];?>
-<?php echo $_smarty_tpl->tpl_vars['item']->value['ma_san_pham'];?>
.html"> <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['item']->value['hinh'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['ten_san_pham'];?>
"> <?php echo $_smarty_tpl->tpl_vars['item']->value['ten_san_pham'];?>
 </a>
		</p>

	</div>
	<?php } ?>
</div>



		</div>

		<footer>
			<!--footer-->
			<?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '1545554e25c5789b7-88977163');
content_5575c7a0561234_12079279($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>
		</footer>
	</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-08 18:49:35
         compiled from "Views\template\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5575c79fe18ad9_11862719')) {function content_5575c79fe18ad9_11862719($_smarty_tpl) {?><head>
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
				alert("Please enter name of the product you want to find! ");
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
						$("#TTGH").html(data['tsl'] + ' product - ' + data['tt'] + ' vnđ ');
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
>
		$(function() {
			$more = $('.more');
			$start = 20;
			// 20 kết quả mặc định
			$text_default = $more.text();
			$more.click(function() {
				if (!$(this).hasClass('clicked')) {
					$(this).addClass('clicked').text('Loading Please Wait....');
					$.post('process.php', {
						start : $start
					}, function(data) {
						if (data) {
							$('.pro_info_small_wrap').append(data);
							$more.removeClass('clicked').text($text_default);
							$start += 10;
							// 10 giá trị load ra
						} else {
							$more.remove();
						}
					});
				}
			});
		});
	<?php echo '</script'; ?>
>
</head><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-08 18:49:36
         compiled from "Views\template\nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5575c7a0074663_87497261')) {function content_5575c7a0074663_87497261($_smarty_tpl) {?><div class="col-md-12">
	<div class="col-xs-3 col-md-3 visible-lg" id="logo">
		<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
"> <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/icon-php.png" alt="Home" title="Home" /> </a>
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

		<ul class="nav navbar-nav navbar-right">

			<li>
				<a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
			</li>
			<li>
				<a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
			</li>
			<li>
				<a href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/lien-he"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a>
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-08 18:49:36
         compiled from "Views\template\top.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5575c7a0381813_48495375')) {function content_5575c7a0381813_48495375($_smarty_tpl) {?><div class="col-md-3" id="left_menu">
	<div class="list-group">
		<a href="#" class="list-group-item disabled"> Trend Techno News </a>
		<a href="#" class="list-group-item">Trend Techno News 1</a>
		<a href="#" class="list-group-item">Trend Techno News 2</a>
		<a href="#" class="list-group-item">Trend Techno News 3</a>
		<a href="#" class="list-group-item">Trend Techno News 4 </a>
	</div>
	<form name="form_search" id="form_search" style="background-img: url('<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/search-icon.png') no-repeat 9px center;" onsubmit="return submit_search();">
		<input type="search"
		placeholder="Search" id="key" name="key" />

	</form>
</div>
<div class="col-md-6" id="slider">
	<div id="carousel1" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/slider_1.jpg" style="width:100%">
			</div>
			<div class="item">
				<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/slider_2.jpg" style="width:100%">
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
/Public/images/slider_3.jpg" style="width:100%">
			</div>
		</div>
		<ul class="nav nav-pills nav-justified">
			<li data-target="#carousel1" data-slide-to="0" class="active">
				<a href="#">New Products<small>Lastest Products</small></a>
			</li>
			<li data-target="#carousel1" data-slide-to="1">
				<a href="#">Hot News<small>Our top sell products</small> </a>
			</li>
			<li data-target="#carousel1" data-slide-to="2">
				<a href="#">Discount<small>Give our customers chance to buy what they like with affordable price</small> </a>
			</li>
		</ul>
	</div>
</div>
<div class="col-md-3 hidden-xs" id="banner_flash">
	<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/flash.jpg" alt="" title="">
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-08 18:49:36
         compiled from "Views\template\header_pro.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5575c7a04041e0_09327455')) {function content_5575c7a04041e0_09327455($_smarty_tpl) {?><div class="slider_lastest_pro">
	<ol class="breadcrumb">
		<li>
			Products
		</li>
		<li>
			Lastest Products
		</li>
	</ol>
</div>
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-08 18:49:36
         compiled from "Views\template\style_featured.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5575c7a043d5e1_96629272')) {function content_5575c7a043d5e1_96629272($_smarty_tpl) {?><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-08 18:49:36
         compiled from "Views\template\pro_info.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5575c7a044c346_78624794')) {function content_5575c7a044c346_78624794($_smarty_tpl) {?><ol class="breadcrumb">
		<li class="">
			Products
		</li>
		<li>
			Overall
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
.html"><span class="glyphicon glyphicon-plus"> </span>Details</a>
			</div>
		</div>
	</div>

</div>
<?php } ?>
<?php }?>

<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-08 18:49:36
         compiled from "Views\template\banner_flash.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5575c7a048d6f6_08681531')) {function content_5575c7a048d6f6_08681531($_smarty_tpl) {?><img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/flash.gif" alt="" title="" class="hidden-xs visible-lg">
<div class="list-group hidden-xs visible-lg" id="news" >
	<a href="#" class="list-group-item disabled"> Trend Techno News </a>
	<a href="#" class="list-group-item">Trend Techno News 1</a>
	<a href="#" class="list-group-item">Trend Techno News 2</a>
	<a href="#" class="list-group-item">Trend Techno News 3</a>
	<a href="#" class="list-group-item">Trend Techno News 4 </a>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-06-08 18:49:36
         compiled from "Views\template\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5575c7a0561234_12079279')) {function content_5575c7a0561234_12079279($_smarty_tpl) {?><div class="footer" id="footer">
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
			(c) Copyright 2015 phucngo. All Rights Reserved. 
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

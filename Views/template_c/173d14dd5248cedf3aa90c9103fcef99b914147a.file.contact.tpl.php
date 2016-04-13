<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-14 14:06:12
         compiled from "Views\template\contact\contact.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2340455548fb4926313-82324314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '173d14dd5248cedf3aa90c9103fcef99b914147a' => 
    array (
      0 => 'Views\\template\\contact\\contact.tpl',
      1 => 1431354208,
      2 => 'file',
    ),
    '0ac3d165e5b44be46d2d248871ce5c1ca5864243' => 
    array (
      0 => 'Views\\template\\index.tpl',
      1 => 1430645520,
      2 => 'file',
    ),
    'a1e615d0275c1710e40f9609bac9491e30c8b94f' => 
    array (
      0 => 'Views\\template\\header.tpl',
      1 => 1430646268,
      2 => 'file',
    ),
    'ca3857acd97e446d8e48981c65df3fc0956fadee' => 
    array (
      0 => 'Views\\template\\nav.tpl',
      1 => 1431593507,
      2 => 'file',
    ),
    '9c0ffb0c64a6d9a5b0c83fbd87020106018a2b60' => 
    array (
      0 => 'Views\\template\\top.tpl',
      1 => 1431593646,
      2 => 'file',
    ),
    '755b412f0eb7910a0215f568475fbe4116a11d7c' => 
    array (
      0 => 'Views\\template\\header_pro.tpl',
      1 => 1430586089,
      2 => 'file',
    ),
    '41b8a24b66e0c03accc2bff424a11f06cd3414c2' => 
    array (
      0 => 'Views\\template\\style_featured.tpl',
      1 => 1430586177,
      2 => 'file',
    ),
    '63128d92559879be1a00fbe31fe263ada8195f38' => 
    array (
      0 => 'Views\\template\\pro_info.tpl',
      1 => 1431603799,
      2 => 'file',
    ),
    'd043da4c8e55e515937771a425cad497cefe129b' => 
    array (
      0 => 'Views\\template\\banner_flash.tpl',
      1 => 1430666230,
      2 => 'file',
    ),
    '67381906a85447b6034f90dfc57804f1c792a1d3' => 
    array (
      0 => 'Views\\template\\footer.tpl',
      1 => 1430586273,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2340455548fb4926313-82324314',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55548fb4aeff56_24480169',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55548fb4aeff56_24480169')) {function content_55548fb4aeff56_24480169($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>

<?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2340455548fb4926313-82324314');
content_55548fb49b7266_50271069($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
</head>
<body>
	<div class="container-fluid">
		<div class="row navbar-inverse">
			<!--nav-->
            <?php /*  Call merged included template "nav.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2340455548fb4926313-82324314');
content_55548fb49ec8e6_20935948($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "nav.tpl" */?>
		</div>
        
<div class="container-fluid">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.024833064034!2d106.698195!3d10.732567999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528b2747a81a3%3A0x33c1813055acb613!2zVHLGsOG7nW5nIMSR4bqhaSBo4buNYyBUw7RuIMSQ4bupYyBUaOG6r25n!5e0!3m2!1svi!2s!4v1430645008451" width="100%" height="600" frameborder="0" style="border:0"></iframe>

    <div class="jumbotron jumbotron-sm">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12">
                    <h1 class="h1">
                        Contact us <small>Feel free to contact us</small></h1>
                </div>
            </div>
        </div>
    </div>
    
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message" style="width: 100%"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>Twitter, Inc.</strong><br>
                795 Folsom Ave, Suite 600<br>
                San Francisco, CA 94107<br>
                <abbr title="Phone">
                    P:</abbr>
                (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
            </form>
        </div>
    </div>
</div>

    
</div>
</div>

	</div>

<footer>
<!--footer-->    <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2340455548fb4926313-82324314');
content_55548fb4ae0b22_82566424($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>
</footer>
</body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-14 14:06:12
         compiled from "Views\template\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55548fb49b7266_50271069')) {function content_55548fb49b7266_50271069($_smarty_tpl) {?><head>
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
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/js/jquery.sticky.js"><?php echo '</script'; ?>
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
    $(window).load(function(){
      $("#news").sticky({ topSpacing: 10 });
    });
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
     function submit_search(){
                if (document.forms["form_search"]["key"].value.length==0) {
                    alert("Bạn chưa nhập từ khóa tìm kiếm! ");
                    return false;
                }
                else{
                    return true;
                }
            }
<?php echo '</script'; ?>
>
</head><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-14 14:06:12
         compiled from "Views\template\nav.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55548fb49ec8e6_20935948')) {function content_55548fb49ec8e6_20935948($_smarty_tpl) {?><div class="col-md-12">
				<div class="col-xs-3 col-md-3" id="logo">
					<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/icon-php.png" alt="Trang chủ" title="Trang chủ">
				</div>
				<div class="col-md-6" id="search_form">
					<h4>
						<span class="glyphicon glyphicon-phone-alt"></span> Tư vấn miễn phí : 1900 6606
					</h4>
					<form action="search.php" class="input-group" name="form_search"
					onsubmit="return submit_search();" role="search">
						<input type="text" class="form-control"
							placeholder="Tìm kiếm sản phẩm" id="key" name="key"> <span
							class="input-group-btn">
							<button class="btn btn-danger" type="submit">
								<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
							</button>
						</span>
					</form>
				</div>
				
				<div id="login">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span>
								Sign Up</a></li>
						<li><a href="#"><span class="glyphicon glyphicon-log-in"></span>
								Login</a></li>
					</ul>
					<nav class="navbar navbar-static">
				    <div class="navbar-header">
						<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					
					</div>
					
					
					<div class="collapse navbar-collapse js-navbar-collapse">
						<ul class="nav navbar-nav">
							<li class="dropdown dropdown-large">
								<a href="#" class="dropdown-toggle product_show" data-toggle="dropdown">Product <b class="caret"></b></a>
							
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
											<li class="dropdown-header"><?php echo $_smarty_tpl->tpl_vars['ten_loai_cha']->value;?>
</li>
											<?php  $_smarty_tpl->tpl_vars['loai_con'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loai_con']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loai_con']->key => $_smarty_tpl->tpl_vars['loai_con']->value) {
$_smarty_tpl->tpl_vars['loai_con']->_loop = true;
?>
											<li><a href="#"><?php echo $_smarty_tpl->tpl_vars['loai_con']->value['ten_loai'];?>
</a>
											</li>
											<?php } ?>
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
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-14 14:06:12
         compiled from "Views\template\top.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55548fb4a407b3_97212161')) {function content_55548fb4a407b3_97212161($_smarty_tpl) {?>
			<div class="col-md-3" id="left_menu">
                
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
							<li data-target="#carousel1" data-slide-to="1"><a href="#">Sản
									Phẩm Hot<small>Top các sản phẩm bán chạy hiện nay</small>
							</a></li>
							<li data-target="#carousel1" data-slide-to="2"><a href="#">Giảm
									Giá<small>Xả hàng,giảm giá các mặt hàng tồn kho</small>
							</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 hidden-xs" id="banner_flash">
					<img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/flash.jpg" alt="" title="">
				</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-14 14:06:12
         compiled from "Views\template\header_pro.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55548fb4a5b2f0_77950381')) {function content_55548fb4a5b2f0_77950381($_smarty_tpl) {?>		<ol class="breadcrumb">
				<li class="">Sản Phẩm</li>
				<li><a href="#">Top Bán Chạy</a></li>
				<div class="pull-right">
					<a class="btn glyphicon glyphicon-chevron-left"
						href="#carousel-example" data-slide="prev"></a>
					<a  class="btn glyphicon glyphicon-chevron-right"
						href="#carousel-example" data-slide="next"></a>
				</div>
			</ol>

			<div class="row">
				<div class="row">
					<div class="col-md-9"></div>
					<div class="col-md-3">
						<!-- Controls -->

					</div>
				</div>
				<div id="carousel-example" class="carousel slide"
					data-ride="carousel" >
					<!-- Wrapper for slides -->
					<div class="carousel-inner" >
						<div class="item active">
							<div class="row">
								<div class="col-sm-3">
									<div class="col-item">
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>Product A</h5>
													<h5 class="price-text-color">$7.99</h5>
												</div>
												<div class="rating hidden-sm col-md-6">
													<i class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i>
												</div>
											</div>
										</div>

										<div class="photo">
											<img
												src="http://www.prepbootstrap.com/Content/images/template/productslider/product_001.jpg"
												class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="#"
														class="hidden-sm">Add to cart</a>
												</p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="#" class="hidden-sm">More
														details</a>
												</p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>

								<div class="col-sm-3">
									<div class="col-item">
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>Product B</h5>
													<h5 class="price-text-color">$9.99</h5>
												</div>
												<div class="rating hidden-sm col-md-6">
													<i class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i>
												</div>
											</div>
										</div>

										<div class="photo">
											<img
												src="http://www.prepbootstrap.com/Content/images/template/productslider/product_002.jpg"
												class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="#"
														class="hidden-sm">Add to cart</a>
												</p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="#" class="hidden-sm">More
														details</a>
												</p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="col-item">
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>Product C</h5>
													<h5 class="price-text-color">$7.58</h5>
												</div>
												<div class="rating hidden-sm col-md-6">
													<i class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i>
												</div>
											</div>
										</div>

										<div class="photo">
											<img
												src="http://www.prepbootstrap.com/Content/images/template/productslider/product_003.jpg"
												class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="#"
														class="hidden-sm">Add to cart</a>
												</p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="#" class="hidden-sm">More
														details</a>
												</p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="col-item">
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>Another product</h5>
													<h5 class="price-text-color">$3.75</h5>
												</div>
												<div class="rating hidden-sm col-md-6">
													<i class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i>
												</div>
											</div>
										</div>

										<div class="photo">
											<img
												src="http://www.prepbootstrap.com/Content/images/template/productslider/product_001.jpg"
												class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="#"
														class="hidden-sm">Add to cart</a>
												</p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="#" class="hidden-sm">More
														details</a>
												</p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-sm-3">
									<div class="col-item">
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>Product</h5>
													<h5 class="price-text-color">$7.17</h5>
												</div>
												<div class="rating hidden-sm col-md-6">
													<i class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i>
												</div>
											</div>
										</div>

										<div class="photo">
											<img
												src="http://www.prepbootstrap.com/Content/images/template/productslider/product_001.jpg"
												class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="#"
														class="hidden-sm">Add to cart</a>
												</p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="#" class="hidden-sm">More
														details</a>
												</p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>

								<div class="col-sm-3">
									<div class="col-item">
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>Product</h5>
													<h5 class="price-text-color">$19.99</h5>
												</div>
												<div class="rating hidden-sm col-md-6">
													<i class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i>
												</div>
											</div>
										</div>

										<div class="photo">
											<img
												src="http://www.prepbootstrap.com/Content/images/template/productslider/product_002.jpg"
												class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="#"
														class="hidden-sm">Add to cart</a>
												</p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="#" class="hidden-sm">More
														details</a>
												</p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="col-item">
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>Product</h5>
													<h5 class="price-text-color">$1.99</h5>
												</div>
												<div class="rating hidden-sm col-md-6">
													<i class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i>
												</div>
											</div>
										</div>

										<div class="photo">
											<img
												src="http://www.prepbootstrap.com/Content/images/template/productslider/product_003.jpg"
												class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="#"
														class="hidden-sm">Add to cart</a>
												</p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="#" class="hidden-sm">More
														details</a>
												</p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<div class="col-item">
										<div class="info">
											<div class="row">
												<div class="price col-md-6">
													<h5>Product</h5>
													<h5 class="price-text-color">$1.09</h5>
												</div>
												<div class="rating hidden-sm col-md-6">
													<i class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i> <i
														class="price-text-color fa fa-star"></i>
												</div>
											</div>
										</div>

										<div class="photo">
											<img
												src="http://www.prepbootstrap.com/Content/images/template/productslider/product_001.jpg"
												class="img-responsive" alt="a" />
										</div>
										<div class="info">
											<div class="separator clear-left">
												<p class="btn-add">
													<i class="fa fa-shopping-cart"></i><a href="#"
														class="hidden-sm">Add to cart</a>
												</p>
												<p class="btn-details">
													<i class="fa fa-list"></i><a href="#" class="hidden-sm">More
														details</a>
												</p>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-14 14:06:12
         compiled from "Views\template\style_featured.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55548fb4a79b38_28571758')) {function content_55548fb4a79b38_28571758($_smarty_tpl) {?>	   <ol class="breadcrumb">
                <li class="">Sản Phẩm</li>
				<li><a href="#">Top Bán Chạy</a></li>
		</ol>
			<div class="col-md-2 pro_info">
				<div>
					<img
						src="http://www.prepbootstrap.com/Content/images/template/featureditems/product_001.jpg"
						alt="" class="img-rounded img-thumbnail" />
					<h2>Item A</h2>
					<p style="text-align: left;">
						<span class="fa fa-info-circle"></span> A quality item for
						purchase. Features state of the art technology
					</p>
					<p style="text-align: left;">
						<span class="fa fa-bank "></span> 0% Financing available
					</p>
					<p style="text-align: left;">
						<span class="fa fa-calendar "></span> 12 months full warranty
					</p>
					<a href="#" class="btn btn-success" title="More">more »</a>
				</div>
			</div>
			<div class="col-md-2 pro_info">
				<div>
					<img
						src="http://www.prepbootstrap.com/Content/images/template/featureditems/product_001.jpg"
						alt="" class="img-rounded img-thumbnail" />
					<h2>Item A</h2>
					<p style="text-align: left;">
						<span class="fa fa-info-circle"></span> A quality item for
						purchase. Features state of the art technology
					</p>
					<p style="text-align: left;">
						<span class="fa fa-bank "></span> 0% Financing available
					</p>
					<p style="text-align: left;">
						<span class="fa fa-calendar "></span> 12 months full warranty
					</p>
					<a href="#" class="btn btn-success" title="More">more »</a>
				</div>
			</div>
			<div class="col-md-2 pro_info ">
				<div>
					<img
						src="http://www.prepbootstrap.com/Content/images/template/featureditems/product_001.jpg"
						alt="" class="img-rounded img-thumbnail" />
					<h2>Item A</h2>
					<p style="text-align: left;">
						<span class="fa fa-info-circle"></span> A quality item for
						purchase. Features state of the art technology
					</p>
					<p style="text-align: left;">
						<span class="fa fa-bank "></span> 0% Financing available
					</p>
					<p style="text-align: left;">
						<span class="fa fa-calendar "></span> 12 months full warranty
					</p>
					<a href="#" class="btn btn-success" title="More">more »</a>
				</div>
			</div>
			<div class="col-md-2 pro_info">
				<div>
					<img
						src="http://www.prepbootstrap.com/Content/images/template/featureditems/product_001.jpg"
						alt="" class="img-rounded img-thumbnail" />
					<h2>Item A</h2>
					<p style="text-align: left;">
						<span class="fa fa-info-circle"></span> A quality item for
						purchase. Features state of the art technology
					</p>
					<p style="text-align: left;">
						<span class="fa fa-bank "></span> 0% Financing available
					</p>
					<p style="text-align: left;">
						<span class="fa fa-calendar "></span> 12 months full warranty
					</p>
					<a href="#" class="btn btn-success" title="More">more »</a>
				</div>
			</div>
			<div class="col-md-2 pro_info">
				<div>
					<img
						src="http://www.prepbootstrap.com/Content/images/template/featureditems/product_001.jpg"
						alt="" class="img-rounded img-thumbnail" />
					<h2>Item A</h2>
					<p style="text-align: left;">
						<span class="fa fa-info-circle"></span> A quality item for
						purchase. Features state of the art technology
					</p>
					<p style="text-align: left;">
						<span class="fa fa-bank "></span> 0% Financing available
					</p>
					<p style="text-align: left;">
						<span class="fa fa-calendar "></span> 12 months full warranty
					</p>
					<a href="#" class="btn btn-success" title="More">more »</a>
				</div>
			</div>
			<div class="col-md-2 pro_info">
				<div>
					<img
						src="http://www.prepbootstrap.com/Content/images/template/featureditems/product_001.jpg"
						alt="" class="img-rounded img-thumbnail" />
					<h2>Item A</h2>
					<p style="text-align: left;">
						<span class="fa fa-info-circle"></span> A quality item for
						purchase. Features state of the art technology
					</p>
					<p style="text-align: left;">
						<span class="fa fa-bank "></span> 0% Financing available
					</p>
					<p style="text-align: left;">
						<span class="fa fa-calendar "></span> 12 months full warranty
					</p>
					<a href="#" class="btn btn-success" title="More">more »</a>
				</div>
			</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-14 14:06:12
         compiled from "Views\template\pro_info.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55548fb4a8cc68_95294339')) {function content_55548fb4a8cc68_95294339($_smarty_tpl) {?><div class="col-md-2 pro_info_small">
<?php  $_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dssp']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->key => $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
?>
						 <div class="cuadro_intro_hover " style="background-color:#cccccc;">
				            <p >
				              <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/hinh_san_pham/<?php echo $_smarty_tpl->tpl_vars['sp']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['sp']->value['hinh'];?>
" class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['sp']->value['ten_san_pham'];?>
">
				            </p>
				            <div class="caption">
				              <div class="blur"></div>
				              <div class="caption-text">
				                <h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;"><?php echo number_format($_smarty_tpl->tpl_vars['sp']->value['don_gia']);?>
</h3>
				                <p>Loren ipsum dolor si amet ipsum dolor si amet ipsum dolor...</p>
				                <a class=" btn btn-default" href="#"><span class="glyphicon glyphicon-plus"> INFO</span></a>
				              </div>
				            </div>
				          </div>
					</div>
<?php } ?>
				
																		<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-14 14:06:12
         compiled from "Views\template\banner_flash.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55548fb4ab2ec8_64968997')) {function content_55548fb4ab2ec8_64968997($_smarty_tpl) {?>	               <img src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/images/flash.gif" alt="" title="" class="hidden-xs visible-lg">
					<div class="list-group hidden-xs visible-lg" id="news" >
						  <a href="#" class="list-group-item active">
						    Cras justo odio
						  </a>
						  <a href="#" class="list-group-item">Dapibus ac facilisis inDapibus ac facilisis inDapibus ac facilisis inDapibus ac facilisis in</a>
						  <a href="#" class="list-group-item">Morbi leo risus</a>
						  <a href="#" class="list-group-item">Porta ac consectetur ac</a>
						  <a href="#" class="list-group-item">Vestibulum at eros</a>
					</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-14 14:06:12
         compiled from "Views\template\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55548fb4ae0b22_82566424')) {function content_55548fb4ae0b22_82566424($_smarty_tpl) {?>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-2  col-md-2 col-sm-4 col-xs-6">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                        <li> <a href="#"> Lorem Ipsum </a> </li>
                    </ul>
                </div>
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-12 ">
                    <h3> Lorem Ipsum </h3>
                    <ul>
                        <li>
                            <div class="input-append newsletter-box text-center">
                                <input type="text" class="full text-center" placeholder="Email ">
                                <button class="btn  bg-gray" type="button"> Lorem ipsum <i class="fa fa-long-arrow-right"> </i> </button>
                            </div>
                        </li>
                    </ul>
                    <ul class="social">
                        <li> <a href="#"> <i class=" fa fa-facebook">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-twitter">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-google-plus">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-pinterest">   </i> </a> </li>
                        <li> <a href="#"> <i class="fa fa-youtube">   </i> </a> </li>
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
            <p class="pull-left"> Copyright © Ngô Hùng Phúc. All right reserved. </p>
            <div class="pull-right">
                <ul class="nav nav-pills payments">
                	<li><i class="fa fa-cc-visa"></i></li>
                    <li><i class="fa fa-cc-mastercard"></i></li>
                    <li><i class="fa fa-cc-amex"></i></li>
                    <li><i class="fa fa-cc-paypal"></i></li>
                </ul> 
            </div>
        </div>
    </div>
    <!--/.footer-bottom--> 
<?php }} ?>

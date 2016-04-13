<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-21 15:22:54
         compiled from "Views\template\khach_hang\v_trang_chu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2426553648ee66d5a2-24895177%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50ebe52d3da831620d9094e7ab06825e79c53d2e' => 
    array (
      0 => 'Views\\template\\khach_hang\\v_trang_chu.tpl',
      1 => 1429622570,
      2 => 'file',
    ),
    '380be44660dc50e0a1af8a16757d40a3b489566d' => 
    array (
      0 => 'Views\\template\\layout.tpl',
      1 => 1429622094,
      2 => 'file',
    ),
    'a8cef37da2e241b5000ec26a9c21c7b8eea4bc6e' => 
    array (
      0 => 'Views\\template\\header.tpl',
      1 => 1429365127,
      2 => 'file',
    ),
    '6afbde52b1b93562655b2606139370b133acdf42' => 
    array (
      0 => 'Views\\template\\menu.tpl',
      1 => 1429621170,
      2 => 'file',
    ),
    '85f54edd0ce199893229c23ea50e7182ee98cc82' => 
    array (
      0 => 'Views\\template\\slider.tpl',
      1 => 1429622063,
      2 => 'file',
    ),
    'a56d7a8b5d350ffe3b0e4d251e76a2088abe5366' => 
    array (
      0 => 'Views\\template\\footer.tpl',
      1 => 1429360684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2426553648ee66d5a2-24895177',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553648ee793160_76672712',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553648ee793160_76672712')) {function content_553648ee793160_76672712($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

  <!--header-->
  <?php /*  Call merged included template "header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2426553648ee66d5a2-24895177');
content_55364f2e11b823_53774108($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "header.tpl" */?>
<!-- NAVBAR
================================================== -->
  <body>
   <!--menu-->
    <?php /*  Call merged included template "menu.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2426553648ee66d5a2-24895177');
content_55364f2e163fc3_25004691($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "menu.tpl" */?>
    <!-- Carousel
    ================================================== -->
    <?php /*  Call merged included template "slider.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("slider.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2426553648ee66d5a2-24895177');
content_55364f2e1770f8_49918785($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "slider.tpl" */?>
   <!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

     <div class="container-fluid">
    
  <div class="hidden-xs" id="slide" style="margin-top:15px;margin-bottom:15px">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>
            
              <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="http://trungtinmedi.com/img/logo/4.jpg" >
                </div>

                <div class="item">
                    <img src="http://trungtinmedi.com/img/logo/3.png" >
                </div>

                <div class="item">
                    <img src="http://trungtinmedi.com/img/logo/7.png" >
                </div>

                <div class="item">
                    <img src="http://trungtinmedi.com/img/logo/8.jpg" >
                </div>
            </div><!--Main banner-->
            
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
  </div>



   
      


      <!-- FOOTER -->
   
    </div><!-- /.container -->
   <?php /*  Call merged included template "footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2426553648ee66d5a2-24895177');
content_55364f2e1c35a1_07176591($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "footer.tpl" */?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/css_js/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?php echo '<script'; ?>
 src="../../assets/js/vendor/holder.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-21 15:22:54
         compiled from "Views\template\header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55364f2e11b823_53774108')) {function content_55364f2e11b823_53774108($_smarty_tpl) {?><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/css_js/css/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><?php echo '<script'; ?>
 src="../../assets/js/ie8-responsive-file-warning.js"><?php echo '</script'; ?>
><![endif]-->
    <?php echo '<script'; ?>
 src="../../assets/js/ie-emulation-modes-warning.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
/Public/css_js/jquery-2.1.3.min.js"><?php echo '</script'; ?>
>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->

    <!-- Custom styles for this template -->

</head><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-21 15:22:54
         compiled from "Views\template\menu.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55364f2e163fc3_25004691')) {function content_55364f2e163fc3_25004691($_smarty_tpl) {?><nav class="navbar navbar-default navbar-fixed-top" role="navigation">
   <div class="container-fluid">
      <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
         <span class="sr-only">Toggle navigation</span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         </button>
         <a class="navbar-brand" href="trang-chu.html">Trung Tín Medi</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         <ul class="nav navbar-nav">
            <li><a href="trang-chu.html">Trang Ch?</a></li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">S?n Ph?m <b class="caret"></b></a>
               <ul class="dropdown-menu">
                  <li><a href="san-pham-1-trang-1.html">Máy Ðo Huy?t Áp</a></li>
                  <li><a href="san-pham-2-trang-1.html">Máy Ðo Ðu?ng Huy?t</a></li>
                  <li><a href="san-pham-3-trang-1.html">Máy Tr? Thính</a></li>
                  <li><a href="san-pham-4-trang-1.html">Máy Xông H?ng, Mui</a></li>
                  <li><a href="san-pham-5-trang-1.html">Giu?ng b?nh Inox - d?ng c? Inox - Giu?ng di?n</a></li>
                  <li><a href="san-pham-6-trang-1.html">Bình Oxy ,Máy Oxy Các Lo?i</a></li>
                  <li><a href="san-pham-7-trang-1.html">D?ng C? Ðo Thân Nhi?t & Nhi?t Ð?</a></li>
                  <li><a href="san-pham-8-trang-1.html">Máy Massage Th?m M?</a></li>
                  <li class="dropdown-submenu">
                     <a href="#">Xem Thêm</a>
                     <ul class="dropdown-menu">
                        <li><a href="san-pham-16-trang-1.html">D?ng c? phòng thí nghi?m</a></li>
                        <li><a href="san-pham-17-trang-1.html">Dung d?ch kh? khu?n, sát trùng</a></li>
                        <li><a href="san-pham-18-trang-1.html">Ch? ph?u thu?t CPT</a></li>
                        <li><a href="san-pham-19-trang-1.html">Máy do di?n tim</a></li>
                        <li><a href="san-pham-20-trang-1.html">Áo blouse</a></li>
                        <li><a href="san-pham-21-trang-1.html">Máy massage</a></li>
                        <li><a href="san-pham-22-trang-1.html"> Bông gòn - Bang cu?n - G?c y t?</a></li>
                        <li><a href="san-pham-23-trang-1.html">Film X-Quang - Thi?t b? - D?ng c? chu?n doán hình ?nh </a></li>
                     </ul>
                  </li>
                  <li class="dropdown-submenu">
                     <a tabindex="-1" href="#">Xem Thêm</a>
                     <ul class="dropdown-menu">
                        <li><a href="san-pham-9-trang-1.html">Xe Lan- Xe L?c</a></li>
                        <li><a href="san-pham-10-trang-1.html">D?ng C? Y T? Khác</a></li>
                        <li><a href="san-pham-11-trang-1.html">Thi?t B? Phòng M?</a></li>
                        <li><a href="san-pham-12-trang-1.html">Máy Châm C?u</a></li>
                        <li><a href="san-pham-14-trang-1.html">Bang ca - Cáng c?u thuong</a></li>
                        <li><a href="san-pham-15-trang-1.html">T? - Lò H?p s?y d?ng c? y khoa</a></li>
                     </ul>
                  </li>
               </ul>
            </li>
         </ul>
         <form class="navbar-form navbar-right" role="search" action="search.php" name="form_search" onsubmit="return submit_search();">
            <div class="form-group">
               <input type="text" class="form-control" placeholder="Tìm ki?m s?n ph?m" id="key" name="key">
            </div>
            <button type="submit" class="btn btn-default">Tìm ki?m</button>
         </form>
      </div>
   </div>
</nav><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-21 15:22:54
         compiled from "Views\template\slider.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55364f2e1770f8_49918785')) {function content_55364f2e1770f8_49918785($_smarty_tpl) {?>  <div class="hidden-xs" id="slide" style="margin-top:15px;margin-bottom:15px">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
              </ol>
            
              <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="img/logo/4.jpg" >
                </div>

                <div class="item">
                    <img src="img/logo/3.png" >
                </div>

                <div class="item">
                    <img src="img/logo/7.png" >
                </div>

                <div class="item">
                    <img src="img/logo/8.jpg" >
                </div>
            </div><!--Main banner-->
            
              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
        </div>
  </div><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-21 15:22:54
         compiled from "Views\template\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_55364f2e1c35a1_07176591')) {function content_55364f2e1c35a1_07176591($_smarty_tpl) {?><footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
</footer><?php }} ?>

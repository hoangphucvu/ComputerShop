<!DOCTYPE html>
<html>
	<head>

		{block name="header"}{include "header.tpl"}{/block}
	</head>
	<body>
		<div class="container-fluid">
			<div class="row navbar-inverse">
				<!--nav-->
				{block name="navbar"}{include "nav.tpl"}{/block}
			</div>
			{block name="content"}
			<div class="row">
				<div class="col-lg-12" id="top">
					<!--top-->
					{block name="top"}{include "top.tpl"}{/block}
				</div>
			</div>
			<div class="row header_pro">
				<!--header_pro-->
				{block name="header_pro"}{include "header_pro.tpl"}{/block}
			</div>

			<div class="row style_featured">
				<!--style_featured-->
				{block name="style_featured"}{include "style_featured.tpl"}{/block}
			</div>
			<div class="row ">
				<div class="col-md-12">
					<div class="col-md-10 pro_info_small_wrap">
						<!--pro_info-->
						{block name="pro_info_small_wrap"}{include "pro_info.tpl"}{/block}
					</div><!--col-md-10-->

					<div class="col-md-2 banner_flash list-group">
						<!--scroll list-->
						{block name="banner_flash"}{include "banner_flash.tpl"}{/block}
					</div>

				</div>

			</div>
			<div class="row">
				<div class="col-md-10">

					<button class="more btn" id="more_click">
						More
					</button>
				</div>
			</div>
			{/block}

		</div>

		<footer>
			<!--footer-->
			{block name="footer"}{include "footer.tpl"}{/block}
		</footer>
	</body>
</html>
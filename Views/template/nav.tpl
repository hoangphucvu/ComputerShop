<div class="col-md-12">
	<div class="col-xs-3 col-md-3 visible-lg" id="logo">
		<a href="{$path}"> <img src="{$path}/Public/images/icon-php.png" alt="Home" title="Home" /> </a>
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
				<a href="{$path}/lien-he"><span class="glyphicon glyphicon-phone-alt"></span> Contact Us</a>
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
							{if isset($ds_loai_san_pham_menu)}
							{$i=1}
							{foreach $ds_loai_san_pham_menu as $ten_loai_cha=>$item}
							<li class="col-sm-3">
								<ul>
									<li class="dropdown-header">
										{$ten_loai_cha}
									</li>
									{foreach $item[1] as $loai_con}
									<li>
										<a href="{$path}/san-pham/{$item[0]}/{$loai_con['ten_loai_san_pham_url']}-{$loai_con['ma_loai']}.html">{$loai_con['ten_loai']}</a>
									</li>
									{/foreach}
									<li class="divider"></li>
								</ul>
							</li>

							{/foreach}

							{/if}
						</ul>

					</li>
				</ul>
			</div><!-- /.nav-collapse -->
		</nav>

	</div>
</div>

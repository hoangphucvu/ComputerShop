<div class="col-md-3" id="left_menu">
	<div class="list-group">
		<a href="#" class="list-group-item disabled"> Trend Techno News </a>
		<a href="#" class="list-group-item">Trend Techno News 1</a>
		<a href="#" class="list-group-item">Trend Techno News 2</a>
		<a href="#" class="list-group-item">Trend Techno News 3</a>
		<a href="#" class="list-group-item">Trend Techno News 4 </a>
	</div>
	<form name="form_search" id="form_search" style="background-img: url('{$path}/Public/images/search-icon.png') no-repeat 9px center;" onsubmit="return submit_search();">
		<input type="search"
		placeholder="Search" id="key" name="key" />

	</form>
</div>
<div class="col-md-6" id="slider">
	<div id="carousel1" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img alt="" src="{$path}/Public/images/slider_1.jpg" style="width:100%">
			</div>
			<div class="item">
				<img alt="" src="{$path}/Public/images/slider_2.jpg" style="width:100%">
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
				<img alt="" src="{$path}/Public/images/slider_3.jpg" style="width:100%">
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
	<img src="{$path}/Public/images/flash.jpg" alt="" title="">
</div>
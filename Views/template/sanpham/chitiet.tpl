{extends "index.tpl"}
{block name="content"}
<ol class="breadcrumb">
	<li>
		<a href="{$path}"><i class="glyphicon glyphicon-home"></i></a>
	</li>
	<li>
		Product
	</li>
	<li class="active">
		{$sp['ten_san_pham']}
	</li>
</ol>
<div class="row">
	<div class="col-md-4">
		<div class="panel panel-default product_infoma">
			<div class="panel-heading">
				<h3 class="panel-title" id="panel-title">{$sp['ten_san_pham']}<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
			</div>
			<div class="panel-body">
				<img src="{$path}/Public/hinh_san_pham/{$sp['hinh']}" class="img-responsive" alt="{$sp['ten_san_pham']}">
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
					<span><i class="caret"></i></span><b> Product ID: </b>{$sp['ma_san_pham']}
				</p>
				<p>
					<span><i class="caret"></i></span><b>Status: </b> Còn hàng
				</p>
				<p class="price">
					<span><i class="caret"></i></span><b>Price: </b>{number_format($sp['don_gia'])} VND
				</p>

				<div class="form-group">

					Số Lượng:
					<input  name="soluong_sp" type="number" value="1"  max="20" min="0" class="form-control" maxlength="5" id="soluong_sp"/>

					<button type="button" name="{$sp['ma_san_pham']}-{$sp['don_gia']}" id="muahang" class="btn btn-default"/>
					<span class="fa fa-shopping-cart" ></span> Add to cart</button>
				</div>

				<div style="margin-top:10px;margin-left:5px;margin-bottom:10px"
				class="fb-like"
				data-share="true"
				data-width="450"
				data-show-faces="true"></div>
				<p>
					<a href="{$path}/gio-hang/thong-tin-gio-hang.html" class="btn btn-block btn-primary btn-danger"><span id="TTGH"> {$tsl_gh} products- {number_format($tt_dh)} VND</span></a>
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

				{$sp['mo_ta_tom_tat']}
				{$sp['mo_ta_chi_tiet']}

			</div>

		</div>

	</div>

</div>

<div class="fb-comments" data-href="" data-width="600" data-colorscheme="light" style="margin-top:20px;margin-bottom:20px"></div>
<ol class="breadcrumb">
	<li>
		<a href="{$path}"><i class="glyphicon glyphicon-home"></i></a>
	</li>
	<li>
		Similar Products
	</li>
</ol>
<div class="row">
	{foreach $dssp_cung_loai as $item}
	<div class="col-xs-6 col-md-3 similar_pro">
		<p>
			<a href="{$item['ten_san_pham_url']}-{$item['ma_san_pham']}.html"> <img src="{$path}/Public/hinh_san_pham/{$item['hinh']}" class="img-responsive" alt="{$item['ten_san_pham']}"> {$item['ten_san_pham']} </a>
		</p>

	</div>
	{/foreach}
</div>

{/block}
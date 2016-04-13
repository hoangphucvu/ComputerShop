{extends "index.tpl"}
{block name="content"}
{if isset($title_ds)}
<ol class="breadcrumb">
	<li class="">
		Sản Phẩm
	</li>
	<li>
		{$title_ds['ten_loai']}
	</li>
</ol>
{/if}
{if isset($dssp_phan_trang)}
<div class="row">
	<div class="col-md-12 pro_order_by_cat">
		{foreach $dssp_phan_trang as $item}

		<div class="pro_order_cat">
			<div class="cuadro_intro_hover">
				<p >
					<img src="{$path}/Public/hinh_san_pham/{$item['hinh']}" class="img-responsive" alt="{$item['ten_san_pham']}" >
				</p>
				<div class="caption">
					<div class="blur"></div>
					<div class="caption-text">
						<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">{number_format($item['don_gia'])} VND</h3>
						<p style="padding:10px">
							{$item['ten_san_pham']}
						</p>
						<a class=" btn btn-default btn_details" href="{$path}/san-pham/{$item['ten_san_pham_url']}-{$item['ma_san_pham']}.html"><span class="glyphicon glyphicon-plus"> Xem Thêm</span></a>
					</div>
				</div>
			</div>
		</div>
	
		{/foreach}
	</div>
</div>
{/if}
<div class="paging">
	   {if isset($link_trang)}
		{$link_trang}
       {/if}
</div>
{/block}
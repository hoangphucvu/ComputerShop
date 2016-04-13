<ol class="breadcrumb">
		<li class="">
			Products
		</li>
		<li>
			Overall
		</li>
</ol>
{if isset($dssp_index)}
{foreach $dssp_index as $sp}
<div class="col-md-2 pro_info_small">
	<div class="cuadro_intro_hover ">
		<p >
			<img src="{$path}/Public/hinh_san_pham/{$sp['hinh']}"  alt="{$sp['ten_san_pham']}">
		</p>
		<div class="caption">
			<div class="blur"></div>
			<div class="caption-text">
				<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">{number_format($sp['don_gia'])} VND</h3>
				<p style="padding:10px">
					{$sp['ten_san_pham']}
				</p>
				<a class=" btn btn-default btn_details" href="san-pham/{$sp['ten_san_pham_url']}-{$sp['ma_san_pham']}.html"><span class="glyphicon glyphicon-plus"> </span>Details</a>
			</div>
		</div>
	</div>

</div>
{/foreach}
{/if}


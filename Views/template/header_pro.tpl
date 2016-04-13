<div class="slider_lastest_pro">
	<ol class="breadcrumb">
		<li>
			Products
		</li>
		<li>
			Lastest Products
		</li>
	</ol>
</div>
{if isset($dssp_moi)}

<ul class="bxslider" >
	{foreach $dssp_moi as $item}

	<li>
		<a href="san-pham/{$item['ten_san_pham_url']}-{$item['ma_san_pham']}.html"> <img src="{$path}/Public/hinh_san_pham/{$item['hinh']}"
		class="img-responsive" alt="{$item['ten_san_pham']}" > </a>
	</li>

	{/foreach}
</ul>

{/if}


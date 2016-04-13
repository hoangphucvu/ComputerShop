{extends file="index.tpl"}
{block name="content"}
<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title" id="panel-title">Shopping Cart Detail<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
	</div>
	<div class="panel-body">
		<form action="#" method="POST">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Ordinal Numbers</th>
						<th>Product ID</th>
						<th>Product Name</th>
						<th>Quantity</th>
						<th>Unit Price</th>
						<th>Total</th>
						<th>Remove</th>
					</tr>
				</thead>
				<tbody>
					{$i=1}
					{$tt=0}
					{if isset($tt_gio_hang)}
					{foreach $tt_gio_hang as $sp}
					<tr>
						<th scope="row">{$i}</th>
						<td>{$sp['ma_san_pham']}</td>
						<td>{$sp['ten_san_pham']}</td>
						<td>
						<input name="sl_{$sp['ma_san_pham']}" value="{$sp['so_luong']}" size="5" type="number" min="0" max="20"/>
						</td>
						<td>{number_format($sp['don_gia'])}</td>
						<td>{number_format($sp['don_gia']*$sp['so_luong'])}</td>
						<input  type="hidden" value="{$sp['ma_san_pham']}" name="masp"/>
						<th>
						<button type="submit" name="xoa" class="btn btn-danger">
							X
						</button></th>
						<input class="hidden" type="text" name="txtid" value="{$sp['ma_san_pham']}" />
					</tr>
					{$tt=$tt+$sp['don_gia']*$sp['so_luong']}
					{$i=$i+1}
					{/foreach}
					{/if}
					<tr>
						<td colspan="6" class="text-center"><h3><em>Total:</em></h3></td>
						<td colspan="6" class="text-center"><h3>{number_format($tt)} <small>vnđ</small></h3></td>

					</tr>
					<tr>
						<td colspan="6" class="text-center">
						<input type="submit" name="capnhat" value="Update" class="btn btn-success" />
						<a href="{$path}/khach-hang/dat-hang.html">
						<button type="button" class="btn btn-info">
							Order Us Now
						</button></a><a href="{$path}/gio-hang/xoa-gio-hang.html">
						<button type="button" class="btn btn-danger">
							Delete Cart
						</button></a></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
</div>

{/block}
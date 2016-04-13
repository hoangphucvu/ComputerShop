{extends file="layout.tpl"}
{block name="content"}
<script src="{$path}/Public/ckeditor_sp/ckeditor.js"></script>
<h2 class="col-sm-offset-2">Thông tin sản phẩm</h2>
{if isset($err)}
<h4 class="col-sm-offset-2" style="color:#ff0000">{$err}</h4>
{/if}
<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6">
				<label for="ma_san_pham">Mã sản phẩm: </label>
				<input type="text" class="form-control" id="ma_san_pham" name="ma_san_pham" value="{$data['ma_san_pham']}" placeholder="Mã sản phẩm" disabled="">
			</div>
			<div class="col-md-6">
				<label for="ten_san_pham">Tên sản phẩm: </label>
				<input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham" value="{$data['ten_san_pham']}" placeholder="Tên sản phẩm">
			</div>
			<div class='col-md-6'>
				<label for="ten_san_pham_url">Tên URL: </label>
				<input type="text" class="form-control" id="ten_san_pham_url" name="ten_san_pham_url" value="{$data['ten_san_pham']}" placeholder="Tên URL:">
			</div>
			<div class='col-md-6'>
				<label for="ten_san_pham_url">Loại: </label>
				<select name="ma_loai" class="form-control">
					{foreach $dsLoaiSanPham as $lsp}
					{if $data['ma_loai']==$lsp['ma_loai']}
					<option value="{$lsp['ma_loai']}" selected="selected">{$lsp['ten_loai']}</option>
					{else}
					<option value="{$lsp['ma_loai']}">{$lsp['ten_loai']}</option>
					{/if}
					{/foreach}
				</select>
			</div>
			<div class='col-md-6'>
				<label for="don_gia">Đơn Giá: </label>
				<input type="number" class="form-control" id="don_gia" name="don_gia" value="{$data['don_gia']}" placeholder="Đơn Giá">
			</div>
			<div class='col-md-6'>
				<label for="hinh">Hình:</label>
				<input type="file" name="hinh" class="form-control"/>
			</div>
			<div class='col-md-6'>
				<label for="san_pham_moi">Sản Phẩm Mới :</label>
				<input type="checkbox" id="san_pham_moi" name="san_pham_moi" value="{$data['san_pham_moi']}"/>
			</div>
			<div class='col-md-6'>
				<label for="so_lan_xem">Số Lần Xem :</label>
				<input type="number" name="so_lan_xem" class="form-control" value="{$data['so_lan_xem']}"/>
			</div>
			<div class='col-md-6'>
				<label for="ngay_tao">Ngày tạo: </label>
				<input type="date" id="ngay_tao" name="ngay_tao" value="{$data['ngay_tao']}"/>
			</div>
			<div class='col-md-6'>
				<label for="mo_ta_tom_tat">Mô tả tóm tắt :</label>
				<textarea name="mo_ta_tom_tat" class="form-control">{$data['mo_ta_tom_tat']}</textarea>
			</div>
			<div class='col-md-12'>
				<label for="mo_ta_chi_tiet">Mô tả chi tiết:</label>
				<textarea name="mo_ta_chi_tiet" class="ckeditor">{$data['mo_ta_chi_tiet']}</textarea>
			</div>
		</div>
		<div class="col-md-12">
			<input type="submit" class="btn btn-primary btn-block" value="Update" name="capnhat" style="margin-top: 40px;"/>
		</div>

	</div>

	<!--
	<div class="form-group">
	<label class="control-label col-md-6" for="ten_san_pham">TÃªn sáº£n pháº©m:</label>
	<div class="col-md-6">
	<input type="text" class="form-control" id="ten_san_pham" name="ten_san_pham" value="{$data['ten_san_pham']}" placeholder="tÃªn sáº£n pháº©m">
	<span style="color:#ff0000">{$dataErr['ten_san_pham']}</span>
	</div>

	<label class="control-label col-md-6" for="ten_san_pham_url">TÃªn URL:</label>
	<div class="col-md-6">
	<input type="text" class="form-control" id="ten_san_pham_url" name="ten_san_pham_url" value="{$data['ten_san_pham']}" placeholder="tÃªn url">
	<span style="color:#ff0000">{$dataErr['ten_san_pham_url']}</span>
	</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-6" for="ma_loai">Loáº¡i sáº£n pháº©m:</label>
	<div class="col-md-6">
	<select name="ma_loai" class="form-control">
	{foreach $dsLoaiSanPham as $lsp}
	{if $data['ma_loai']==$lsp['ma_loai']}
	<option value="{$lsp['ma_loai']}" selected="selected">{$lsp['ten_loai']}</option>
	{else}
	<option value="{$lsp['ma_loai']}">{$lsp['ten_loai']}</option>
	{/if}
	{/foreach}
	</select>
	</div>

	<label class="control-label col-md-6" for="don_gia">Ä�Æ¡n giÃ¡:</label>
	<div class="col-md-6">
	<input type="number" class="form-control" id="don_gia" name="don_gia" value="{$data['don_gia']}" placeholder="Ä�Æ¡n giÃ¡">
	<span style="color:#ff0000">{$dataErr['don_gia']}</span>
	</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-6" for="hinh">HÃ¬nh:</label>
	<div class="col-md-6">
	<input type="file" name="hinh" class="form-control"/>
	</div>

	<label class="control-label col-md-6" for="san_pham_moi">Sáº£n pháº©m má»›i:</label>
	<div class="col-md-6">
	<input type="checkbox" id="san_pham_moi" name="san_pham_moi" value="{$data['san_pham_moi']}" placeholder="tÃªn url"/>

	</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-6" for="so_lan_xem">Sá»‘ láº§n xem:</label>
	<div class="col-md-6">
	<input type="number" name="so_lan_xem" class="form-control" value="{$data['so_lan_xem']}"/>
	</div>

	<label class="control-label col-md-6" for="san_pham_moi">NgÃ y táº¡o:</label>
	<div class="col-md-6">
	<input type="date" id="ngay_tao" name="ngay_tao" value="{$data['ngay_tao']}" placeholder="tÃªn url"/>
	</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-6" for="so_lan_xem">MÃ´ táº£ tÃ³m táº¯t:</label>
	<div class="col-sm-10">
	<textarea name="mo_ta_tom_tat" class="form-control">{$data['mo_ta_tom_tat']}</textarea>
	</div>
	</div>

	<div class="form-group">
	<label class="control-label col-md-6" for="mo_ta_chi_tiet">MÃ´ táº£ chi tiáº¿t:</label>
	<div class="col-sm-10">
	<textarea name="mo_ta_chi_tiet" class="ckeditor">{$data['mo_ta_chi_tiet']}</textarea>
	</div>
	</div>

	<div class="form-group">
	<div class="col-md-12">
	<input type="submit" class="btn btn-primary" value="Cáº­p nháº­t" name="capnhat"/>
	</div>
	</div>-->

</form>
{/block}
<!--`ma_san_pham`, `ten_san_pham`, `ten_san_pham_url`,
`ma_loai`, `mo_ta_tom_tat`, `mo_ta_chi_tiet`, `don_gia`, `hinh`, `san_pham_moi`, `so_lan_xem`, `ngay_tao`-->

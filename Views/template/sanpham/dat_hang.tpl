{extends "index.tpl"}
{block name="content"}
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<legend>
				Please fill this from below
			</legend>
		</div>
        <form method="POST" action="">
		<!-- panel preview -->
		<div class="col-sm-5">
			<h4>Add payment:</h4>
			<div class="panel panel-default">
            
				<div class="panel-body form-horizontal payment-form">
					<div class="form-group">
						<label for="concept" class="col-sm-3 control-label">Name</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="ten_khach_hang" name="ten_khach_hang" value="{$data['ten_khach_hang']}">
						</div>
					</div>
					<div class="form-group">
						<label for="description" class="col-sm-3 control-label">Sex</label>
						<div class="col-sm-9">
							<input type="checkbox" id="phai" name="phai" value="0" 
							{if $data['phai']==0}
								checked="checked" 
							{/if}>Male
							<input type="checkbox" id="phai" name="phai" value="1" 
							{if $data['phai']==1}
								checked="checked" 
							{/if}>Female
						</div>
					</div>
    	           <div class="form-group">
						<label for="date" class="col-sm-3 control-label">BrithDay</label>
						<div class="col-sm-9">
							<input type="date" class="form-control" id="ngay_sinh" name="ngay_sinh" value="{$data['ngay_sinh']}">
						</div>
					</div>

					<div class="form-group">
						<label for="amount" class="col-sm-3 control-label">Address</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="dia_chi" name="dia_chi" value="{$data['dia_chi']}">
						</div>
					</div>
					<div class="form-group">
						<label for="status" class="col-sm-3 control-label">Contact Phone</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="dien_thoai" name="dien_thoai" >
						</div>
					</div>
					<div class="form-group">
						<label for="status" class="col-sm-3 control-label">Email</label>
						<div class="col-sm-9">
							<input type="email" class="form-control" id="email" name="email">
						</div>
					</div>
				
				</div>
			</div>
		</div>
		<!-- / panel preview -->
		<div class="col-sm-7">
			<h4>Total</h4>

			<div class="row text-right">
				<div class="col-xs-12">
					<h4>Total: <strong><span class="preview-total"></span></strong></h4>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<hr style="border:1px dashed #dddddd;">
					<button type="submit" class="btn btn-primary btn-block" id="dat_hang" name="dat_hang">
						Complete Your Order
					</button>
				</div>
			</div>
		</div>
        </form>
	</div>
</div>
{/block}

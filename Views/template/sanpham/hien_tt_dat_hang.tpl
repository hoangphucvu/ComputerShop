
{extends file="index.tpl"}
{block name="content"}
<div class="panel panel-default">
  <div class="panel-heading">Đặt hàng thành công</div>
  <div class="panel-body">
    <h2>Thông tin đơn đặt hàng</h2>
      <div class="form-horizontal">
        <div class="form-group">
          <label class="control-label col-sm-2">Mã khách hàng:</label>
          <div class="col-sm-4">
            <p class="form-control-static">{$tt_dat_hang[0]['ma_khach_hang']}</p>
          </div>
          <label class="control-label col-sm-2" >Tên khách hàng:</label>
          <div class="col-sm-4">
            <p class="form-control-static">{$tt_dat_hang[0]['ten_khach_hang']}</p>
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2">Địa chỉ:</label>
          <div class="col-sm-4">
            <p class="form-control-static">{$tt_dat_hang[0]['dia_chi']}</p>
          </div>
          <label class="control-label col-sm-2" >Điện thoại:</label>
          <div class="col-sm-4">
            <p class="form-control-static">{$tt_dat_hang[0]['dien_thoai']}</p>
          </div>
        </div>
        
        <div class="form-group">
          <label class="control-label col-sm-2">Số hóa đơn:</label>
          <div class="col-sm-4">
            <p class="form-control-static">{$tt_dat_hang[0]['so_hoa_don']}</p>
          </div>
          <label class="control-label col-sm-2" >Ngày mua:</label>
          <div class="col-sm-4">
            <p class="form-control-static">{$tt_dat_hang[0]['ngay_hd']}</p>
          </div>
        </div>        
      </div>
      
      <table class="table">
        <thead>
          <tr>
            <th>STT</th>
            <th>Mã sản phẩm</th>
            <th>Tên phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
          </tr>
        </thead>
        <tbody>
        {$i=1}{$tt=0}
        {foreach $tt_dat_hang as $item}
          <tr>
            <th scope="row">{$i}</th>
            <td>{$item['ma_san_pham']}</td>
            <td>{$item['ten_san_pham']}</td>
            <td>{number_format($item['don_gia'])}</td>
            <td>{$item['so_luong']}</td>
            <td align="right">{number_format($item['don_gia']*$item['so_luong'])}</td>
          </tr>
          {$tt=$tt+$item['so_luong']*$item['don_gia']}
          {$i=$i+1}
         {/foreach}
         <tr> <td colspan="5"  align="right"><b>Trị giá hóa đơn</b></td><td  align="right"><b></b>{number_format($tt)}</b></td></tr>
        </tbody>
      </table>
      
  </div>
</div>
{/block}
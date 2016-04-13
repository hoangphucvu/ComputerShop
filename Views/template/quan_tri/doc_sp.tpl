{extends file="layout.tpl"}
{block name="content"}
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title" id="panel-title">Danh sách san pham<a class="anchorjs-link" href="#panel-title"><span class="anchorjs-icon"></span></a></h3>
      </div>
      <div class="panel-body">
      <h3><a href="{$path}/ngo-hung-phuc/them-san-pham.html">Thêm san pham</a></h3>
        <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>Mã sp</th>
            <th>Tên sp</th>
            <th>Tên URL</th>
            <th>Ðon giá</th>
            <th>San pham moi</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
        {$i=1}
        {foreach $dssp as $sp}
          <tr>
            <th scope="row">{$i}</th>
            <td>{$sp['ma_san_pham']}</td>
            <td>{$sp['ten_san_pham']}</td>
            <td>{$sp['ten_san_pham_url']}</td>
            <td>{$sp['don_gia']}</td>
            <td>{$sp['san_pham_moi']}</td>
            <td>
                <a href="{$path}/ngo-hung-phuc/san-pham/cap-nhat-san-pham/{$sp['ma_san_pham']}" class="btn btn-danger">Cap nhat</a>
                <a href="{$path}/ngo-hung-phuc/san-pham/xoa-san-pham/{$sp['ma_san_pham']}" class="btn btn-success" onclick="return confirm('Sure??')">Xóa</a>
                </td>
          </tr>
          {$i=$i+1}
          {/foreach}          
        </tbody>
      </table>
      <div class="row" align="center">{$link_trang}</div>
      </div>
    </div>
{/block}
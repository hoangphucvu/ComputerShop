<?php 
require_once 'Models/database.php';
$db = new Database();
 if(isset($_POST['start']) && (int)($_POST['start'])){
    $start=$_POST['start'];
   
	$q="SELECT * FROM san_pham ORDER BY ma_san_pham ASC LIMIT $start,10";

	$db->setQuery($q);
	$r = $db->loadAllRow(array());
	$table ="";
	foreach ($r as $key => $row) {
		$table .= '
		<div class="col-md-2 pro_info_small">
		<div class="cuadro_intro_hover">
			<p><img src="http://ngohungphuc-dev.esy.es/Public/hinh_san_pham/'.$row['hinh'].'"  alt="'.$row['ten_san_pham'].'"></p>
			<div class="caption">
				<div class="blur"></div>
				<div class="caption-text">
					<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">'.number_format($row['don_gia']).' VND</h3>
					<p style="padding:10px">
						'.$row['ten_san_pham'].'
					</p>
					<a class=" btn btn-default btn_details" href="san-pham/'.$row['ten_san_pham_url'].'-'.$row['ma_san_pham'].'.html"><span class="glyphicon glyphicon-plus"> Xem Thêm</span></a>
				</div>
			</div>
			</div>
		</div>
		';

		}
		echo $table;
	
}






?>
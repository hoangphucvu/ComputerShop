<!DOCTYPE html>
<html>

	<head>
		<title>{$title}</title>
		<meta  charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<link rel="stylesheet" href="{$path}/Public/css/bootstrap.min.css">
		<link rel="stylesheet" href="{$path}/Public/css/bootstrap-theme.min.css">
		<link rel="stylesheet" type="text/css" href="{$path}/Public/css/style.css">
		<link rel="stylesheet" type="text/css" href="{$path}/Public/font-awesome/css/font-awesome.min.css" />

		<script src="{$path}/Public/js/jquery.min.js"></script>
		<script>
			$(document).ready(function() {
				$("#muahang").click(function() {
					//alert("123");
					var tt = $("#muahang").attr("name");
					var form_data = {
						sp : tt,
						sl : $("#soluong_sp").val()
					};

					$.ajax({
						url : "{$path}/gio-hang/them-san-pham.html",
						type : 'POST',
						data : form_data,
						dataType : 'json',
						success : function(data) {
							$("#TTGH").html(data['tsl'] + ' product - ' + data['tt'] + ' vnđ ');
						}
					});

				});
				   $("#ten_san_pham").blur(function(){
               var chuoi=$("#ten_san_pham").val();
               if(chuoi.length>0)
               {
                    $("#ten_san_pham_url").val(bodau(chuoi));
               }
            });
            function bodau(str)
            {
                var str = str;
                str= str.toLowerCase();
                str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a");
                str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e");
                str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i");
                str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o");
                str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u");
                str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y");
                str= str.replace(/đ/g,"d");
                str= str.replace(/!|@|\$|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\'| |\"|\&|\#|\[|\]|~/g,"-");
                str= str.replace(/-+-/g,"-"); 
                str= str.replace(/^\-+|\-+$/g,"");
                return str;
            }
			});

		</script>
	</head>

	<body>
		<div class="container-fluid">
			{block name="content"}{/block}
		</div>

	</body>
</html>
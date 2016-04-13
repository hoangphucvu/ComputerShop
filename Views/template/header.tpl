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
	<link href="{$path}/Public/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />

	<script src="{$path}/Public/js/jquery.min.js"></script>

	<script type="text/javascript">
		jQuery(function($) {
			$('#carousel1').carousel({
				interval : 2000
			});

			var clickEvent = false;

			$('#carousel1').on('click', '.nav a', function() {
				clickEvent = true;
				$('.nav li').removeClass('active');
				$(this).parent().addClass('active');
			}).on('slid.bs.carousel', function(e) {
				if (!clickEvent) {
					var count = $('.nav').children().length - 1;
					var current = $('.nav li.active');
					current.removeClass('active').next().addClass('active');
					var id = parseInt(current.data('slide-to'));
					if (count == id) {
						$('.nav li').first().addClass('active');
					}
				}
				clickEvent = false;
			});
		});
	</script>
	<script>
		$(window).load(function() {
			$("#news").sticky({
				topSpacing : 10
			});
		});
	</script>
	<script>
		function submit_search() {
			if (document.forms["form_search"]["key"].value.length == 0) {
				alert("Please enter name of the product you want to find! ");
				return false;
			} else {
				return true;
			}
		}


		$(".more").click(function() {
			$(".pro_info_small_wrap").css("height", "auto");

		});
	</script>
	<div id="fb-root"></div>
	<script>
		( function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0];
				if (d.getElementById(id))
					return;
				js = d.createElement(s);
				js.id = id;
				js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=1591301387785409";
				fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
	</script>
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
		});

	</script>
	<script>
		document.getElementById("more_click").onclick = function() {
			this.style.height - auto;
		}

	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('.bxslider').bxSlider({
				minSlides : 10,
				maxSlides : 10,
				slideWidth : 170,
				slideMargin : 10,
				ticker : true,
				speed : 100000
			});
		});
	</script>
	<script>
		$(function() {
			$more = $('.more');
			$start = 20;
			// 20 kết quả mặc định
			$text_default = $more.text();
			$more.click(function() {
				if (!$(this).hasClass('clicked')) {
					$(this).addClass('clicked').text('Loading Please Wait....');
					$.post('process.php', {
						start : $start
					}, function(data) {
						if (data) {
							$('.pro_info_small_wrap').append(data);
							$more.removeClass('clicked').text($text_default);
							$start += 10;
							// 10 giá trị load ra
						} else {
							$more.remove();
						}
					});
				}
			});
		});
	</script>
</head>
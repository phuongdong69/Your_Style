
<div style="background-color: #fff;" class="row2">
	<form action="index.php?act=listsp" method="POST">
		<h2 style="text-align: center; color: #000;margin-bottom: 30px;">Tin Tức Mới Nhất</h2>

	</form>
	<div class="row2 form_content ">
		<form action="index.php?act=news" method="POST">
			<div class="row2 mb10 formds_loai">
				<table border="1">

					<?php
					foreach ($listnews as $news) {
						extract($news);
						$link = "index.php?act=newsdetail&id=" . $id;
					?>

						<div  class="newsss">
							<div class="news" style="margin-bottom: 20px;">
							<a class="tit"  href="<?= $link ?>"><?= $title ?> </a><br>
							</div>
							<div style="font-size: 18px;">
								<?= $intro ?>
							</div>
							
						</div>
						<hr>
					<?php } ?>
				</table>
			</div>
			<div class="row mb10 ">
			</div>
		</form>
	</div>
</div>
<!-- <div style="color: #fff;" class="flex flex-col md:flex-row p-4">

	<div class="flex-1">
<style>
	.can{
		margin-left: 100px;
	}
	.mb-4{
		size: 20px;
	}
	h5{
		color: #000;
	}
	a{
		color: #fff;	
	}
</style>

	
            // foreach ($tintuc as $sp) {
            //     extract($sp);
            //     echo '
			// 	<div class="w-full md:w-1/3 md:pl-8 mt-8 md:mt-0 can">
			// 	<ul class="list-disc list-inside space-y-2">
			// 		<a href="index.php?act=newdetail?id='.$id.' "><h4 class="mb-4">'.$title.'</h4></a>					
			// 		<h5>'.$intro.'</h5>
						
			// 	</ul>
			// </div>
			// 	<hr>
					

			// 		';
            // }
            ?> -->



<!-- <h1 class="text-2xl font-bold mb-4">Giới thiệu YourStyle</h1>
		<p class="mb-4">Thương hiệu thời trang nam YourStyle được thành lập từ tháng 3 năm 2010,
			là thương hiệu thời trang uy tín hàng đầu tại Việt Nam dành riêng cho phái mạnh.</p>
		<h2 class="text-xl font-semibold mb-2">Sứ Mệnh</h2>
		<p class="mb-4">Không ngừng sáng tạo và tỉ mỉ từ công đoạn sản xuất đến các khâu dịch vụ,
			nhằm mang đến cho Quý Khách Hàng những trải nghiệm mua sắm đặc biệt nhất: sản phẩm chất lượng - dịch vụ hoàn hảo - xu hướng thời trang mới mẻ và tinh tế. Thông qua các sản phẩm thời trang, YourStyle luôn mong muốn truyền tải đến bạn những thông điệp tốt đẹp cùng với nguồn cảm hứng trẻ trung và tích cực.</p>

		<h2 class="text-xl font-semibold mb-2">Tầm Nhìn</h2>
		<p class="mb-4">Với mục tiêu xây dựng và phát triển những giá trị bền vững, trong 10 năm tới,
			YourStyle sẽ trở thành thương hiệu dẫn đầu về thời trang phái mạnh trên thị trường Việt Nam.</p>

		<h2 class="text-xl font-semibold mb-2">Thông Điệp YourStyle Gửi Đến Bạn</h2>
		<p class="mb-4">YourStyle muốn truyền cảm hứng tích cực đến các chàng trai: Việc mặc đẹp rất quan trọng,
			nó thể hiện được cá tính, sự tự tin và cả một phần lối sống, cách suy nghĩ của bản thân. Mặc thanh lịch,
			sống thanh lịch.</p>
		<p class="font-bold">Chọn YourStyle, bạn đang lựa chọn sự hoàn hảo cho diện nhấn thời trang của chính mình!</p>
	</div>

	<div class="w-full md:w-1/3 md:pl-8 mt-8 md:mt-0">
		<h2 class="text-xl font-bold mb-4">YourStyle™</h2>
		<ul class="list-disc list-inside space-y-2">
			<li>Giới thiệu YourStyle</li>
			<li>Liên hệ</li>
			<li>Tuyển dụng</li>
			<li>Bản đồ</li>
			<li>Chính sách bảo mật</li>
			<li>Hướng dẫn đặt hàng</li>
			<li>Hướng dẫn chọn size</li>
			<li>Chính sách thanh toán - Giao hàng</li>
			<li>Chính sách đổi hàng</li>
			<li>Chính sách khách vip</li>
			<li>Câu hỏi thường gặp</li>
			<li>Chính sách cookie</li>
		</ul>
	</div>
</div> -->
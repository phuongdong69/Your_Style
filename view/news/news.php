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
							<div class="news">
							<a class="tit"  href="<?= $link ?>"><?= $title ?> </a><br>
							</div>
							<div class="intro">
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

<!-- <html>
  <head>
   
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
		<script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
		<script type="text/javascript">
			window.tailwind.config = {
				darkMode: ['class'],
				theme: {
					extend: {
						colors: {
							border: 'hsl(var(--border))',
							input: 'hsl(var(--input))',
							ring: 'hsl(var(--ring))',
							background: 'hsl(var(--background))',
							foreground: 'hsl(var(--foreground))',
							primary: {
								DEFAULT: 'hsl(var(--primary))',
								foreground: 'hsl(var(--primary-foreground))'
							},
							secondary: {
								DEFAULT: 'hsl(var(--secondary))',
								foreground: 'hsl(var(--secondary-foreground))'
							},
							destructive: {
								DEFAULT: 'hsl(var(--destructive))',
								foreground: 'hsl(var(--destructive-foreground))'
							},
							muted: {
								DEFAULT: 'hsl(var(--muted))',
								foreground: 'hsl(var(--muted-foreground))'
							},
							accent: {
								DEFAULT: 'hsl(var(--accent))',
								foreground: 'hsl(var(--accent-foreground))'
							},
							popover: {
								DEFAULT: 'hsl(var(--popover))',
								foreground: 'hsl(var(--popover-foreground))'
							},
							card: {
								DEFAULT: 'hsl(var(--card))',
								foreground: 'hsl(var(--card-foreground))'
							},
						},
					}
				}
			}
		</script>
		<style type="text/tailwindcss">
			@layer base {
				:root {
					--background: 0 0% 100%;
--foreground: 0 0% 3.9%;
--card: 0 0% 100%;
--card-foreground: 0 0% 3.9%;
--popover: 0 0% 100%;
--popover-foreground: 0 0% 3.9%;
--primary: 0 72.2% 50.6%;
--primary-foreground: 0 85.7% 97.3%;
--secondary: 0 0% 96.1%;
--secondary-foreground: 0 0% 9%;
--muted: 0 0% 96.1%;
--muted-foreground: 0 0% 45.1%;
--accent: 0 0% 96.1%;
--accent-foreground: 0 0% 9%;
--destructive: 0 84.2% 60.2%;
--destructive-foreground: 0 0% 98%;
--border: 0 0% 89.8%;
--input: 0 0% 89.8%;
--ring: 0 72.2% 50.6%;
--radius: 0.4rem;
				}
				.dark {
					--background: 0 0% 3.9%;
--foreground: 0 0% 98%;
--card: 0 0% 3.9%;
--card-foreground: 0 0% 98%;
--popover: 0 0% 3.9%;
--popover-foreground: 0 0% 98%;
--primary: 0 72.2% 50.6%;
--primary-foreground: 0 85.7% 97.3%;
--secondary: 0 0% 14.9%;
--secondary-foreground: 0 0% 98%;
--muted: 0 0% 14.9%;
--muted-foreground: 0 0% 63.9%;
--accent: 0 0% 14.9%;
--accent-foreground: 0 0% 98%;
--destructive: 0 62.8% 30.6%;
--destructive-foreground: 0 0% 98%;
--border: 0 0% 14.9%;
--input: 0 0% 14.9%;
--ring: 0 72.2% 50.6%;
				}
			}
		</style>
  </head>
  <body>
    <div style="color: #fff;" class="flex flex-col md:flex-row p-4">
  
  <div class="flex-1">
    <h1  class="text-2xl font-bold mb-4">Giới thiệu YourStyle</h1>
    <p class="mb-4">Thương hiệu thời trang nam YourStyle được thành lập từ tháng 3 năm 2010, là thương hiệu thời trang uy tín hàng đầu tại Việt Nam dành riêng cho phái mạnh.</p>
<h2 class="text-xl font-semibold mb-2">Sứ Mệnh</h2>
<p class="mb-4">Không ngừng sáng tạo và tỉ mỉ từ công đoạn sản xuất đến các khâu dịch vụ, nhằm mang đến cho Quý Khách Hàng những trải nghiệm mua sắm đặc biệt nhất: sản phẩm chất lượng - dịch vụ hoàn hảo - xu hướng thời trang mới mẻ và tinh tế. Thông qua các sản phẩm thời trang, YourStyle luôn mong muốn truyền tải đến bạn những thông điệp tốt đẹp cùng với nguồn cảm hứng trẻ trung và tích cực.</p>

<h2 class="text-xl font-semibold mb-2">Tầm Nhìn</h2>
<p class="mb-4">Với mục tiêu xây dựng và phát triển những giá trị bền vững, trong 10 năm tới, YourStyle sẽ trở thành thương hiệu dẫn đầu về thời trang phái mạnh trên thị trường Việt Nam.</p>

<h2 class="text-xl font-semibold mb-2">Thông Điệp YourStyle Gửi Đến Bạn</h2>
<p class="mb-4">YourStyle muốn truyền cảm hứng tích cực đến các chàng trai: Việc mặc đẹp rất quan trọng, nó thể hiện được cá tính, sự tự tin và cả một phần lối sống, cách suy nghĩ của bản thân. Mặc thanh lịch, sống thanh lịch.</p>
<p  class="font-bold">Chọn YourStyle, bạn đang lựa chọn sự hoàn hảo cho diện nhấn thời trang của chính mình!</p>
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
</div>
  </body>
</html> -->
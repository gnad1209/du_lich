<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Untitled Document</title>
</head>


<body>
	<div class="right-menu">
		<ul class="right-nav">
			<div>
			<!-- <li class="mc" style="margin-bottom:10px"><a href="index.php?left=7">Tìm kiếm tour du lịch</a></li> -->
				<?php
				include "timkiem.php";
				if (($role == '1') or ($role == '2')) {
				?>
					<li class="mc"><a href="" title="Cập nhật thông tin">Cập nhật thông tin</a></li>
			</div>
			<div class="right-navbar">
				<li><a class="drop" href="index.php?top=21">Cập nhật loại hoạt động</a></li>
				<li><a class="drop" href="index.php?top=17">Cập nhật hoạt động</a></li>
				<li><a class="drop" href="index.php?top=22">Cập nhật loại hình du lịch</a></li>
				<li><a class="drop" href="index.php?top=20">Cập nhật tài nguyên</a></li>
				<li><a class="drop" href="index.php?top=19">Cập Nhật Khách Sạn</a></li>
				<li><a class="drop" href="index.php?top=27">Cập nhật loại nhà hàng</a></li>
				<li><a class="drop" href="index.php?top=25">Cập nhật nhà hàng</a></li>
				<li><a class="drop" href="index.php?top=26">Cập nhật hướng dẫn viên</a></li>
				<li><a class="drop" href="index.php?top=24">Cập nhật loại tour du lịch</a></li>
				<li><a class="drop" href="index.php?top=18">Cập nhật tour du lịch</a></li>
			</div>

		<?php
				}
		?>
		<?php
		if ($role == '2') {
		?>
			<li class="mc"><a href="" title="Cập nhật thông tin">Sửa thông tin</a></li>
			<div class="right-navbar">
				<li><a class="drop" href="index.php?top=23">Sửa thông tin khách sạn</a></li>
				<li><a class="drop" href="index.php?top=28">Sửa tour du lịch</a></li>
				<li><a class="drop" href="index.php?top=29">Sửa Xóa nhà Hàng</a></li>
				<li><a class="drop" href="index.php?top=30">Sửa xóa chi tiết hoạt động</a></li>
				<li><a class="drop" href="index.php?top=31">Sửa thông tin hd viên</a></li>
				<li><a class="drop" href="index.php?top=32">Sửa tài nguyên du lịch</a></li>
			</div>

		<?php
		}
		?>
		</ul>
	</div>
</body>
</body>

</html>
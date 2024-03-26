<link rel="stylesheet" href="/css/menuleft.css">
<div class="left_menu">
	<ul>
		<li class="mc"><a href="index.php">TRANG CHỦ</a></li>
		<?php
		if (isset($_SESSION['username'])) { ?>
			<li class="c"><a href="index.php?left=3">Thông tin thành viên</a></li>
			<li class="c"><a href="index.php?left=4">Thoát</a></li>
			<?php
			require_once('dbconect.php');
			$u = $_SESSION['username'];
			$sql = "select * from thanhvien where username='$u'";
			$result = mysqli_query($link, $sql);
			$rows = mysqli_fetch_array($result);
			if ($rows['quyen'] == '2') {
			?>
				<li class="c"><a href="index.php?left=5">Phân quyền thành viên</a></li>
			<?php

			}
		} else {
			?>
			<li class="c"><a href="index.php?left=1">Đăng Ký</a></li>
			<li class="c"><a href="index.php?left=2">Đăng Nhập</a></li>
		<?php
		}
		if (isset($_SESSION['tour'])) {
		?>
			<li class="c"><a href="index.php?left=6">Tour bạn đặt</a></li>
		<?php
		}
		?>
		<li class="mc"><a href="">Các tour trong nước</a></li>
		<?php
		require_once('dbconect.php');
		$sql = "select * from tourdulich where maloaitour='1'";
		$result = mysqli_query($link, $sql);
		while ($rows = @mysqli_fetch_array($result)) {
		?>
			<li class="c"><a href="index.php?tour=<?php echo $rows['matour']; ?>"><?php echo $rows['tentour']; ?></a></li>
		<?php
		}
		?>
		<li class="mc"><a href="">Các tour nước ngoài</a></li>
		<?php
		require_once('dbconect.php');
		$sql = "select * from tourdulich where maloaitour='2'";
		$result = mysqli_query($link, $sql);
		while ($rows = @mysqli_fetch_array($result)) {
		?>
			<li class="c"><a href="index.php?tour=<?php echo $rows['matour']; ?>"><?php echo $rows['tentour']; ?></a></li>
		<?php
		}
		?>
		<li class="mc"><a href="">Tour du lịch mạo hiểm</a></li>
		<?php
		require_once('dbconect.php');
		$sql = "select * from tourdulich where maloaitour='3'";
		$result = mysqli_query($link, $sql);
		while ($rows = @mysqli_fetch_array($result)) {
		?>
			<li class="c"><a href="index.php?tour=<?php echo $rows['matour']; ?>"><?php echo $rows['tentour']; ?></a></li>
		<?php
		}
		?>

	</ul>
</div>
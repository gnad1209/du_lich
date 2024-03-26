<?php
include('dbconect.php');
$role = 0;
if (isset($_SESSION['username'])) {
	$u = $_SESSION['username'];
	$sql = "select * from thanhvien where username='$u'";
	$result = mysqli_query($link, $sql);
	$rows = mysqli_fetch_array($result);
	$role = $rows['quyen'];
}
?>
<div style="width: 100%;">
	<form action="">
		<table class="mainmenu" style="width: 100%;">
			<tr>
				<td align="center" valign="middle" style="background-color:#FA5912">
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td class="submenu">
								<div class="menu">
									<ul class="nav">
										<li><a href="index.php" title="Trang Chủ">Trang Chủ</a></li>
										<li><a href="index.php?top=35" title="Giới thiệu về Hà Nội">Giới thiệu về Hà Nội <i class="ti-angle-double-down"></i></a>
											<div class="navbar">
												<ul>
													<?php
													require_once('dbconect.php');
													$sql = "select * from hanoi";
													$result = mysqli_query($link, $sql);
													while ($rows = @mysqli_fetch_array($result)) {
													?>
														<li><a class="drop" href="index.php?top=<?php echo $rows['ma']; ?>"><?php echo $rows['ten']; ?></a></li>
													<?php
													}
													?>
												</ul>
											</div>
										</li>
										<li><a href="" title="Thông tin hữu ích">Dịch vụ du lich <i class="ti-angle-double-down"></i> </a>
											<div class="navbar">
												<ul>
													<li><a class="drop" href="index.php?top=7">Các tour du lịch</a></li>
													<li><a class="drop" href="index.php?top=8">Nhà Hàng</a></li>
													<li><a class="drop" href="index.php?top=9">Khách Sạn</a></li>
												</ul>
											</div>
										</li>
										<li><a href="index.php?top=33" title="Các hoạt động du lịch">Các hoạt động du lịch <i class="ti-angle-double-down"></i> </a>
											<div class="navbar">
												<ul>
													<?php
													require_once('dbconect.php');
													$sql = "select * from hoatdong";
													$result = mysqli_query($link, $sql);
													while ($rows = @mysqli_fetch_array($result)) {
													?>
														<li><a class="drop" href="index.php?top_hd=<?php echo $rows['mahd']; ?>"><?php echo $rows['tenhd']; ?></a></li>
													<?php
													}
													?>
												</ul>
											</div>
										</li>
										<li><a href="index.php?top=34" title="Thông tin hữu ích">Tài Nguyên Du Lịch <i class="ti-angle-double-down"></i></a>
											<div class="navbar">

												<ul>
													<?php
													require_once('dbconect.php');
													$sql = "select * from loaihinhdulich";
													$result = mysqli_query($link, $sql);
													while ($rows = @mysqli_fetch_array($result)) {
													?>
														<li><a class="drop" href="index.php?top_tn=<?php echo $rows['malh']; ?>"><?php echo $rows['tenlh']; ?></a></li>
													<?php
													}
													?>
												</ul>
											</div>
										</li>


									</ul>
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</form>
</div>
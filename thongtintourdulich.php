<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php
include('dbconect.php');
?>
<font color="#00CCFF" face="Georgia, Times New Roman, Times, serif" size="6">Tour Du Lịch</font>
<?php
$sql1 = "select * from loaitourdulich";
$result1 = mysqli_query($link, $sql1);
$a = @mysqli_num_rows($result1);
for ($i = 1; $i <= $a; $i++) {
	$sql = "SELECT * from tourdulich where maloaitour='$i'";
	$result = mysqli_query($link, $sql);
?>
	<table width="600" border="0">
		<tr>
			<td>
				<?php
				$sql2 = "select * from loaitourdulich where maloaitour='$i'";
				$result2 = mysqli_query($link, $sql2);
				$rows2 = mysqli_fetch_array($result2);
				echo $rows2['tenloaitour'];
				?>
			</td>
		</tr>
		<tr>
			<td align="center">
				<?php
				while ($rows = @mysqli_fetch_array($result)) {
				?>
					<div class="table">
						<a href="index.php?tour=<?php echo $rows['matour']; ?>">&diams; <?php echo $rows['tentour']; ?></a>
					</div>
				<?php } ?>
			</td>
		</tr>
	</table>
<?php
}
?>
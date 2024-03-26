<?php 
	$n=$_POST['txtname'];
	$mlh=$_POST['cbbmalh'];
	$ct=$_POST['txtchitiet'];
	$matn=$_POST['txtmatn'];
	include("dbconect.php");
	$sql="UPDATE tainguyendulich SET tentn='$n', malh='$mlh', chitiet='$ct',anh='{$_FILES['upload']['name']}' where matn='$matn'";
	$result=mysqli_query($link,$sql);
	$filename=$_FILES['upload']['name'];
	$result=mysqli_query($link,$sql);
	if($result)
	{
		$filename=$_FILES['upload']['name'];
		if(move_uploaded_file($_FILES['upload']['tmp_name'],"D:/Hoc_tap/Baitap_DH/PHP/mnm/Do_An/anhtainguyen/$filename"))
		{
		?>
              	<script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php";
                </script>
                <?php
		}
				?>
				<script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php?suatainguyen=<?php echo $rows['matn'];?>";
                </script>
                <?php
	}
	else
	{
			?>
   				 <script language="javascript">
					window.alert("Sửa thông tin không thành công");
					window.location="index.php";
				</script>
                <?php
	}
?>
<?php 
	session_start();
	$n=$_POST['txtname'];
	$dt=$_POST['txtdt'];
	$dc=$_POST['txtdc'];
	$ns=$_POST['txtns'];
	$u=$_SESSION['username'];
	include("dbconect.php");
	$sql="UPDATE thanhvien SET tentv='$n', diachi='$dc', sodt='$dt',ngaysinh='$ns' where username='$u'";
	$result=mysqli_query($link,$sql);
	if($result)
	{
		$filename=$_FILES['upload']['name'];
		if(move_uploaded_file($_FILES['upload']['tmp_name'],"D:/Hoc_tap/Baitap_DH/PHP/mnm/Do_An/anhtv/$filename"))
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
					window.location="index.php?left=3";
                </script>
                <?php
	}
	else
	{
			?>
   				 <script language="javascript">
					window.alert("Sửa thông tin không thành công");
					window.location="index.php?left=3";
				</script>
                <?php
	}
?>
<?php
	if(isset($_POST['btnphanquyen']))
	{
		$u=$_POST['cbbtentv'];	
		$q=$_POST['cbbquyen'];
		include('dbconect.php');
		$sql="update thanhvien set quyen='$q' where username='$u'";
		$result=mysqli_query($link,$sql);
		if(@mysqli_affected_rows($link)==1)
		{
			?>
			<script language="javascript">
					window.alert('Bạn đã câp nhât thành công');
					window.location="index.php";
             </script>	
                <?php
		}
		else
		{
			?>
			<script language="javascript">
					window.alert('Bạn ko cập nhật đươc do lỗi hệ thống');
					window.location="index.php";
             </script>	
                <?php
		}
	}
?>
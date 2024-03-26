<link rel="stylesheet" type="text/css" href="css/login.css" />
<script language="javascript">
function checkInput()
{
	if(document.frmlogin.txtuser.value=="")
	{
		window.alert('Bạn chưa nhập username');
		document.frmlogin.txtuser.focus();
		return false;
	}
	
	if(document.frmlogin.txtpass.value=="")
	{
		window.alert('Bạn chưa nhập pass');
		document.frmlogin.txtpass.focus();
		return false;
	}
	
}
function thoat()
{
	window.location="index.php";	
}
</script>

<body>
	<div>
		<h1>Đăng Nhập</h1>
	</div>
<?php
if(isset($_POST['btnlogin']))
{
			include('dbconect.php');
			$u=$_POST['txtuser'];
			$p=$_POST['txtpass'];
			$sql="select username from thanhvien where username='$u' && password= '$p'";
			$result=mysqli_query($link,$sql);
			$rows=@mysqli_fetch_array($result,MYSQLI_NUM);
				if(@mysqli_num_rows($result)==1)
				{	
					$_SESSION['username']=$rows[0];
					?>
                    <script language="javascript">
					window.alert("Đăng nhập thanh cong");
					window.location="index.php";
					</script>
                    <?php
				}
				else
				{
					?>
                    <script language="javascript">
					window.alert("Đăng nhập ko thanh cong");
					</script>
                    <?php
				}
}
?>
<form name="frmlogin" method="post" action="" onSubmit="return checkInput();">
<div align="center" ><table width="300" border="0" bgcolor="#FFFFFF" height="100" >
  <tr>
    <td align="center" valign="top"><font color="#FF0000" size="4" ><b>Username: </b></font><input type="text" name="txtuser" id="textfield" placeholder="username" size="20"/><br /><br />
    <font color="#FF0000" size="4"><b>Password: </b></font><input type="password" name="txtpass" id="textfield2" placeholder="****" size="20"/><br /><br />
 	<input class="btnDangNhap" type="submit" name="btnlogin" value="Đăng Nhập"  />    
      <input class="btnDangNhap" name="" type="button" value="Thoát" onClick="thoat();" />
     </td>
  </tr> 
</table></div>
</form>
</body>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<?php 
	$q=$_GET["q"];
	include('dbconect.php');
	$sql="select * from tourdulich where tentour like '%$q%'";
	$result=mysqli_query($link,$sql);
?>
<div >
<table width="400" align="right" >
  <tr>
    <td width="100" class="chu" align="center">Ảnh</td>
    <td width="100" class="chu" align="center">Tên tour</td>
    <td width="20" class="chu" align="center">Giá</td>
    <td width="40" class="chu" align="center">Số ngày</td>
    <td width="40" class="chu" align="center">Chi Tiết</td>
  </tr>
  <?php
  	while($rows=mysqli_fetch_array($result))
	{
  ?>
  <tr>
    <td align="center"><img src="anhtourdulich/<?php echo $rows['anh'];?>" width="100" height="100"></td>
    <td align="center"><?php echo $rows['tentour'];?></td>
    <td align="center"><?php echo $rows['giatien'];?>$</td>
    <td align="center"><?php echo $rows['songay'];?></td>
    <td align="center"><a href="index.php?tour=<?php echo $rows['matour'];?>">Chi tiết</a></td>
  </tr>
  <?php
	}
	?>
</table>

</div>
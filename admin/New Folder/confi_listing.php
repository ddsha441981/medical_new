<?php require("connection.php");
include("acces.php");?>
<?php $sql="select * from confi";
$ss=mysql_query($sql);
?>
<table align="center" width="100%" border="1">
<tr>
		<td width="10%" valign="top"><?php include("left.php");?></td>
		<td>
		<table>
		<th>Image</th>
		<th>Logo</th>
		<th>phone</th>
		<th>phone2</th>
		<th>email</th>
		<th>Tiwtter</th>
		<th>Rediff</th>
		<th>Facebook</th>
		<th>Update</th>
<tr>
		<?php $fs=mysql_fetch_assoc($ss)?>
	<td><img src="../confi_image/<?php echo $fs['image'];?>" width="100px" height="100px" /></td>
	<td><img src="../confi_image/<?php echo $fs['logo'];?>" width="50px" height="50px" /></td>
	<td><?php echo $fs['phone'];?></td>
	<td><?php echo $fs['phone2'];?></td>
	<td><?php echo $fs['email'];?></td>
	<td><?php echo $fs['tiwtter'];?></td>
	<td><?php echo $fs['rediff'];?></td>
	<td><?php echo $fs['facebook'];?></td>
	<td><a href="confi_update.php?id=<?php echo $fs['id'];?>">Update</a></td>
</tr>
		</table>
		</td>
</tr>
</table>
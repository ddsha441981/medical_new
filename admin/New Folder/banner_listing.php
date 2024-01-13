<?php require("connection.php");
include("acces.php");?>
<?php $sql="select * from banner_image";
$ss=mysql_query($sql);

echo $_SESSION['message'];
		$_SESSION['message']=="";?>
<table align="center" width="100%" border="1">
<tr>
		<td width="10%" valign="top"><?php include("left.php");?></td>
		<td>
		<table>
		<th>Image</th>
		<th>Status</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Update</th>
		<th>Delete</th>
<tr>
		<?php while($fs=mysql_fetch_assoc($ss)) { ?>
	<td><img src="../banner_image/<?php echo $fs['image'];?>" width="100px" height="100px" /></td>
	<td><?php echo $fs['status'];?></td>
	<td><?php echo $fs['created'];?></td>
	<td><?php echo $fs['modified'];?></td>
	<td><a href="banner_image_update.php?id=<?php echo $fs['id'];?>">Update</a></td>
	<td><a href="banner_image_delete.php?id=<?php echo $fs['id'];?>">Delete</a></td>
</tr><?php }?>
		</table>
		</td>
</tr>
</table>
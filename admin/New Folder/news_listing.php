<?php require("connection.php");?>
<?php include("acces.php");?>
<?php $sql="select * from news";
$my=mysql_query($sql); 


echo $_SESSION['message'];
$_SESSION['message']="";
?>
		
		<table width="100%" align="center" border="1">
<tr>
		<td width="10%" valign="top"><?php include("left.php");?></td>
		<td>
		<table>
<tr>
		<th>Tittle</th>
		<th>Description</th>
		<th>Images</th>
		<th>Status</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Update</th>
		<th>Delete</th>
</tr>
<tr>		
		<?php while($fetch=mysql_fetch_assoc($my)){?>
		<td><?php echo $fetch['tittle'];?></td>
		<td><?php echo substr($fetch['description'],0,50);?></td>
		<td><img src="../news_image/<?php echo $fetch['image'];?>" width="100px" width="100px"/></td>
		<td><?php echo $fetch['status'];?></td>
		<td><?php echo $fetch['created'];?></td>
		<td><?php echo $fetch['modified'];?></td>
		<td><a href="news_update.php?id=<?php echo $fetch['id'];?>">Update</a></td>
		<td><a href="news_delete.php?id=<?php echo $fetch['id'];?>">Delete</a></td>
</tr>
<tr><td colspan="7"><hr /></td></tr><?php } ?>
		</table>
		</td>
</tr>
		</table>

<?php require("connection.php");
include("acces.php");
$data="select * from pages";
$my=mysql_query($data);
echo $_SESSION['message'];
$_SESSION['message']="";
 ?>
<table align="center" width="100%" border="1">
<tr>
		<td width="10%" valign="top"><?php include("left.php");?></td>
		<td>
		<table align="center" width="100%">
<tr>
		<th>Name</th>
		<th>Description</th>
		<th>Image</th>
		<th>Status</th>
		<th>Created</th>
		<th>Modified</th>
		<th>Update</th>
</tr>
		<?php while($fetch=mysql_fetch_assoc($my))
		{?>
<tr>
		
		<td align="center"><?php echo $fetch['name'];?></td>
		<td><?php echo substr($fetch['description'],0,100);?></td>
	<td><img src="../page_image/<?php echo $fetch['image'];?>" width="100px" width="100px"  /></td>
		<td><?php echo $fetch['status'];?></td>
		<td><?php echo $fetch['created'];?></td>
		<td><?php echo $fetch['modified'];?></td>
		<td><a href="page_update.php?id=<?php echo $fetch['id'];?>">update</a></td></tr>
		<tr><td colspan="5"><hr />
		</td></tr>
		
		<?php 
		}
		?>
	
		</table>
		</td>
		</tr>
		</table>



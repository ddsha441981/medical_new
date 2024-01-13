		<?php include("connection.php");
		include("acces.php");?>
		<?php $sql="select * from ads";
		$qq=mysql_query($sql);
		echo $_SESSION['message'];
		$_SESSION['message']="";?>
		<table align="center" width="100%" border="1">
<tr>
		<td valign="top" width="10%"><?php include("left.php");?></td>
		<td>
		<table>
		<th>Image</th>
		<th>Url</th>
		<th>Update</th>
		<th>Delete</th>
<tr>	
		<?php while($fetch=mysql_fetch_assoc($qq)){?>
		<td><img src="../ads_image/<?php echo $fetch['image'];?>" width="50px" height="50px"></td>
		<td><?php echo $fetch['url'];?></td>
		<td><a href="update_ads.php?id=<?php echo $fetch['id'];?>">Update</a></td>
		<td><a href="delete_ads.php?id=<?php echo $fetch['id'];?>">Delete</a></td>
</tr><?php }?>
		</table>
</td>
</tr>
		</table>

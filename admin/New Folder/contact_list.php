<?php require("connection.php");
include("acces.php");
$ganesh="select * from contects";
$my=mysql_query($ganesh);
echo $_SESSION['message'];
$_SESSION['message']="";
?>
		<table align="center" width="100%" border="1">
<tr><td>
		<?php include('left.php');?>
		</td><td>
		<table>
<tr>
		<th>Name</th>
		<th>Email</th>
		<th>Message</th>
		<th>Delete</th>
		<th>Email</th>
</tr>

		<?php while($fetch=mysql_fetch_assoc($my)){?><tr>
		<td><?php echo $name=$fetch['name'];?></td>
		<td><?php echo $email=$fetch['email'];?></td>
		<td><?php echo $message=$fetch['message'];?></td>
		<td><a href="delete.php?id=<?php echo $fetch['id'];?>">delete</a></td>
		<td><a href="email.php?id=<?php echo $fetch['id'];?>">email</a></td>
		
</tr>	<?php }?>
		</table>
		</td>
</tr>
		</table>
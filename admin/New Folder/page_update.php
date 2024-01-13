<?php require("connection.php");
include("acces.php");
 $id=$_GET['id'];
$query="select * from pages where id='".$id."' ";
$data=mysql_query($query);
$fetch=mysql_fetch_assoc($data);
$name=$fetch['name'];
$description=$fetch['description'];
$status=$fetch['status'];
$created=$fetch['created'];

?>
<?php if(isset($_POST['save']))
{
$temp=true;
$name=$_POST['name'];
$description=$_POST['description']; 
if($name=="")
{
$temp=false;
$error_name="please enter your name";
}
if($description=="")
{
$temp=false;
$error_description="please enter your description";
}
if($temp==true)
{
$fileTmpLoc=$_FILES["image"]["tmp_name"];
$pathAndName="../page_image/".$_FILES["image"]["name"];
move_uploaded_file($fileTmpLoc,$pathAndName);
if($_FILES['image']['name']=="")
{
$sql="update  pages set name='".$_POST['name']."'
						   ,description='".$_POST['description']."'
						   ,modified='".date('m-d-y')."'
						   where id='".$_GET['id']."'";
}
else
{
$sql="update  pages set name='".$_POST['name']."'
						   ,description='".$_POST['description']."'
						   ,image='".$_FILES['image']['name']."'
						   ,modified='".date('m-d-y')."'
						   where id='".$_GET['id']."'";
}						   
$my=mysql_query($sql);

?>
<script type="text/javascript">
window.location="listing.php";
</script>
<?php 
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
		<form action="" method="post" enctype="multipart/form-data">
		<table align="center" width="100%">
<tr>
		<td>Name</td>
		<td><input type="text" name="name" value="<?php echo $name?>"/><?php echo $error_name ?></td>
</tr>
<tr>
<td>description</td>
<td><textarea name="description" rows="15" cols="15"><?php echo $description ?></textarea><?php echo $error_description ?></td>
</tr>
<tr>
<td>New Image Upload</td>
<td><input type="file" name="image" /></td>
</tr>
<tr>
<td><input type="submit" name="save" value="save" /></td>
</tr>
</table></form>
</body>
</html>

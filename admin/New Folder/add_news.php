<?php require("connection.php");
include("acces.php");?>
<?php if(isset($_POST['save']))
{
$temp=true;
$tittle=$_POST['tittle'];
$description=$_POST['description']; 
if($tittle=="")
{
$temp=false;
$error_tittle="please enter your tittle";
}
if($description=="")
{
$temp=false;
$error_description="please enter your description";
}
if($temp==true)
{
$fileTmpLoc=$_FILES["image"]["tmp_name"];
$pathAndName="../news_image/".$_FILES["image"]["name"];
move_uploaded_file($fileTmpLoc,$pathAndName);

$sql="insert into news set tittle='".$_POST['tittle']."',description='".$_POST['description']."',image='".$_FILES['image']['name']."',status='1',created='".date('m-d-y')."'";
$my=mysql_query($sql);
$_SESSION['message']="your data successfully added";
?>
<script type="text/javascript">
window.location="news_listings.php";
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
		<td>Tittle</td>
		<td><input type="text" name="tittle" value="<?php echo $tittle?>"/><?php echo $error_tittle ?></td>
</tr>
<tr>
<td>description</td>
<td><textarea name="description" rows="15" cols="15"><?php echo $description ?></textarea><?php echo $error_description ?></td>
</tr>
<tr>
<td>Image Upload</td>
<td><input type="file" name="image" /></td>
</tr>
<tr>
<td><input type="submit" name="save" value="save" /></td>
</tr>
</table></form>
</body>
</html>

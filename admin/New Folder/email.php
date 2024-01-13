<?php require("connection.php");
$idd=$_GET['id'];
$qq="select * from contects where id='".$idd."'";
$bb=mysql_query($qq);
$fe=mysql_fetch_assoc($bb);
?>
<?php if(isset($_POST['send']))
{
$temp=true;
if($_POST['email']=="")
{
$temp=false;
$error_email="please enter to";
}
if($_POST['subject']=="")
{
$temp=false;
$error_subject="please enter subject";
}
if($_POST['message']=="")
{
$temp=false;
$error_message="please enter message";
}
if($temp==true)
{
mail(email,subject,message);
$_SESSION['message']="your mail successfully send";
?>
<script type="text/javascript">
window.location="contact_list.php";
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
		<form action="" method="post">
		<table align="center" width="100%">
<tr>
		<td>To</td>
		<td><input type="text" name="email" value="<?php echo $fe['email'];?>" /><?php echo $error_email ?></td>
</tr>
<tr>
		<td>subject</td>
		<td><input type="text" name="subject" value=""/><?php echo $error_subject ?></td>
</tr>
<tr>
		<td>message</td>
		<td><textarea name="message" rows="15" cols="15"></textarea><?php echo $error_message ?></td>
</tr>

<tr>
		<td><input type="submit" name="send" value="send" /></td>
</tr>
</form>
</body>
</html>

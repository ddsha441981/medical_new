<?php require("connection.php");
include("acces.php");
$id=$_GET['id'];
$sql="delete from banner_image where id='".$id."'";
mysql_query($sql);
$_SESSION['message']="Your Banner Images successfully Deleted";
?>
<script type="text/javascript">
window.location="banner_listings.php";
</script>
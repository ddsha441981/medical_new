<?php require("connection.php");
include("acces.php");
$id=$_GET['id'];
$dd="delete from ads where id='".$id."' ";
mysql_query($dd);
$_SESSION['message']="Your Ads successfully Deleted";
?>
<script type="text/javascript">
window.location="ads_listings.php";
</script>
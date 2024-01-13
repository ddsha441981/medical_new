<?php require("connection.php");
include("acces.php");
$id=$_GET['id'];
$delete="delete from news where id='".$id."'";
$gh=mysql_query($delete);
$_SESSION['message']="Your data successfully deleted";
?>
<script type="text/javascript">
window.location="news_listings.php";
</script>
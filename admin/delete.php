<?php require("connection.php");
include("acces.php");
$id=$_GET['id'];
$d="delete from contects where id='".$id."'";
$my=mysql_query($d);
$_SESSION['message']="your data successfully delete";
?>
<script type="text/javascript">
window.location="contacts_listings.php";
</script>
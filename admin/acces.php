<?php
require("connection.php");

if($_SESSION['id']=="")
{?>
<script type="text/javascript">
window.location="login.php";
</script>
<?php } ?>
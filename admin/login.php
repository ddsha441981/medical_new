<?php require("connection.php"); ?>
<span class="msg"><?php echo $_SESSION['message'];
$_SESSION['message']=""; ?></span>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Dashboard I Admin Panel</title>
	<link href="all_one.css" rel="stylesheet">
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>
<?php include("admin_header.php");?>
	 <!-- end of header bar -->
	
	<!-- end of secondary bar -->
	<!-- end of sidebar -->
	
	<section id="main" class="column">
		
		<article class="module width_full">

		
		<!-- end of stats article -->
<?php 
if($_SESSION['id']!="")
{
?>
<script type="text/javascript">
window.location="index.php";
</script>
<?php
}
if(isset($_POST['login']))
{
$temp=true;
$user_name=trim($_POST['user_name']);
$password=trim($_POST['password']);
if($user_name=="")
{
$temp=false;
$error_user_name="please enter your user_name";
}
if($password=="")
{
$temp=false;
$error_password="please enter your password";
}
if($temp==true)
{
$sql="select * from admins where user_name='".$_POST['user_name']."' and password='".$_POST['password']."'";
$m=mysql_query($sql);
$n=mysql_fetch_assoc($m);
$gh=mysql_num_rows($m);
if($gh>0)
{
$_SESSION['id']=$n['id'];
$_SESSION['message']="You are successfully Login";
?>
<script type="text/javascript">
window.location="index.php";
</script>
<?php
 }
else
{?>
<span class="error"><?php $c = "your email and password donot match found";
}?></span><?php 

}
}
?>
<title>Login</title>

<body>
		<form action="" method="post">
		<table align="center" width="100%" class="button">
		<tr>
		<td>
		<img src="../images/1353318438_user_login.png" width="128" height="100">
		</td>
		<td>
		<table>
<tr> <span class="error"><?php echo $c ?></span>
		<td>user_name</td>
		<td><input type="text" name="user_name" value="" /><br><span class="error"><?php echo $error_user_name ?></span></td>
</tr>
<tr>
		<td>password</td>
		<td><input type="password" name="password" class="pass" value=""/><br><span class="error"><?php echo $error_password ?></span></td>
</tr>
<tr>
		<td><input type="submit" name="login" value="login" /></td>
</tr>
		</table></td>
		</tr></table>
		</form>
<div class="clear"></div>
		
		<!-- end of post new article -->
		
		
		
		<!-- end of styles article -->
		<div class="spacer"></div>
	</section>


</body>

</html>
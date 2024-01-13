<?php require("connection.php");
		include("acces.php");?>
		<?php $id=$_GET['id'];
		$sq="select * from confi where id='".$id."'";
		$my=mysql_query($sq);
		$fetch=mysql_fetch_assoc($my);?>
		
		<?php $phone=addslashes($fetch['phone']);
		$phone2=addslashes($fetch['phone2']);
		$email=addslashes($fetch['email']);
		$site_name=addslashes($fetch['site_name']);
		$tiwtter=$fetch['tiwtter'];
		$rediff=$fetch['rediff'];
		$facebook=$fetch['facebook'];?>
		<?php if(isset($_POST['save']))
		{
		$temp=true;
		$phone=$_POST['phone'];
		$phone2=$_POST['phone2'];
		$email=$_POST['email'];
		$site_name=$_POST['site_name'];
		$tiwtter=$_POST['tiwtter'];
		$rediff=$_POST['rediff'];
		$facebook=$_POST['facebook'];
		if($phone=="")
		{
		$temp=false;
		$error_phone="please enter your phone no.";
		}
		if($phone2=="")
		{
		$temp=false;
		$error_phone2="please enter your phone2 no.";
		}
		if($email=="")
		{
		$temp=false;
		$error_email="please enter your email";
		}
		if($site_name=="")
		{
		$temp=false;
		$error_site_name="please enter your site name";
		}
		if($tiwtter=="")
		{
		$temp=false;
		$error_tiwtter="please enter Tiwtter Url";
		}
		if($rediff=="")
		{
		$temp=false;
		$error_rediff="please enter Rediff Url";
		}
		if($facebook=="")
		{
		$temp=false;
		$error_facebook="please enter Facebook Url";
		}
		if($temp==true)
		{
		$fileTmpLoc=$_FILES["image"]["tmp_name"];
		$pathAndName="../confi_image/".$_FILES["image"]["name"];
		move_uploaded_file($fileTmpLoc,$pathAndName);
		
		$fileTmpLoc_logo=$_FILES["logo"]["tmp_name"];
		$pathAndName_logo="../confi_image/".$_FILES["logo"]["name"];
		move_uploaded_file($fileTmpLoc_logo,$pathAndName_logo);
		
		if(($_FILES['image']['name']=="")&&($_FILES['logo']['name']==""))
		{
		$sql="update confi set phone='".$_POST['phone']."',phone2='".$_POST['phone2']."',email='".$_POST['email']."',site_name='".$_POST['site_name']."',tiwtter='".$_POST['tiwtter']."',rediff='".$_POST['rediff']."',facebook='".$_POST['facebook']."'where id='".$_GET['id']."'";
		
		}
		else if(($_FILES['image']['name']!="")&&($_FILES['logo']['name']!=""))
		{
		$sql="update confi set image='".$_FILES['image']['name']."',logo='".$_FILES['logo']['name']."',phone='".$_POST['phone']."',phone2='".$_POST['phone2']."',email='".$_POST['email']."',site_name='".$_POST['site_name']."',tiwtter='".$_POST['tiwtter']."',rediff='".$_POST['rediff']."',facebook='".$_POST['facebook']."'where id='".$_GET['id']."'";	
		
		}
		else if(($_FILES['image']['name']!="")&&($_FILES['logo']['name']==""))
		{
		$sql="update confi set image='".$_FILES['image']['name']."',phone='".$_POST['phone']."',phone2='".$_POST['phone2']."',email='".$_POST['email']."',site_name='".$_POST['site_name']."',tiwtter='".$_POST['tiwtter']."',rediff='".$_POST['rediff']."',facebook='".$_POST['facebook']."'where id='".$_GET['id']."'";	
		
		}
		else if(($_FILES['image']['name']=="")&&($_FILES['logo']['name']!=""))
		{
		$sql="update confi set logo='".$_FILES['logo']['name']."',phone='".$_POST['phone']."',phone2='".$_POST['phone2']."',email='".$_POST['email']."',site_name='".$_POST['site_name']."',tiwtter='".$_POST['tiwtter']."',rediff='".$_POST['rediff']."',facebook='".$_POST['facebook']."'where id='".$_GET['id']."'";
	
		}
			 mysql_query($sql);
		  $_SESSION['message']="Your data sucessfully Updated";?>
		<script type="text/javascript">
		window.location="confi_listings.php";
		</script>
		<?php
		}
		}?>
		
<?php include("acces.php");?>		
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
	<?php include("admin_left.php");?>
	<!-- end of sidebar -->
	
	<section id="main" class="column">
		
		
		
		<!-- end of stats article -->
	
		<form action="" method="post" enctype="multipart/form-data">
		<table align="center" width="100%">
<tr>
		<td>Image Upload</td>
		<td><input type="file" name="image"><img src="../confi_image/<?php echo $fetch['image'];?>" width="50px" height="50px" /></td>
</tr>
<tr>
		<td>New Logo Image Upload</td>
		<td><input type="file" name="logo"><img src="../confi_image/<?php echo $fetch['logo'];?>" width="50px" height="50px" /></td>
</tr>
<tr>
		<td>Phone No.1</td>
		<td><input type="text" name="phone" value="<?php echo $phone?>"><span class="error>"<?php echo $error_phone?></span></td>
</tr>
<tr>
		<td>Phone No.2</td>
		<td><input type="text" name="phone2" value="<?php echo $phone2 ?>"><span class="error"><?php echo $error_phone2 ?></span></td>
</tr>
<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $email ?>"><span class="error"><?php echo $error_email ?></span></td>
</tr>
<tr>
		<td>Site Name</td>
		<td><input type="text" name="site_name" value="<?php echo $site_name?>"><span class="error"><?php echo $error_site_name?></span></td>
</tr>
<tr>
		<td>tiwtter</td>
		<td><input type="text" name="tiwtter" value="<?php echo $tiwtter ?>"><span class="error"><?php echo $error_tiwtter?></span></td>
</tr>
<tr>
		<td>rediff</td>
		<td><input type="text" name="rediff" value="<?php echo $rediff ?>"><span class="error"><?php echo $error_rediff ?></span></td>
</tr>
<tr>
		<td>facebook</td>
		<td><input type="text" name="facebook" value="<?php echo $facebook ?>"><span class="error"><?php echo $error_facebook ?></span></td>
</tr>
<tr>	
		<td><input type="submit" name="save" value="save"></td>
</tr>
</table>
</form>
<div class="clear"></div>
		
		<!-- end of post new article -->
		
		
		
		<!-- end of styles article -->
		<div class="spacer"></div>
	</section>


</body>

</html>
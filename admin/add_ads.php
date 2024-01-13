<?php error_reporting(0); ?>
		<?php require("connection.php");
		include("acces.php");?>		
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
		
		<?php if(isset($_POST['upload']))
		{
		$temp=true;
		$url=$_POST['url'];
		if($url=="")
		{
		$temp=false;
		$error_url="please enter image url";
		}
		if($temp==true)
		{
		$fileTmpLoc=$_FILES["image"]["tmp_name"];
		$pathAndName="../ads_image/".$_FILES["image"]["name"];
		move_uploaded_file($fileTmpLoc,$pathAndName);
		$sql="insert into ads set image='".$_FILES['image']['name']."',url='".$_POST['url']."' ";
		$my=mysql_query($sql);
		$_SESSION['message']="Your Ads successfully Added";
		?>
		<script type="text/javascript">
		window.location="ads_listings.php";
		</script>
		<?php 
		}
		}
		?>
		<form action="" method="post" enctype="multipart/form-data">
		<table align="center" width="100%">
<tr>	
		<td>Ads Upload</td>
		<td><input type="file" name="image"></td>
</tr>
<tr>
		<td>Ads_Image_Url</td>
		<td><input type="text" name="url" value="<?php echo $url?>" /><span class="error"><?php echo $error_url?></span></td>
</tr>
<tr>
		<td><input type="submit" name="upload" value="upload"></td>
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
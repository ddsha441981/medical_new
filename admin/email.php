<?php require("connection.php");
include("acces.php");		
$idd=$_GET['id'];
$qq="select * from contects where id='".$idd."'";
$bb=mysql_query($qq);
$fe=mysql_fetch_assoc($bb);
$email=$fe['email'];
?>
<?php if(isset($_POST['Publish']))
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
	<form action="" method="post" enctype="multipart/form-data">
	<section id="main" class="column">
		
		
		
		<!-- end of stats article -->
		
		<![endif]-->
<article class="module width_full">
			<header><h3>Email Updated</h3></header>
				<div class="module_content">
				<fieldset>
					<label>To</label>
			<input type="text" name="email" value="<?php echo $email?>"/><span class="validation"><?php echo $error_email ?></span>
						</fieldset>
						
						<fieldset>
					<label>Subject</label>
			<input type="text" name="subject" value=""/><span class="validation"><?php echo $error_subject ?></span>
						</fieldset>
						
				<fieldset>
							<label>Message</label>
	<textarea name="message" rows="15" cols="15"></textarea><span class="validation"><?php echo $error_message?></span>
				</fieldset>
						<fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Category</label>
							<select style="width:92%;">
								<option>Articles</option>
								<option>Tutorials</option>
								<option>Freebies</option>
							</select>
						</fieldset>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Tags</label>
							<input type="text" style="width:92%;">
						</fieldset><div class="clear">
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					<select>
						<option>Draft</option>
						<option>Published</option>
					</select>
					<input type="submit" name="Publish" value="Publish" class="alt_btn"/>
					<input type="submit" value="Reset"/>
				</div>
			</footer></div>
		</article>
		<!-- end of messages article -->
		
		<div class="clear"></div>
		
		<!-- end of post new article -->
		
		
		
		<!-- end of styles article -->
		<div class="spacer"></div>
	</section>

</form>
</body>

</html>

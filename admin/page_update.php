<?php require("connection.php");
include("acces.php");
 $id=$_GET['id'];
$query="select * from pages where id='".$id."' ";
$data=mysql_query($query);
$fetch=mysql_fetch_assoc($data);
$name=$fetch['name'];
$description=$fetch['description'];
$status=$fetch['status'];
$created=$fetch['created'];

?>
<?php if(isset($_POST['Publish']))
{
$temp=true;
$name=$_POST['name'];
$description=$_POST['description']; 
if($name=="")
{
$temp=false;
$error_name="please enter your name";
}
if($description=="")
{
$temp=false;
$error_description="please enter your description";
}
if($temp==true)
{
$fileTmpLoc=$_FILES["image"]["tmp_name"];
$pathAndName="../page_image/".$_FILES["image"]["name"];
move_uploaded_file($fileTmpLoc,$pathAndName);
if($_FILES['image']['name']=="")
{
$sql="update  pages set name='".$_POST['name']."'
						   ,description='".$_POST['description']."'
						   ,modified='".date('m-d-y')."'
						   where id='".$_GET['id']."'";
}
else
{
$sql="update  pages set name='".$_POST['name']."'
						   ,description='".$_POST['description']."'
						   ,image='".$_FILES['image']['name']."'
						   ,modified='".date('m-d-y')."'
						   where id='".$_GET['id']."'";
}						   
$my=mysql_query($sql);
$_SESSION['message']="Your data sucessfully Updated";
?>
<script type="text/javascript">
window.location="listing.php";
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
			<header><h3>Page_Update</h3></header>
				<div class="module_content">
				<fieldset>
					<label>Name</label>
			<input type="text" name="name" value="<?php echo $name?>"/><span class="validation"><?php echo $error_name ?></span>
						</fieldset>
				<fieldset>
							<label>description</label>
	<textarea name="description" rows="15" cols="15"><?php echo $description ?></textarea><span class="validation"><?php echo $error_description ?></span>
				</fieldset>
						
						<div class="clear">
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>please Image Upload</label>
							<input type="file" name="image"style="width:92%;">
						</fieldset><div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
					
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
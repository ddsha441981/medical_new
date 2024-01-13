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
	<?php 
$ganesh="select * from contects";
$my=mysql_query($ganesh);?>
<span class="msg"><?php echo $_SESSION['message'];
$_SESSION['message']="";
?></span>
	<section id="main" class="column">
		
		
		
		<!-- end of stats article -->
		
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Details Of Contacts</h3>
		<ul class="tabs">
   			<li><a href="#tab1">Posts</a></li>
    		<li><a href="#tab2">Comments</a></li>
		</ul>
		</header>
		
		
<div class="tab_container">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Company_Name</th>
					<th>Company_Url</th>
					<th>Delete</th>
					<th>Email</th>
					
				</tr> 
			</thead> 
			<tbody> 
				<tr>  <?php while($fetch=mysql_fetch_assoc($my)){?>
				
					<td><?php echo $name=$fetch['name'];?></td>
					<td><?php echo $email=$fetch['email'];?></td>
					<td><?php echo $phone=$fetch['phone'];?></td>
					<td><?php echo $company_name=$fetch['company_name'];?></td>
					<td><?php echo $company_url=$fetch['company_url'];?></td>
					<td><?php echo $message=$fetch['message'];?></td>
					<td><a href="delete.php?id=<?php echo $fetch['id'];?>">delete</a></td>
					<td><a href="email.php?id=<?php echo $fetch['id'];?>">email</a></td>
    			 </tr>
				<tr><td colspan="8"><hr />
		</td></tr>
		
		<?php 
		}
		?> </tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
			<!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
		</article>
		
		
		<!-- end of messages article -->
		
		<div class="clear"></div>
		
		<!-- end of post new article -->
		
		
		
		<!-- end of styles article -->
		<div class="spacer"></div>
	</section>


</body>

</html>

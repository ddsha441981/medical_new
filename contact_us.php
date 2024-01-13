<?php require("connection.php"); ?><span class="msg"><?php echo $_SESSION['message'];
		$_SESSION['message']="";?></span>
<?php if(isset($_POST['send']))
		{
		
		$temp=true;
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$company_name=$_POST['company_name'];
		$company_url=$_POST['company_url'];
		$message=$_POST['message'];
		if($name=="")
		{
		$temp=false;
		$error_name="please enter your name";
		}
		if($email=="")
		{
		$temp=false;
		$error_email="please enter your email";
		}
		if($phone=="")
		{
		$temp=false;
		$error_phone="please enter your phone no.";
		}
		if($company_name=="")
		{
		$temp=false;
		$error_company_name="please enter your company_name";
		}
		if($company_url=="")
		{
		$temp=false;
		$error_company_url="please enter your company name";
		}
		if($message=="")
		{
		$temp=false;
		$error_message="plese enter your message";
		}
		if($temp==true)
		{
		$sql="insert into contects set name='".$_POST['name']."'
												,email='".$_POST['email']."'
												,phone='".$_POST['phone']."'
												,company_name='".$_POST['company_name']."'
												,company_url='".$_POST['company_url']."'
												,message='".$_POST['message']."' ";
		$query=mysql_query($sql);
		$_SESSION['message']="your data successfully sent";?>
		<script type="text/javascript">
		window.location="contact_us.php";
		</script>
		
		<?php 
		}
		}?>
			
		
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<link href="admin/all_one.css" rel="stylesheet" />
<head>




<titleWelcome to patient Rights</title>



	<link href="all_one.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="css/style.css" />

<link rel="stylesheet" type="text/css" href="css/style_cf.css" />

<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" media="screen" />



 

<script type='text/javascript' src='js/jquery.js?ver=1.4.2'></script>

<script type="text/javascript" src="js/jquery-ui-1.5.2.packed.js"></script>

<script type="text/javascript" src="js/jquery.easing.1.1.1.js"></script>

<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>

<script type="text/javascript" src="js/jquery.validate.js"></script>

<script type="text/javascript" src="js/jquery.form.js"></script>

<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>

<script type="text/javascript" src="js/cufon.js"></script>   

<script type="text/javascript" src="js/anivers_400.font.js"></script>   

<script type="text/javascript" src="js/script.js"></script>



</head>

<body>



 

<div id="container">

<!-- header -->

<?php include("header.php");?>

<!-- /header -->





<div id="container1">

<div id="container2">

<div id="container3">    

    <div class="page_curv_top png"></div>

    <div class="content_con png">

<div id="slider_con">
                <div id="slider_area">

			
					    
			    
			
						
			<!-- slide -->
			<div class="slide" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 4; opacity: 0.906; width: 940px; height: 350px; ">
			    <!-- slider background image -->
								    <a href="#" title="">						
											<img src="images/nurse-instructions.jpg" alt="" class="png preload" style="opacity: 1; ">
											    
				    </a> 
			    			</div>
		
			<div class="slide" style="position: absolute; top: 0px; left: 0px; display: none; z-index: 3; opacity: 0; width: 940px; height: 350px; ">
			    <!-- slider background image -->
								    <a href="#" title="">						
											<img src="images/timthumb1.png" alt="" class="png preload" style="opacity: 1; ">
											    
				    </a> 
							    <!-- /slider background image -->					     
			
			     			</div>
			<!--/ slide -->
			

						
				
	
					    
			    
			
						
			<!-- slide -->
			<div class="slide" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 3; opacity: 0.09199999999999997; width: 940px; height: 350px; ">
			    <!-- slider background image -->
								    <a href="#" title="">						
											<img src="images/timthumb2.png" alt="" class="png preload" style="opacity: 1; ">
											    
				    </a> 
							  
			    			</div>
			<!--/ slide -->
			

						
				
	   

                </div>
                
                <!-- slider on/off icons -->
                <div id="numbers"><a href="#" title="" class="activeSlide"><img src="images/pixel.gif" width="14" heigth="14"></a><a href="#" title="" class=""><img src="images/pixel.gif" width="14" heigth="14"></a><a href="#" title="" class=""><img src="images/pixel.gif" width="14" heigth="14"></a></div>
                <div class="slider_curv png"></div>
        </div>
        <div class="content_con2">

            <!-- left side content -->

            <div class="content">                
<div class="box single">

					 

					    					    <!-- box title-->
												<?php $sql="select * from pages where id='18'";
						$query=mysql_query($sql);
						$fetch=mysql_fetch_assoc($query);?>

					    					    <h3><a href="#" title="" ><?php echo $fetch['name'];?></a></h3>

			   			        

						<p>
						
		<form action="" method="post">
		
		<ul>
						<li><label for="name" class="color">Your name: (*)</label><br />
												
						<input name="name" label="" class="required" type="text"/><span class="validation"><?php echo $error_name?></span>				</li>
						
						<li><label for="email" class="color">Your Email: (*)</label><br />
						<input name="email" label="" class="required"  type="text"/><span class="validation"><?php echo $error_email ?></span>						 </li>
						
						<li><label for="phone" class="color">Phone Number: (*) </label><br />
					<input name="phone" label="" class="required"  type="text"/><span class="validation"><?php echo $error_phone ?></span>	 </li>
						
						<li><label for="company_name" class="color">Company Name: </label><br />
							<input name="company_name" label="" id="company_name" type="text"/>							</li>
						<li><label for="company_url" class="color">Company URL: </label><br />
						<input name="company_url" label="" type="text" />						 </li>
						<li><label for="message" class="color">Your message: (*)</label><br />
					<textarea name="message" rows="8" cols="40" label="" class="ta2"></textarea>					<span class="validation"class="color"><?php echo $error_message ?></span>	</li>
						<li>
					
							
							<input type="submit" class="button" name="send" value="send"  /></li>
					</ul>
		</form>
</p>	

   </div>            <!-- / left side content -->

 	
	<div class="clear"></div>		

		<div class="clear"></div>

            </div></div></div>

            <!-- / side bar -->
			<?php $s="select * from pages where id='27'";
			$quer=mysql_query($s);
						$fetc=mysql_fetch_assoc($quer);?>				        

					    					    <h4><a href="#" title="" ><?php echo $fetc['name'];?></a></h4>			<p><?php echo $fetc['description'];?></p>	
												 
												 
												 <h4>Google Map</h4>						

					    					    					    

					    					    

						    			        

						<p> <iframe width="250" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=dcm+ajmer+road+jaipur&amp;aq=&amp;sll=26.852254,75.803604&amp;sspn=0.222989,0.287704&amp;ie=UTF8&amp;t=m&amp;ll=26.852254,75.803604&amp;spn=0.222989,0.287704&amp;output=embed"></iframe><br /><small><a href="http://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=dcm+ajmer+road+jaipur&amp;aq=&amp;sll=26.852254,75.803604&amp;sspn=0.222989,0.287704&amp;ie=UTF8&amp;t=m&amp;ll=26.852254,75.803604&amp;spn=0.222989,0.287704" style="color:#0000FF;text-align:left">View Larger Map</a></small></p>	
			
	    	    

            <div class="clear"></div>

        </div>	



</div>

</div>

</div>                                          

</div>


<!-- footer -->

	
	<?php include("footer.php");?>

<!-- /footer -->

</div>

</body>

</html>
<!-- Dynamic page generated in 1.437 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2012-07-14 03:17:53 -->
<!-- super cache -->		
		
		
		
		
		
		
		
		

		
	
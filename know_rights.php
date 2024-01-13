<?php require("connection.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>




<titleWelcome to patient Rights</title>




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

					    

	    



						

		



				<!-- box -->

					<div class="box single">

					 

					    					    <!-- box title-->
												<?php $sql="select * from pages where id='11'";
						$query=mysql_query($sql);
						$fetch=mysql_fetch_assoc($query);?>

					    					    <h3><a href="#" title="" ><?php echo $fetch['name']; ?></a></h3>

					    					    					    

					    					    

						     

						    <div class="imgarea"><a href="#" title="" ><img src="page_image/<?php  echo $fetch['image'];?>" width="300px" height="300px" alt="" class="alignleft featured_image preload png" /></a></div>

						    					        

						<p>
						
						<?php echo substr($fetch['description'],0,500);?>   
</p>	

								

						<a href="page_description.php?id=<?php echo $fetch['id'];?>" class="read_more" title="" >learn more</a>

											    					</div>

					

				<!-- /box -->

	

	

				    

	    



						

		



				<!-- box -->

					

					

				<!-- /box -->

	

	

				    

	    



						

		



				<!-- box -->

					

					

				<!-- /box -->

	

	

	  

            </div>            <!-- / left side content -->

            

	                <!-- side bar -->
					<?php include("achive.php");?>

          

            <!-- / side bar -->

	    	    

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
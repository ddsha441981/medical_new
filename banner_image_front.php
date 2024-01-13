<?php require("connection.php");?>
<div id="slider_con">
                <div id="slider_area">

			
					    
			    
			
						
			<!-- slide --><?php $sql="select * from banner_image";
			$mysql=mysql_query($sql);
			while($fetch=mysql_fetch_assoc($mysql)) {?>
			<div class="slide" style="position: absolute; top: 0px; left: 0px; display: block; z-index: 4; opacity: 0.906; width: 940px; height: 350px; ">
			    <!-- slider background image -->
								    <a href="#" title="">						
											<img src="banner_image/<?php echo $fetch['image'];?>" alt="" class="png preload" style="opacity: 1; ">
											    
				    </a> 
			    			</div><?php }?>
		

                </div>
                
                <!-- slider on/off icons -->
                <div id="numbers"><a href="#" title="" class="activeSlide"><img src="images/pixel.gif" width="14" heigth="14"></a><a href="#" title="" class=""><img src="images/pixel.gif" width="14" heigth="14"></a><a href="#" title="" class=""><img src="images/pixel.gif" width="14" heigth="14"></a></div>
                <div class="slider_curv png"></div>
        </div>
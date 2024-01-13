<div id="footer">

            <div class="footer_con"> <div class="footer_con2">

                <!-- copyright text -->

                <div class="part1">

                      <?php $sql="select * from confi";
		$mm=mysql_query($sql);
		$fe=mysql_fetch_assoc($mm);?>   
		<?php echo $fe['site_name'];?>               </div>

                <!-- social media icons -->

                <div class="part2">

				<!-- social media icons -->
				

				 

									<a href="<?php echo $fe['tiwtter'];?>" title="Tiwtter Login" target="_blank"><img src="images/twitter.png" alt="" /></a>

										<a href="<?php echo $fe['rediff'];?>" title="Rediff Login" target="_blank"><img src="images/rss.png" alt="" /></a>

										<a href="<?php echo $fe['facebook'];?>"title="Facebook Login" target="_blank"><img src="images/facebook.png" alt="" /></a>

									 

				<!-- / social media icons -->

				

                </div>

                <!-- / social media icons -->

                             

                <!-- links -->

                <div class="part3">

				

								

				<a  href="career.php" title="Career">Career</a> 

				| <a  href="support.php" title="Support">Support</a> 

				| <a  href="about_us.php" title="About Us">About Us</a> 

				| <a  href="contact_us.php" title="Contact Us">Contact Us</a> 

							 										    

				   

                </div>

           </div></div>

	</div>
<?php include("connection.php");?>
<div id="header">

    <!-- logo -->

            <div id="logo">
			<?php $sql="select * from confi";
			$qq=mysql_query($sql);
			$fetch=mysql_fetch_assoc($qq); ?>

		<a href="#" title="patient Rights"><img src="confi_image/<?php echo $fetch['logo'];?>" width="400px" height="120px" alt="#" class="png" /></a>		

	    </div>

    <!-- /logo -->



    <!-- header right -->

            <div id="header_right">

		<!-- navigation -->
        <div class="clear"></div>

			<div id="navigation" style="margin-top:20px;">

					<div id="dropdown_menu" class="navigation">

					<ul class="navigation" style="background:url(images/navi-img.png) repeat-x center center; height:35px; border-radius:5px;">

						<li  class="current_page_item" ><a href="index.php" title="Home">HOME</a></li> 
						        <li class="page_item page-item-5"><a href="about_us.php" title="About Us">About Us</a></li>
								<li><a href="ask_expert.php" title="ask the expert">ask the expert</a></li>
								<li><a href="news_event.php" title="news & event">news & event</a></li>
								<li><a href="know_rights.php" title="Know your rights">Know your rights</a></li>
								<li><a href="know_res.php" title="Know your responsibilities">Know your responsibilities</a></li>
                                <li class="page_item page-item-9"><a href="contact_us.php" title="contact us">contact us</a></li>
					 </ul>

					</div>


			</div>

		<!-- / navigation  -->

            </div>

    <!-- /header right -->

</div>
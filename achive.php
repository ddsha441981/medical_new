<?php require("connection.php");?>
<div class="sidebar"><div class="sidebars1"><div class="sidebars2">

	   

	   

		 
 
	<!-- news box -->
 
		<div class="box small">

			<!-- box title-->
						<h4>Archives</h4>						
			
			<div class="textarea"><br />
				<!-- box title-->


		
		 

					    <!-- text-->
						<?php $sql="select * from news where status='1'";
						$rr=mysql_query($sql);
						while($ff=mysql_fetch_assoc($rr))
						{
						?><h6><?php echo $ff['tittle'];?></h6>
			    <span class="news_date"><b><?php echo $ff['modified'];?></b></span><br /><?php echo substr($ff['description'],0,20);?>
			<a href="news_description.php?id=<?php echo $ff['id'];?>">read more</a>
			    <br />
			    <div class="news_line"></div>
					    <!-- text--><?php  }?>
			   
		</div>
		</div>
	<!-- /news box -->
	<?php $sl="select * from ads";
	$fef=mysql_query($sl);?><div class="box small">			<table><tr>
	<?php $i=1;?>
	<?php while($fe=mysql_fetch_assoc($fef)){ ?>
	<?php $i++;
	if($i%2==0)
	{
	?>
	</tr><tr>
	<?php
	}?>
	<td><ul>
<li><a href="<?php echo $fe['url'];?>" title="Samsung Mobile" target="_blank"><img src="ads_image/<?php echo $fe['image'];?>" width="130px" height="59px" alt="" class="preload" /></a></li></ul></td>


<div class="clear_space"></div>

</div>
		</div><div class="clear"></div>		

		<div class="clear"></div><?php }?></tr></table>

            </div></div></div>
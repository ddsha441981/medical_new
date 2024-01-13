<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<aside id="sidebar" class="column">
		<hr/>
		<h3>Pages</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="add_page.php">Add_Pages </a></li>
			<li class="icn_edit_article"><a href="listing.php">Listing_Pages</a></li>
		</ul>
		<h3>News</h3>
		<ul class="toggle">
			<li class="icn_add_user"><a href="add_news.php">Add_New</a></li>
			<li class="icn_view_users"><a href="news_listings.php">News_Listing</a></li>
		</ul>
		<h3>Banner_Images</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="add_banner_image.php">Add_Banner_Images</a></li>
			<li class="icn_photo"><a href="banner_listings.php">Banner_Listing</a></li>
		</ul>
		<h3>Contacts</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="contacts_listings.php">Contacts</a></li>
		</ul>
		<h3>Addvertisments</h3>
		<ul class="toggle">
			<li class="icn_folder"><a href="add_ads.php">Add_Ads</a></li>
			<li class="icn_photo"><a href="ads_listings.php">Ads_listing</a></li>
		</ul>
		<h3>Confi or Log Out</h3>
		<ul class="toggle">
			<li class="icn_settings"><a href="confi_listings.php">Confi_Listing</a></li>
			<li class="icn_jump_back"><a href="logout.php">Logout</a></li>
		</ul>
		
		<footer><?php $sql="select * from confi";
		$mm=mysql_query($sql);
		$fe=mysql_fetch_assoc($mm);?>
			<hr />
			<p><strong><a href="<?php echo $fe['site_name'];?>"target="_blank"></a></strong></p>
		</footer>
	</aside>
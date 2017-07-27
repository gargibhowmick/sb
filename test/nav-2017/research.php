<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<!-- <inc> -->
		<?php
			$root = '/user/far-beyond/www';

			$this_dir = $_SERVER['REQUEST_URI'];
			$dev_dir  = '/development/sb/';
			$prod_dir = '/sb/';
			$is_dev = strpos($this_dir,'/development/');
			if($_SERVER['SERVER_NAME'] == 'localhost') {
				$inc = $_SERVER['DOCUMENT_ROOT'] . $prod_dir . "inc/inc.php";
			} else if($is_dev !== false) {
				$inc = $root . $dev_dir . "inc/inc.php";
			} else {
				$inc = $root . $prod_dir . "inc/inc.php";
			}
			include($inc);
		?>
	<!-- </inc> -->
	<!--site variables-->
		<?php
			$page_type       = 'second-level';
			$second_level    = 'site-directory';
			$page_title_sub  = 'Research';
			$page_title_full = $page_title . (isset($page_title_sub) && $page_title_sub!='' ? ' | ' . $page_title_sub : '');

		    $og_title        = 'Stony Brook ' . $page_title_sub;
		    $og_description  = 'Stony Brook has been one of only 94 institutions in the country to be designated a "Very High Research University" by the Carnegie Foundation. Our faculty have been responsible for more than 2,100 inventions and 600 U.S. patents. With more than 70 academic departments, Stony Brook is among the top 40 institutions funded by the National Science Foundation, and expenditures on organized research, from external and internal sponsors, are at nearly $170 million.';
		    $og_url          = 'http://www.stonybrook.edu/research/';
		    $main_nav_selected_tab = 6;

		    $page_to_top_link = true;

		    $page_footerbar   = true;
		    $page_footer      = true;

		    $carousel 		  = false;

		    $page_scroll        = true;
		    $page_scroll_el     = 'logo';     //Options are audience-nav, logo, main-nav, bottom
		    $page_scroll_time   = 150;      //Time for scroll function in milliseconds
		    $page_scroll_mobile = true;  //Define whether the scroll-on-load occurs only on mobile. False by default, meaning scroll will happen on desktop and mobile.

		    $html_dom_parser = true;

		    $site_breadcrumbs = false;

		    $mega_nav = true;
		    $mega_nav_ou = true;
		?>

	<head>
		<?php 
			$file  = $header;
			include($path . $file);
		?>
	</head>
    <body>
        <!-- <global> -->
			<?php 
				$file  = $global;
				include($path . $file);
			?>
		<!-- </global> -->

        <div class="sbu-wrapper clearfix">
        	<div class="sbu-sub-wrapper">

		        <div class="main-nav-container clearfix">
		        	<!-- <site-nav> -->
						<?php 
							//include($path . $site_nav);
							include($path . "site-nav-2017.php");
						?>
					<!-- </site-nav> -->
		        </div>
		        <div class="main-container">
		            <div class="main clearfix">

		                <!-- <content> -->
							<?php 
								$file = "{$second_level}/{$second_level}.php";
								//include($pathForContent . $content . $secLv . $file);
								include('/user/commcms/www/_second-level/research/index.php');
							?>
						<!-- </content> -->

		            </div> <!-- .main -->
		        </div> <!-- .main-container -->
		        <!-- <div.footer-container> -->
		        	<?php if($page_footer) {
						$file = "footers/sbu-footer.php";
						include($path . $file);
					} ?>
					<?php if($page_footerbar) {
						$file = "footerbar.php";
						include($path . $file);
					} ?>
				<!-- </div.footer-container> -->
<!--
				<div class="left-fixed-sidebar-container">

				</div>

				<div class="right-fixed-sidebar-container">

				</div>
-->
				<!-- <to-top> -->
					<?php if($page_to_top_link) {
						$file = "to-top.php";
						include($path . $file);
					} ?>
				<!-- </to-top> -->

	        </div><!-- .sbu-sub-wrapper -->
	    </div><!-- .sbu-wrapper -->

	    <!-- <scripts> -->
			<?php 
				$file = "footer-scripts-ou-2017.php";
				include($path . $file);
			?>
		<!-- </scripts> -->

		<!-- <googleanalytics> -->
			<?php 
				$file = "site-analytics.php";
				include($path . $file); 
			?>
		<!-- </googleanalytics> -->
    </body>
</html>
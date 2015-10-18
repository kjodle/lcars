<?php if(!defined('IN_GS')){ die('you cannot load this page directly.'); }
/****************************************************
*
* @File: 		template.php
* @Package:		GetSimple
* @Action:		LCARS-Next-Gen theme for the GetSimple CMS
*
*****************************************************/
?>
<!doctype html>
<html lang=en>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title><?php get_page_clean_title(); ?> - <?php get_site_name(); ?></title>
	<?php get_header(); ?>
	<meta name="robots" content="index, follow" />
	<link rel="icon" href="<?php get_site_url(); ?>favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php get_site_url(); ?>favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" media="screen" href="<?php get_theme_url(); ?>/css/style.css" />
	<link rel="stylesheet" type="text/css" media="print" href="<?php get_theme_url(); ?>/css/print.css" />
	<meta name="keywords" content="<?php get_page_meta_keywords(); ?>" />
	<meta name="description" content="<?php get_page_meta_desc(); ?>" />
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<?php get_header(); ?>
	<!-- Required for some plugins to work; triggers theme header hooks as of GS 3.0. -->
</head>

<body id="<?php get_page_slug(); ?>">

<!-- container -->
<div id="container">

	<!-- header -->
	<div id="header">
	<h1><a href="<?php get_site_url(); ?>"><?php get_site_name(); ?></a></h1>
	<h2><?php get_component('tagline'); ?></h2>
	</div>
	<!-- end header -->
	
	<!--main menu -->
	<div id="nav">
		<ul>
			<?php get_navigation(return_page_slug()); ?>
		</ul>
	<div class="clear"></div>
	</div>
	<!--end main menu -->

	<!--content -->
	<div id="content">
		<h2><?php get_page_title(); ?></h2>
		<?php get_page_content(); ?> 
		<p class="meta"> Published on stardate&nbsp;<?php get_page_date('Y.m.d'); ?></p>
		<p class="printonly url"><b>URL for this page:</b> <?php get_page_url(); ?></p>
	</div>
	<!--end content -->
	
	<!--sidebar -->
	<div id="sidebar">
		<?php get_component('sidebar');	?>
		<?php if (function_exists('my_function')) {echo my_function();} else {echo $er;}?>
	</div>
	<!--end sidebar -->

	<!--sidebar2 -->
	<div id="sidebar2">
		<?php get_component('sidebar2');	?>
	</div>
	<!--end sidebar2 -->

<div class="clear"></div>

	<!--footer -->
	<div  id="wrapper_footer">
		<div id="footer">
			<div class="left"><?php get_site_name(); ?> © <?php echo date('Y'); ?> | </div>
			<div class="left"><a href="<?php get_site_url(); ?>admin/">Admin</a></div>
			<div id="credits" class="right">
				<p><?php get_site_credits(); ?>&nbsp;LCARS-Next-Gen Theme by <a href="http://www.kjodle.net/">Kenneth John Odle</a></p>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<!--end footer -->


	<?php get_footer(); ?>
	<!-- Required for some plugins to work; triggers theme footer hooks as of GS 3.0. -->
</body>
</html>

<!-- Search function: move this someplace pretty
		<div id="search">
			<form method="get" action="">
				<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
				<input type="submit" id="search-submit" value="Search" />
				</fieldset>
			</form>
		</div>
-->
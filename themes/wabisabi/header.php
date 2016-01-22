<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to begin 
	/* rendering the page and display the header/nav
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html <?php language_attributes(); ?>>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); // show the blog name, from settings ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); // if we're on the home page, show the description, from the site's settings - otherwise, show the title of the post or page ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // We are loading our theme directory style.css by queuing scripts in our functions.php file, 
	// so if you want to load other stylesheets,
	// I would load them with an @import call in your style.css
?>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); 
// This fxn allows plugins, and Wordpress itself, to insert themselves/scripts/css/files
// (right here) into the head of your website. 
// Removing this fxn call will disable all kinds of plugins and Wordpress default insertions. 
// Move it if you like, but I would keep it around.
?>

</head>

<body 
	<?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>
>

	<div class="panel-group visible-xs " id="topaccordion" role="tablist" aria-multiselectable="true">
	<!--- Mobileonly menu -->
	<?php 
				wp_nav_menu(array(
					'theme_location' => 'mobiletop',
					'container' => false,
					'items_wrap' => '%3$s',
					'walker'  => new Walker_Panels_Menu("topaccordion")
					));
	?>
</div>	
<div class="wrapper row ">



	
	<header class= "col-md-3 col-md-offset-2">

		<div class="sidebar">
			<h1>Wabi Sabi Programming</h1>
			<div>
				<div id="sociallinks"><span class="glyphicon icon-g-github"></span><span class="glyphicon icon-g-github"></span></div>
			</div>
			<div id="catchphrase" class="nomobile">
				<code>>Dee.cool()<br />
					<span class="output">False</span><br />
					>Dee.passion()<br />
					<span class="output">True</span></code>
					<p></p>
				</div>
<div class="panel-group" id="sideaccordion" role="tablist" aria-multiselectable="true">

			<?php 
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'container' => false,
					'items_wrap' => '%3$s',
					'walker'  => new Walker_Panels_Menu("sideaccordion")
					));
			?>
		</div>
			</div>
		</header>
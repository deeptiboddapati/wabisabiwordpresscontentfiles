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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

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

<body class="container-fluid" <?php body_class(); 
	// This will display a class specific to whatever is being loaded by Wordpress
	// i.e. on a home page, it will return [class="home"]
	// on a single post, it will return [class="single postid-{ID}"]
	// and the list goes on. Look it up if you want more.
	?>> 


<div class="wrapper row ">
    <header class= "col-md-3 col-md-offset-2">
      <div role="navigation" data-nav-status='toggle' class="hidden">
        <ul class="nav nav-pills nav-stacked navbar navbar-default navbar-fixed-top visible-xs ">
          <li> <a class="btn-default" href="#navtop"  type="button" data-toggle="collapse" data-target="#navtop" aria-expanded="false" aria-controls="navtop"> Thoughts about Techsupport</a></li>
          <div class="collapse" id="navtop">

            <ul class=" nav nav-pills nav-stacked">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
          
        </ul>
      </div>
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
   <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    
  <div class="panel">
      <a role="button" class="btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
    <div  id="headingOne">
    
       
          Menuitem1
        
     
    </div>
    </a>
    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <ul class=" nav nav-pills nav-stacked">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
    </div>
      </div>
  </div>
  <div class="panel ">
    <a class="collapsed btn-default" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
    <div id="headingTwo">
      
        
          Menuitem2
       
     
    </div>
     </a>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
        <ul class=" nav nav-pills nav-stacked">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
     </div>
    </div>
  </div>
  <div class="panel ">
    <a class="collapsed btn-default " role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
    <div  id="headingThree">     
          Menuitem3
    </div>
    </a>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
           <ul class=" nav nav-pills nav-stacked">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
      </div>
    </div>
  </div>
</div>
      </div>

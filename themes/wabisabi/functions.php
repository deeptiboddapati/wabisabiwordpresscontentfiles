<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'NAKED_VERSION', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );


/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
/*
register_nav_menus( 
	array(
		'primary'	=>	__( 'Primary Menu', 'naked' ), // Register the Primary menu
		// Copy and paste the line above right here if you want to make another menu, 
		// just change the 'primary' to another name
	)
);
*/
/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function naked_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
		// Copy and paste the lines above right here if you want to make another sidebar, 
		// just change the values of id and name to another word/name
	));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'naked_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function naked_scripts()  { 

	// get the theme directory style.css and link to it in the header
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/style.css');
	
	// add fitvid
	wp_enqueue_script( 'naked-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), NAKED_VERSION, true );
	// add fitvid
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/customJs.js', array( 'jquery' ), NAKED_VERSION, true );
	
	// add theme scripts
	wp_enqueue_script( 'naked', get_template_directory_uri() . '/js/theme.min.js', array(), NAKED_VERSION, true );
  
}
add_action( 'wp_enqueue_scripts', 'naked_scripts' ); // Register this fxn and allow Wordpress to call it automatcally in the header

class Walker_Panels_Menu extends Walker {

    // Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent', 
        'id'     => 'db_id' 
    );
     var $accordionid;
    function __construct($accordionid){
    $this->accordionid =$accordionid;
    }


    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $setid = preg_replace('/\s+/', '', $item->title) . $this->accordionid;
        if( $item->object =='category')
        $output .= sprintf( '
                <div class="panel">
    <a role="button" class="btn-default" data-toggle="collapse" data-parent="#%s" href="#collapse%s" aria-expanded="true" aria-controls="collapse%s">
        <div  id="Heading%s">
            %s
        </div>
    </a>
    <div id="collapse%s" class="panel-collapse collapse " role="tabpanel" aria-labelledby="Heading%s">
        <div class="panel-body">
        <ul class=" nav nav-pills nav-stacked">',
            $this->accordionid,
            $setid,
            $setid,
            $setid,
            $item->title,
            $setid,
            $setid
        );
        elseif($depth==1)
            $output .= sprintf( '<li><a href="%s">%s</a></li>',
                $item->url,
                $item->title
                );
        else
            $output .= sprintf( ' <div class="panel"> <a class="btn-default" href="%s" >%s</a></div>',
            $item->url,
            $item->title
        );
      
    }
 function end_lvl(&$output, $depth=0, $args=array()) {
        $output .= "</ul></div></div></div>\n";
    }
}
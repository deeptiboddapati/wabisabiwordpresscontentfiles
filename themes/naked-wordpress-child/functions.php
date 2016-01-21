<?php
class Walker_Panels_Menu extends Walker {

    // Tell Walker where to inherit it's parent and id values
    var $db_fields = array(
        'parent' => 'menu_item_parent', 
        'id'     => 'db_id' 
    );

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $setid = preg_replace('/\s+/', '', $item->title);
        if( $item->object =='category')
        $output .= sprintf( '
                <div class="panel">
    <a role="button" class="btn-default" data-toggle="collapse" data-parent="#accordion" href="#collapse%s" aria-expanded="true" aria-controls="collapse%s">
        <div  id="Heading%s">
            %s
        </div>
    </a>
    <div id="collapse%s" class="panel-collapse collapse " role="tabpanel" aria-labelledby="Heading%s">
        <div class="panel-body">
        <ul class=" nav nav-pills nav-stacked">',
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


register_nav_menus( 
    array(
        'primary'   =>  __( 'Primary Menu', 'wabisabi' ), // Register the Primary menu
        // Copy and paste the line above right here if you want to make another menu, 
        // just change the 'primary' to another name
    )
);


?>
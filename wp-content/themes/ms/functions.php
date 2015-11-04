<?php
    
add_theme_support( 'post-thumbnails' );
add_theme_support('menus');

show_admin_bar( false );


function pwd(){
    return get_stylesheet_directory_uri().'/';
}
function get_hd(){
    return get_home_url().'/';
}


?>

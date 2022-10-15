<?php

/**
 * funciones básicas de comercio
 */

include get_template_directory() . '/assets/customizer/comercio-color-icon.php';

/*assets styles*/
add_post_type_support('page', 'excerpt');


// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

/*extracto*/
function tn_custom_excerpt_length($length)
{
    return 50;
}
add_filter('excerpt_length', 'tn_custom_excerpt_length', 999);

include get_template_directory() . '/assets/inc/css-functions.php';
include get_template_directory() . '/assets/inc/js-functions.php';
include get_template_directory() . '/assets/inc/menu-functions.php';
include get_template_directory() . '/assets/inc/modulos-functions.php';
include get_template_directory() . '/assets/inc/widget-functions.php';
<?php

/**
 * funciones básicas de comercio
 */

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



if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_634b2731199e9',
        'title' => 'Campos que hacemos home',
        'fields' => array(
            array(
                'key' => 'field_634b27318ff51',
                'label' => 'Título que hacemos',
                'name' => 'titulo_servicios',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Que hacemos',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-home.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    endif;		
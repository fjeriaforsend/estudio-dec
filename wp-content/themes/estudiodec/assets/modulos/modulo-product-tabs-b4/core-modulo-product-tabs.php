<?php  /*  product_tabs */

function product_tabs_register() {

    $labels = array(
        'name' => _x('Product tabs', 'post type general name'),
        'singular_name' => _x('product_tabs', 'post type singular name'),
        'add_new' => _x('Agregar nuevo product tab', 'slideshow_two item'),
        'add_new_item' => __('Agregar Product tabs'),
        'edit_item' => __('Editar Product tabs'),
        'new_item' => __('Nuevo Product tabs'),
        'view_item' => __('Ver el Product tabs'),
        'search_items' => __('Buscar Product tabs'),
        'not_found' =>  __('No se encontraron'),
        'not_found_in_trash' => __('No se encontraron en la basura'),
        'parent_item_colon' => ''
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable'    => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
		'exclude_from_search'   => false,
        'capability_type' => 'post',
        'menu_icon'  => 'dashicons-layout',
        'hierarchical' => false,
        'menu_position' => null,
        /*'taxonomies'	=> array( 'categoria-product_tabs', 'etiqueta-product_tabs', ), */
        'supports' => array('title', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'product_tabs', 'with_front' => false)
      ); 

    register_post_type( 'product_tabs' , $args );
}

add_action('init', 'product_tabs_register');
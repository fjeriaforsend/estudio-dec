<?php  /*  testimonios */

function testimonios_register() {

    $labels = array(
        'name' => _x('testimonios ', 'post type general name'),
        'singular_name' => _x('testimonios ', 'post type singular name'),
        'add_new' => _x('Agregar nuevo testimonio', 'testimonios item'),
        'add_new_item' => __('Agregar nuevo testimonio'),
        'edit_item' => __('Editar testimonio'),
        'new_item' => __('Nuevo testimonio'),
        'view_item' => __('Ver el testimonio'),
        'search_items' => __('Buscar testimonio'),
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
        'menu_icon'  => 'dashicons-groups',
        'hierarchical' => false,
        'menu_position' => null,
        /*'taxonomies'	=> array( 'categoria-testimonios', 'etiqueta-testimonios', ), */
        'supports' => array( 'title', 'custom-fields', 'excerpt'),
        'rewrite' => array('slug' => 'testimonios', 'with_front' => false)
      ); 

    register_post_type( 'testimonios' , $args );
}

add_action('init', 'testimonios_register');

/*categorias personalizadas para inf
function categoria_testimonios() {
	register_taxonomy(
		'categoria-testimonios2',
		'testimonios2',
		array(
			'label' => __( 'Categoria testimonios' ),
			'rewrite' => array( 'slug' => 'categoria-testimonios' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}

add_action( 'init', 'categoria_testimonios' );

function etiqueta_testimonios() {
    register_taxonomy(
        'etiqueta-testimonios','testimonios',array(
        'hierarchical' => false,
        'label' => __( 'Etiqueta testimonios' ),
        // Allow automatic creation of taxonomy columns on associated post-types table?
        'show_admin_column'   => true,
        // Show in quick edit panel?
        'show_in_quick_edit'  => true,
        'update_count_callback' => '_update_post_term_count',
        'infquery_var' => true,
        'rewrite' => array( 'slug' => 'etiqueta-testimonios' ),
        )
    );
}

add_action( 'init', 'etiqueta_testimonios' );

/*function display_inf( $infquery ) { 
	if( is_category() || is_tag() && empty( $infquery->infquery_vars['testimoniosfilter'] ) ) {
	    $infquery->set( 'post_type', array(
        'post', 'nav_menu_item', 'testimonios', 
        'post', 'nav_menu_item', 'testimonios', 
	    ));
	    return $infquery;
	}
}
   
add_filter( 'pre_get_posts', 'display_inf' );*/
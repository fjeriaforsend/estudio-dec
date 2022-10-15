<?php  /*  servicios */

function servicios_register() {

    $labels = array(
        'name' => _x('servicios ', 'post type general name'),
        'singular_name' => _x('servicios ', 'post type singular name'),
        'add_new' => _x('Agregar nuevo servicio', 'servicios item'),
        'add_new_item' => __('Agregar nuevo servicio'),
        'edit_item' => __('Editar servicio'),
        'new_item' => __('Nuevo servicio'),
        'view_item' => __('Ver el servicio'),
        'search_items' => __('Buscar servicio'),
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
        'menu_icon'  => 'dashicons-images-alt',
        'hierarchical' => false,
        'menu_position' => null,
        /*'taxonomies'	=> array( 'categoria-servicios', 'etiqueta-servicios', ), */
        'supports' => array( 'title', 'custom-fields', 'excertp'),
        'rewrite' => array('slug' => 'servicios', 'with_front' => false)
      ); 

    register_post_type( 'servicios' , $args );
}

add_action('init', 'servicios_register');

/*categorias personalizadas para inf
function categoria_servicios() {
	register_taxonomy(
		'categoria-servicios2',
		'servicios2',
		array(
			'label' => __( 'Categoria servicios' ),
			'rewrite' => array( 'slug' => 'categoria-servicios' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}

add_action( 'init', 'categoria_servicios' );

function etiqueta_servicios() {
    register_taxonomy(
        'etiqueta-servicios','servicios',array(
        'hierarchical' => false,
        'label' => __( 'Etiqueta servicios' ),
        // Allow automatic creation of taxonomy columns on associated post-types table?
        'show_admin_column'   => true,
        // Show in quick edit panel?
        'show_in_quick_edit'  => true,
        'update_count_callback' => '_update_post_term_count',
        'infquery_var' => true,
        'rewrite' => array( 'slug' => 'etiqueta-servicios' ),
        )
    );
}

add_action( 'init', 'etiqueta_servicios' );

/*function display_inf( $infquery ) { 
	if( is_category() || is_tag() && empty( $infquery->infquery_vars['serviciosfilter'] ) ) {
	    $infquery->set( 'post_type', array(
        'post', 'nav_menu_item', 'servicios', 
        'post', 'nav_menu_item', 'servicios', 
	    ));
	    return $infquery;
	}
}
   
add_filter( 'pre_get_posts', 'display_inf' );*/
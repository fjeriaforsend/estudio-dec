<?php  /*  contacto */

function contacto_register() {

    $labels = array(
        'name' => _x('contacto ', 'post type general name'),
        'singular_name' => _x('contacto ', 'post type singular name'),
        'add_new' => _x('Agregar nuevo contacto', 'contacto item'),
        'add_new_item' => __('Agregar nuevo contacto'),
        'edit_item' => __('Editar contacto'),
        'new_item' => __('Nuevo contacto'),
        'view_item' => __('Ver el contacto'),
        'search_items' => __('Buscar contacto'),
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
        /*'taxonomies'	=> array( 'categoria-contacto', 'etiqueta-contacto', ), */
        'supports' => array( 'title', 'custom-fields', 'excerpt'),
        'rewrite' => array('slug' => 'contacto', 'with_front' => false)
      ); 

    register_post_type( 'contacto' , $args );
}

add_action('init', 'contacto_register');

/*categorias personalizadas para inf
function categoria_contacto() {
	register_taxonomy(
		'categoria-contacto2',
		'contacto2',
		array(
			'label' => __( 'Categoria contacto' ),
			'rewrite' => array( 'slug' => 'categoria-contacto' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}

add_action( 'init', 'categoria_contacto' );

function etiqueta_contacto() {
    register_taxonomy(
        'etiqueta-contacto','contacto',array(
        'hierarchical' => false,
        'label' => __( 'Etiqueta contacto' ),
        // Allow automatic creation of taxonomy columns on associated post-types table?
        'show_admin_column'   => true,
        // Show in quick edit panel?
        'show_in_quick_edit'  => true,
        'update_count_callback' => '_update_post_term_count',
        'infquery_var' => true,
        'rewrite' => array( 'slug' => 'etiqueta-contacto' ),
        )
    );
}

add_action( 'init', 'etiqueta_contacto' );

/*function display_inf( $infquery ) { 
	if( is_category() || is_tag() && empty( $infquery->infquery_vars['contactofilter'] ) ) {
	    $infquery->set( 'post_type', array(
        'post', 'nav_menu_item', 'contacto', 
        'post', 'nav_menu_item', 'contacto', 
	    ));
	    return $infquery;
	}
}
   
add_filter( 'pre_get_posts', 'display_inf' );*/
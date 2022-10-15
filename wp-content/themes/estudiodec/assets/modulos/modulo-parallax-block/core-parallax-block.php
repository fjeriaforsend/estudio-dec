<?php
 /*parallax*/

// Register Custom Post Type
add_action( 'init', 'parallax', 0 );

function parallax() { 

	$labels = array(
		'name'                  => _x( 'parallax', 'Post Type General Name', 'parallax' ),
		'singular_name'         => _x( 'parallax', 'Post Type Singular Name', 'parallax' ),
		'menu_name'             => __( 'parallax', 'parallax' ),
		'name_admin_bar'        => __( 'parallax', 'parallax' ),
		'archives'              => __( 'parallax', 'parallax' ),
		'attributes'            => __( 'parallax', 'parallax' ),
		'parent_item_colon'     => __( 'Basado en:', 'parallax' ),
		'all_items'             => __( 'Todos los parallax', 'parallax' ),
		'add_new_item'          => __( 'Agregar nueva parallax', 'parallax' ),
		'add_new'               => __( 'Agregar nueva', 'parallax' ),
		'new_item'              => __( 'nueva parallax', 'parallax' ),
		'edit_item'             => __( 'editar parallax', 'parallax' ),
		'update_item'           => __( 'actualizar', 'parallax' ),
		'view_item'             => __( 'Ver parallax', 'parallax' ),
		'view_items'            => __( 'ver la parallax', 'parallax' ),
		'search_items'          => __( 'buscar una parallax', 'parallax' ),
		'not_found'             => __( 'no se encuentra', 'parallax' ),
		'not_found_in_trash'    => __( 'no se encuentra en la basura', 'parallax' ),
		'featured_image'        => __( 'imagen destacada', 'parallax' ),
		'set_featured_image'    => __( 'seleccionar imagen destacada', 'parallax' ),
		'remove_featured_image' => __( 'remover imagen destacada', 'parallax' ),
		'use_featured_image'    => __( 'usar imagen destacada', 'parallax' ),
		'insert_into_item'      => __( 'insertar en el item', 'parallax' ),
		'uploaded_to_this_item' => __( 'Subido a este artículo', 'parallax' ),
		'items_list'            => __( 'Lista de artículos', 'parallax' ),
		'items_list_navigation' => __( 'Lista de elementos de navegación', 'parallax' ),
		'filter_items_list'     => __( 'Primer elemento del articulo', 'parallax' ),
	);
	$args = array(
		'label'                 => __( 'parallax', 'parallax' ),
		'description'           => __( 'parallax', 'parallax' ),
		'labels'                => $labels,
		'show_in_rest' => true,
		'supports'              => array( 'title', 'thumbnail', 'custom-fields'),
		'taxonomies'            => array( 'categoria-parallax', 'etiqueta-parallax', ), 
		'rewrite' => true,
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true, 
		'show_in_menu'          => true,
		'menu_position'         => 10,
		'menu_icon'             => 'dashicons-images-alt',
		'menu_position' => null,
		'query_var' => true,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post', 
		'rewrite' => array('slug' => 'parallax', 'with_front' => FALSE)
		
	);




	register_post_type( 'parallax', $args );

}

 /*categorias personalizadas para parallax*/
 function categoria_parallax() {

	register_taxonomy(
		'categoria-parallax',
		'parallax',
		array(
			'label' => __( 'Categoria parallax' ),
			'rewrite' => array( 'slug' => 'categoria-parallax' ),
			'hierarchical' => true,
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
		)
	);
}
add_action( 'init', 'categoria_parallax' );


function etiqueta_parallax() {

register_taxonomy(
			'etiqueta-parallax','parallax',array(
			'hierarchical' => false,
			'labels' => $labels,
			'label' => __( 'Etiqueta parallax' ),
			 // Allow automatic creation of taxonomy columns on associated post-types table?
			 'show_admin_column'   => true,
			 // Show in quick edit panel?
			 'show_in_quick_edit'  => true,
			'update_count_callback' => '_update_post_term_count',
			'parallaxquery_var' => true,
			'rewrite' => array( 'slug' => 'etiqueta-parallax' ),
		)
	);




}
add_action( 'init', 'etiqueta_parallax' );

function display_parallax( $parallaxquery ) {
	if( is_category() || is_tag() && empty( $parallaxquery->parallaxquery_vars['parallaxfilter'] ) ) {
	$parallaxquery->set( 'post_type', array(
	'post', 'nav_menu_item', 'parallax', 
	'post', 'nav_menu_item', 'parallax', 
	));
	return $parallaxquery;
	}
   }
   
   add_filter( 'pre_get_posts', 'display_parallax' );
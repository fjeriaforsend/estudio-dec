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

/*modulo product tabs*/
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_63123739ca7ef',
        'title' => 'Campos product-tab',
        'fields' => array(
            array(
                'key' => 'field_63126bf1a9ec0',
                'label' => 'Icono pestaña',
                'name' => 'icono_pestana',
                'type' => 'select',
                'instructions' => 'Seleccione el ícono que desea agregar a la pestaña',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'fas fa-shipping-fast' => 'Ícono información despacho',
                    'fas fa-store-alt' => 'Ícono información tienda',
                    'fas fa-info-circle' => 'Ícono información producto',
                ),
                'default_value' => 'fas fa-info-circle',
                'allow_null' => 0,
                'multiple' => 0,
                'ui' => 0,
                'return_format' => 'value',
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_63164fc2f2ca5',
                'label' => 'Color ícono',
                'name' => 'color_icono',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'enable_opacity' => 0,
                'return_format' => 'string',
            ),
            array(
                'key' => 'field_63164ff55e593',
                'label' => 'Color texto',
                'name' => 'color_texto',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'enable_opacity' => 0,
                'return_format' => 'string',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'product_tabs',
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
/*modulo product tabs*/
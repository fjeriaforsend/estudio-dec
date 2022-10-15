<?php
function comercio_framework()
{
    wp_register_style('iconos', get_template_directory_uri() . '/assets/librerias/css/fafa/css/all.css', 'all');
    wp_register_style('fuentes', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', 'all');
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', 'all');
    wp_register_style('root', get_template_directory_uri() . '/assets/librerias/css/root.css', 'all');
    




    wp_enqueue_style('bootstrap');
    wp_enqueue_style('iconos');
    wp_enqueue_style('fuentes');
    wp_enqueue_style('root');
    
    
}


add_action('wp_enqueue_scripts', 'comercio_framework');


/*assets styles*/
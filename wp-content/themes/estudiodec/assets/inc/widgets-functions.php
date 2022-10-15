<?php

/*widget assets*/
function zona_widget()
{
    register_sidebar(array('name' => 'Menu Logo y redes sociales', 'id' => 'menu_uno_izquierdo', 'before_widget' => '<div id="%1$S" class="menu-footer">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Menu Servicio al cliente', 'id' => 'menu_dos_izquierdo', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo mt-3">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Menu acerca de la tienda', 'id' => 'menu_uno_derecho', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo mt-3">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Menu cuatro', 'id' => 'menu_dos_derecho', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo mt-3">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Menu cinco', 'id' => 'menu_derecho_form', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo mt-3">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Menu pie pagina', 'id' => 'menu_pie_pagina', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo mt-3">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
    register_sidebar(array('name' => 'Menu logos footer', 'id' => 'menu_logos', 'before_widget' => '<div id="%1$S" class="menu-footer menu-tipo mt-3">', 'after_widget' => '</div>', 'before_title' => '<h5 class="titulo-menu-footer">', 'after_title' => '</h5>'));
}

add_action('widgets_init', 'zona_widget');
/*widget assets*/
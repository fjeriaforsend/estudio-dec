<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-contacto/contacto.css'; ?>
</style>

<div id="contacto" class="container">
<h2 class="title-noticia-home w-100 text-center"><?php the_field('titulo_contacto'); ?></h2>

<div class="servicios-contenedor row">

<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = -1; // -1 shows all posts
$args = array(
    'post_type' => 'contacto',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
    'posts_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);
if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="col-12 col-md-8">
  <?php the_field('mapa_contacto') ?>
</div>

<div class="col-12 col-md-4">
  <?php the_field('encuesta_contacto') ?>
</div>

<?php endwhile; ?>
<?php else : ?>
<p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>
    
</div>
</div>
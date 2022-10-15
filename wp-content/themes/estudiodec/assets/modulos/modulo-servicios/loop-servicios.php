<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-servicios/servicios.css'; ?>
</style>

<div id="servicios" class="container">
<h2 class="title-noticia-home w-100 text-center"><?php the_field('titulo_servicios'); ?></h2>

<div class="servicios-contenedor row">

<?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = -1; // -1 shows all posts
$args = array(
    'post_type' => 'post',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
    'posts_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);
if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<div class="col-12 col-md-4">
  <div class="card-body card-noticia card">
    <h5 class="card-title title-noticia"> <?php echo get_the_title(); ?></h5>
    <p class="date-noticia"><?php modulos_posted_on(); ?></p>
    <p class="card-text text-noticia"><?php echo get_the_excerpt();  ?></p>
    <a href= "<?php the_permalink(); ?>" class="btn btn-primary btn-noticia">
    <i class="arrow-noticia">→</i>
  </a>
  </div>
</div>

<?php endwhile; ?>
<?php else : ?>
<p class="text-center title-sm">Oops!, Lo sentimos, no hay contenido que mostrar</p>
<?php endif;
wp_reset_query();
$wp_query = $temp ?>
    
</div>
</div>
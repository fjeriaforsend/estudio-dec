<style>
<?php include get_template_directory() . '/assets/modulos/modulo-testimonios/testimonios.css';
?>
</style>

<div id="testimonios" class="container">
    <h2 class="title-noticia-home w-100 text-center"><?php the_field('titulo_testimonios'); ?></h2>

    <div class="testimonios-contenedor row">

        <?php
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = 3; // -1 shows all posts
$args = array(
    'post_type' => 'testimonios',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
    'posts_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);
if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <div class="col-12 col-md-4">
            <div class="card-body card-testimonios card border-none">

                <picture
                    class="col-12 col-md-10 m-auto d-flex justify-content-center align-items-center img-testimonio">
                    <?php 
$image = get_field('foto_persona');
if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </picture>
                <div class="shadow-lg contenedor-datos-testimonio">
                    <p class="card-text text-testimonios"><?php the_field('testimonio_persona'); ?></p>
                    <h5 class="card-title title-testimonios"> <?php the_field('nombre_de_la_persona'); ?></h5>
                    <p class="card-text text-testimonios small"><?php the_field('cargo_de_la_persona'); ?></p>
                </div>
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
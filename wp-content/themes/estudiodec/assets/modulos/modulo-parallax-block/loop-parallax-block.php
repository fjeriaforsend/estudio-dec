<style>
<?php include get_template_directory() . '/assets/modulos/modulo-parallax-block/modulo-parallax-block.css';
?>
</style>
<?php $active = true;
        $temp = $wp_query;
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $post_per_page = -1; // -1 shows all posts
        $args = array(
            'post_type' => 'parallax',
            'orderby' => 'date',
            'order' => 'ASC',
            'paged' => $paged,
            'posts_per_page' => $post_per_page
        );
        $wp_query = new WP_Query($args);
        if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
<div id="parallax-<?php the_ID(); ?>" class="<?php the_field('ancho_modulo_parallax');?>">



    <div style="min-height:<?php the_field('altura_modulo_parallax');?>px; height:<?php the_field('altura_modulo_parallax');?>px;"
        class="parallax-window" data-parallax="scroll"
        data-image-src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>">




        <?php 
            if( get_field('boton_parallax') == 'si' ) { ?>


        <div class="boton-parallax"><a
                style="background-color:<?php the_field('color_boton_parallax');?>; color:<?php the_field('color_texto_boton_parallax');?>;"
                class="boton-interior"
                href="<?php the_field('vinculo_boton');?>"><?php the_field('texto_boton_parallax');?></a> </div>

                </div>
    </div>

        <?php } else { ?>
    

        <?php ?>


     

        </div>
    </div>

    
<?php } endwhile; ?>

<?php else : ?>
<?php endif;
        wp_reset_query();
        $wp_query = $temp ?>
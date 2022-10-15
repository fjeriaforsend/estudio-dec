<style>
<?php include get_template_directory() . '/assets/modulos/modulo-boxinfo/modulo-boxinfo.css';
?>
</style>

<div class="container-fluid my-3 box-info-container">

    <!--productos destacados-->
    <ul class="row p-0 m-0">

        <?php $active = true;
            $temp = $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $post_per_page = 12; // -1 shows all posts
            $args = array(
                'post_type' => 'boxinfo',
                'orderby' => 'date',
                'order' => 'ASC',
                'paged' => $paged,
                'posts_per_page' => $post_per_page
            );
            $wp_query = new WP_Query($args);
if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

  
<a class="card-maker-body p-3 <?php the_field('tipo_de_display'); ?> <?php the_field('align_items'); ?> <?php the_field('separacion_entre_elementos'); ?> col-12 col-md-<?php the_field('ancho_de_la_tarjeta'); ?>"
            href="<?php the_field('link_de_la_caja'); ?>">

            <figure style="background-color:<?php the_field('background_box_info');?>;" class="tarjeta-contenedor-boxinfo <?php the_field('tipo_de_display'); ?> <?php the_field('align_items'); ?> <?php the_field('separacion_entre_elementos'); ?>">

            <?php 
$image = get_field('imagen_del_bloque');
if( !empty( $image ) ): ?>

<?php 
$vimage = get_field('align_items');

if( get_field('align_items') == 'flex-row' ) { ?>
                <img  class="img-fluid m-1" style="max-width:50%;" src="<?php echo esc_url($image['url']); ?>" alt="<?php the_field('texto_boton_de_tarjeta'); ?>"> 
                <?php ?>
            
    <?php } elseif (get_field('align_items') == 'flex-row-reverse') { ?>
    
        <img  class="img-fluid m-1" style="max-width:50%;" src="<?php echo esc_url($image['url']); ?>" alt="<?php the_field('texto_boton_de_tarjeta'); ?>">
        
        <?php ?> 
        
        <?php } else { ?>  

    <img class="img-fluid mb-3" src="<?php echo esc_url($image['url']); ?>" alt="<?php the_field('texto_boton_de_tarjeta'); ?>">

    <?php } endif;?>     

                <figcaption class="<?php the_field('alinear_texto'); ?>">
                    <h5><?php the_field('titulo_de_tarjeta') ?></h5>
                    <p><?php the_field('texto_del_bloque') ?></p>

                    <?php 

if( get_field('la_tarjeta_lleva_boton') == 'si' ) {?>
    
    <div style="background-color:<?php the_field('color_del_boton'); ?>;" class="boton-tarjeta mb-3">
<p style="color:<?php the_field('color_del_texto_del_boton');?>;"><?php the_field('texto_boton_de_tarjeta'); ?></p>     
</div>
    
    
<?php }?>     

                </figcaption>

            </figure>

        </a>
   


        <?php
                endwhile;
            endif;
            wp_reset_query();
            $wp_query = $temp ?>
</div>
<style>
<?php include get_template_directory() . '/assets/modulos/modulo-slider/modulo-slider.css';
?>
</style>

<!--Slider-->
<div class="site-main container-fluid p-0">
<div id="carouselExampleControls" class=" carrusel-id-<?php the_ID(); ?> carousel slide row g-0" data-bs-ride="carousel">

    <div class="carousel-inner">
        <?php
$i=0;
$e=0;
$temp = $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$post_per_page = -1; // -1 shows all posts
$args = array(
    'post_type' => 'slideshow',
    'orderby' => 'date',
    'order' => 'DESC',
    'paged' => $paged,
    'posts_per_page' => $post_per_page
);
$wp_query = new WP_Query($args);
if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <div style="min-height:<?php the_field('altura_slider');?>px; height:<?php the_field('altura_slider');?>px;" class="carousel-item <?php the_field('ancho_del_slider');?> <?php if($i == 0){ echo "active"; };?>">
            <?php $active = false; ?>

    <?php if( get_field('activar_video') == 'si' ) { ?>
             <?php $file = get_field('video_slide'); if( $file ) :?>

            <video class="video-slider-bg" playsinline autoplay loop muted poster="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>">
                <source src="<?php echo $file['url']; ?>" type="video/mp4" />
                <source src="<?php echo $file['url']; ?>" type="video/webm" />

            </video>
            <?php endif; ?>
            

            

            <?php } else { ?>




    


            <a class="w-100" <?php $linkslide = get_field('link_del_slider'); if(!empty($linkslide)){?>href="<?php the_field('link_del_slider'); ?>"
                <?php }; ?>>
                <!--imagen mobile-->
                <?php $image = get_field('imagen_mobile'); 
                $image2 = get_field('imagen_escritorio'); ?>
                <?php if (!empty($image)) : ?>
                <img class="<?php if(!empty($image2)){ ?>d-sm-none<?php }; ?>"
                    src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>

                <!--imagen escritorio-->
                <?php if (!empty($image2)) : ?>
                <img class="<?php if(!empty($image)){ ?>d-none d-sm-block<?php }; ?>"
                    src="<?php echo esc_url($image2['url']); ?>" alt="<?php echo esc_attr($image2['alt']); ?>" />
                <?php endif; ?>
            </a>
            <?php } ?>
        </div>



        <?php $i++; ?>
        <?php endwhile; ?>

        <?php endif;
        wp_reset_query();
        $wp_query = $temp ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previa</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Siguiente</span>
  </button>

</div>
</div>
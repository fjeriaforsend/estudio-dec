<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-product-tabs/modulo-product-tabs.css';
    ?>
</style>

<!--modulo product tabs-->
 
<div id="modulo-product-tabs" class="mb-3">
    <h3 class="titulo-academia pt-3 mb-3 d-flex justify-content-center flex-column align-items-center">
        <?php the_field('titulos_academia'); ?></h3>
        <div class="modulo-product-tabs-page-modulo-product-tabs row d-flex justify-content-center flex-column align-items-center">
            <ul class="nav nav-tabs" id="moduloTabs" role="tablist">
                <?php
                $i = 1;
                $e = 0;
                $temp = $wp_query;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $post_per_page = 8; // -1 shows all posts
                $args = array(
                    'post_type' => 'product_tabs',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'paged' => $paged,
                    'posts_per_page' => $post_per_page
                );
                $wp_query = new WP_Query($args);

                if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


                        

                        <li class="nav-item modulo-product-tabs" role="<?php global $post;
                                                                            echo $post->post_name; ?>">

                            <button class="nav-link <?php if ($i == 0) {
                                                        echo "active";
                                                    }; ?>" id="<?php global $post;
                                                                echo $post->post_name; ?>-tab" data-toggle="tab" data-target="#<?php global $post;
                                                                echo $post->post_name; ?>" type="button" role="tab" aria-controls="<?php global $post;
                                                                echo $post->post_name; ?>" aria-selected="true">
                                <img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="img-fluid" alt="">

                                <h5 style="color:<?php the_field('color_texto');?>;" class="titulo-aprender parrafo-sm"><i style="color:<?php the_field('color_icono');?>;" class="<?php the_field('icono_pestana')?>"></i><?php echo get_the_title(); ?></h5>

                            </button>
                        </li>



                        <?php $i++; ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p style="color:<?php the_field('color_texto');?>;" class="text-center">Oops!, Lo sentimos, no hay contenido que mostrar</p>

                <?php endif;
                wp_reset_query();
                $wp_query = $temp ?>
            </ul>

            <div class="tab-content" id="moduloTabsContent">
                <?php
                $i = 1;
                $e = 0;
                $temp = $wp_query;
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $post_per_page = 8; // -1 shows all posts
                $args = array(
                    'post_type' => 'product_tabs',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'paged' => $paged,
                    'posts_per_page' => $post_per_page
                );
                $wp_query = new WP_Query($args);
                if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                        <div class="tab-pane fade <?php if ($i == 0) {
                                                        echo "show active";
                                                    }; ?>" id="<?php global $post;
                                                                echo $post->post_name; ?>" role="tabpanel" aria-labelledby="<?php global $post;
                                                                                                                            echo $post->post_name; ?>">
                            <figure class="row d-flex justify-content-center align-items-center">

                                <figcaption class="p-3 w-100 row col-modulo-product-tabs">
                                
                                    <span class="col-12 cont-product-tabs"><?php echo get_the_excerpt(); ?>
                                        <a class="boton-cont-product-tabs" href="<?php the_field('link_a_categoria'); ?>"><?php echo get_the_title()?> Disponibles</a>
                                    </span>
                                    </caption>
                            </figure>
                        </div>

                        <?php $i++; ?>
                    <?php endwhile; ?>
                <?php else : ?>
                    <p class="text-center">Oops!, Lo sentimos, no hay contenido que mostrar</p>
                <?php endif;
                wp_reset_query();
                $wp_query = $temp ?>

            </div>
        </div>
</div>
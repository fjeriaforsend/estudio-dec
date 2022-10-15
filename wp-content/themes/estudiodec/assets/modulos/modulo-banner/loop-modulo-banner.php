<style>
    <?php include get_template_directory() . '/assets/modulos/modulo-banner/modulo-banner.css';
    ?>
</style>

<div id="comercio-banner" class="container-fluid">
	<div class="row">
		<div class="col-12 col-md-12">
			<?php $active = true;
			$temp = $wp_query;
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$post_per_page = 2; // -1 shows all posts
			$args = array(
				'post_type' => 'banner',
				'orderby' => 'date',
				'order' => 'ASC',
				'paged' => $paged,
				'posts_per_page' => $post_per_page
			);
			$wp_query = new WP_Query($args);
			if (have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

					<div class="forsend-modulo-banner-area col-12 col-md-12 my-3">

						<!--foto banner home-->
						
						<div class="foto-banner <?php the_field('ancho_banner')?>" style="height:<?php the_field('altura_banner')?>; border-radius:<?php the_field('bordes_redondos')?>px; background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>');">
						<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>" class="d-none" alt="<?php the_field('texto_descriptivo_imagen');?>">					
						</div>


						<!--foto banner home-->





					</div><!-- .banner_area home -->









				<?php endwhile;
			else : ?>
			<?php endif;
			wp_reset_query();
			$wp_query = $temp ?>
		</div>
	</div>
</div>
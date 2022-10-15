<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package modulos
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container-fluid'); ?>>

<div id="noticias" class="container">
<h2 class="title-noticia-home w-100 text-center"><?php the_field('titulo_noticias'); ?></h2>

<picture>
<?php 
$image = get_field('foto_quienes_somos');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
</picture>



</div>

</article><!-- #post-<?php the_ID(); ?> -->

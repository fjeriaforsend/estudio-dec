<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package modulos
 */

?>

<?php 
$imagebg = get_field('foto_quienes_somos');
if( !empty( $imagebg ) ): ?>

<article style="background-image: url('<?php echo esc_url($imagebg['url']); ?>') id="post-<?php the_ID(); ?>" <?php post_class('container-fluid'); ?>>

<div id="noticias" class="container">
<h2 class="title-noticia-home w-100 text-center"><?php the_field('titulo_quienes_somos'); ?></h2>

<div class="row">

<picture class="col-12 col-md-5">
<?php 
$image = get_field('foto_quienes_somos');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
</picture>

<div class="col-12 col-md-7 contenedor-qs-home"> 

<p class="texto-qs-home">
<?php the_field('info_quienes_somos'); ?>
</p>

<a class="btn-qs-home" href="<?php the_field('boton_conoce_equipo') ?>">

Conoce al equipo
</a>

</div>

</div>

</div>

</article><!-- #post-<?php the_ID(); ?> -->


<?php endif; ?>
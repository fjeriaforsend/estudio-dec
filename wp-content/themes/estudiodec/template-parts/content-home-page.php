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
$imagebg = get_field('fondo_quienes_somos');
if( !empty( $imagebg ) ): ?>

<article style="background-image: url('<?php echo esc_url($imagebg['url']); ?>')" id="post-<?php the_ID(); ?>" <?php post_class('container-fluid pb-5 bg-qs-home'); ?>>

<div id="quienes-somos" class="container">
<h2 class="title-noticia-home w-100 text-center mt-5 pt-5"><?php the_field('titulo_quienes_somos'); ?></h2>

<div class="row contenedor-sup-qs-home">

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

<?php get_field('texto_boton_ce') ?>

</a>

</div>

</div>

</div>

</article><!-- #post-<?php the_ID(); ?> -->


<?php endif; ?>

<!--testimonios-->
<?php include get_template_directory() . '/assets/modulos/modulo-servicios/loop-modulo-servicios.php'; ?>

<!--testimonios--> 


<!--- Sección expediente digital --->

<?php 
$imageed = get_field('fondo_expediente_digital');
if( !empty( $imageed ) ): ?>

<article style="background-image: url('<?php echo esc_url($imageed['url']); ?>')" id="post-<?php the_ID(); ?>" <?php post_class('container-fluid pb-5 bg-qs-home'); ?>>

<div id="expediente-digital" class="container">
<h2 class="title-noticia-home w-100 text-center mt-5 pt-5"><?php the_field('titulo_expediente_digital'); ?></h2>

<div class="row contenedor-sup-qs-home">

<div class="col-12 col-md-8 m-auto contenedor-qs-home text-center"> 

<p class="texto-ed-home">
<?php the_field('info_expediente_digital'); ?>
</p>

<a class="btn-qs-home" href="<?php the_field('boton_revisa_tu_expediente') ?>">

<?php the_field('texto_boton') ?>
</a>

</div>

</div>

</div>

</article><!-- #post-<?php the_ID(); ?> -->


<?php endif; ?>

<!--- Sección expediente digital --->
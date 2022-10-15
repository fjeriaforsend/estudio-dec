<?php
/**
 * Template Name: home page modulos
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package modulos
 */

get_header();
?>
	<h1>Modulos auto administrables disponibles para Comercio 4</h1>
<hr>


<?php include get_template_directory() . '/assets/modulos/modulo-slider/loop-modulo-slider.php';?>







<main id="primary" class="site-main container">

	<h2>Modulo Info box</h2>
<?php
	include get_template_directory() . '/assets/modulos/modulo-infobox/loop-modulo-infobox.php';
?>

<hr>



	<h2>Modulo de tabs.</h2>
		<?php
			include get_template_directory() . '/assets/modulos/modulo-product-tabs/loop-modulo-product-tabs.php';
		?>

		<hr>

		<h2>Modulo de banner</h2>
		<?php
			include get_template_directory() . '/assets/modulos/modulo-banner/loop-modulo-banner.php';
		?>

<hr>

<h2>Modulo card Maker</h2>
<?php
	include get_template_directory() . '/assets/modulos/modulo-boxinfo/loop-modulo-boxinfo.php';
?>

<h2>Modulo parallax</h2>
<?php
	include get_template_directory() . '/assets/modulos/modulo-parallax-block/loop-parallax-block.php';
?>

<hr>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

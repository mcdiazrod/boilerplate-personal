<!-- busca el fichero "header.php"
	<?php get_header("especial"); ?>
	si ponemos esto buscaría primero el fichero header-especial.php
	y si no existe busca el header.php
	esto es para poner el header que nos apetezca
-->
<?php get_header(); ?>
<body>
	<p>nombre del Sitio: <?php bloginfo("name"); ?></p>
	<p>Descripción del Sitio: <?php bloginfo("description"); ?></p>
	<p>Versión: <strong><?php bloginfo("name")?></strong></p>
	<h1>HELLOOOOO</h1>
	<div class="image">
		<img src="<?php bloginfo("template_url"); ?>/screenshot.png" alt="">
		<!-- <img src="wp-content/themes/boilerplate/screenshot.png" alt=""> -->
	</div>
	<!-- busca el fichero "footer.php"*/-->
	<?php get_footer(); ?>

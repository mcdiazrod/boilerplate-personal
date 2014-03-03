<?php get_header(); ?>

<!-- Carga cualquier fichero que esté en la carpeta de nuestro tema -->
<?php get_template_part("blocks/bloque-temperatura", "version2"); ?>
<body class="especial">
	<h1>Página Especial (page-5.php):<?php the_title(); ?></h1>
	<?php the_post(); ?>
	<?php the_content(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
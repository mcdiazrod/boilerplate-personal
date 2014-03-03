<?php get_header();?>
<body>
	<!-- se pone espacio en blanco en the_category para que no salga la viñeta -->
	<h1><?php the_category(' '); ?></h1>
 	<!-- lee la primera entrada que cumple la condicion(have_posts() -->
 	<!-- los : significan que abren el if en lugar de la { -->
 	<!-- the post recorre las entradas de la categoría seleccionada -->
 	<!-- INICIO LOOP -->
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<!-- post -->
		<article>
			<header>
				<p>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</p>
			</header>
			<!-- <?php the_excerpt(); ?> Extracto de contenido en 20 palabras aprox y elimina todo el formato que hay-->
			<?php the_time(); ?>
			<?php the_date(); ?>
			<?php the_author(); ?>
			<!-- nos muestra todo a no ser que le metamos un more como este caso -->
			<?php the_content("Más! "); ?>
		</article>
	<?php endwhile; ?>
	<!-- FIN LOOP -->

		<!-- post navigation -->
	
	<?php else: ?>
		<p>NO hay posts</p>
		<!-- no posts found -->
	<?php endif; ?>
</body>
</html>
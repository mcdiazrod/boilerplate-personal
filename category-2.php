<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description"); ?></title>
	<!-- <title>Document</title> -->
	<!-- <link rel="stylesheet" href="wp-content/themes/boilerplate/style.css"> -->
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
</head>
<body class="villanos">
 
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<p><?php the_title(); ?></p>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>


</body>
</html>
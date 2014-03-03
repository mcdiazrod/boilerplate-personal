<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description"); ?></title>
	<!-- <title>Document</title> -->
	<!-- <link rel="stylesheet" href="wp-content/themes/boilerplate/style.css"> -->
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
</head>
<body>
	<h1>Página (page.php):<?php the_title(); ?></h1>
	<?php the_post(); ?>
	<?php the_content(); ?>
	<a href="<?php bloginfo("home"); ?>">ir al inicio</a>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/js/jquery-1.8.3-min.js"><\/script>')</script>
</body>
</html>
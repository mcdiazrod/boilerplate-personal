<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo("description"); ?></title>
	<!-- <title>Document</title> -->
	<!-- <link rel="stylesheet" href="wp-content/themes/boilerplate/style.css"> -->
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
	<!-- La siguiente función es para que funcionen los plugins en nuestro tema -->
	<?php wp_head(); ?>
</head>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<title>Site MMI</title>
	<?php wp_head();?>
</head>
<body>
	<header>
		<img src="<?php the_field('image'); ?>" alt="Fond header">
		<div id="menu">
			<a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/mmi_normal.svg" alt="Logo MMI Chambéry"></a>
			<nav>
				<?php wp_nav_menu(array('theme_location' => 'Principal',));?>
			</nav>
		</div>
		<h1><?php the_field('titre'); ?></h1>

	</header>
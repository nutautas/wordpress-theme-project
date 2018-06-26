<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?php wp_title(); ?></title>
	<?php wp_head(); ?>
</head>

<body>

	<header>
		<div class="container flex">
		 	<a href="<?php echo site_url(); ?>"><img src="<?php echo get_field('l_logo_image', 'option')["url"]; ?>" alt="<?php bloginfo('name'); ?>"/></a>
			<div class="heading_menu flex">
				<?php
		      	$args = [
		      		'menu_class' => 'nav flex',
		      		'menu_id' => 'myTopnav',
		      		'container' => false,
		      		'theme_location' => 'primary-navigation'
		      	];
		      	wp_nav_menu($args); 
		      	?>
		      	
				<div><a href="javascript:void(0);" class="icon" onclick="myFunction()">
						<i class="fa fa-bars"></i> </a></div>
				<i class="fas fa-search"></i>
				<div class="sss"><input type="search" class="search1"placeholder="Search..." ><button class="btn">OK</button></div>
			</div>
		</div>
	</header>
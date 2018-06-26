<?php

// Įjungiame post thumbnail

add_theme_support( 'post-thumbnails' );

// Apsibrėžiame stiliaus failus ir skriptus

if( !defined('ASSETS_URL') ) {
	define('ASSETS_URL', get_bloginfo('template_url'));
}

function theme_scripts(){

    if ( !is_admin() ) {

    	

        wp_deregister_script('jquery');
		wp_register_script('jquery', ASSETS_URL . '/assets/script/jquery-1.12.4.min.js', false, '2.1.1', true);

        wp_register_script('js_owl', ASSETS_URL . '/assets/script/owl.carousel.min.js', array('jquery'), '1.0', true);
        wp_register_script('custom', ASSETS_URL . '/assets/script/custom.js', array('jquery'), '1.0', true);

        wp_enqueue_script('jquery');
        wp_enqueue_script('js_owl');
        wp_enqueue_script('custom');
    }
}
add_action('wp_enqueue_scripts', 'theme_scripts');


function theme_stylesheets(){

	$styles_path = ASSETS_URL . '/assets/css/style.css';

	if( $styles_path ) {

		
	
		wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700', array(), false, 'all');
		wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.0.13/css/all.css', array(), false, 'all');
		wp_register_style('fontawesome4', ASSETS_URL . '/assets/css/font-awesome.min.css', array(), false, 'all');

		wp_register_style('owl', ASSETS_URL . '/assets/css/owl.carousel.min.css', array(), false, 'all');
		wp_register_style('owl-car', ASSETS_URL . '/assets/css/owl.theme.default.min.css', array(), false, 'all');
		wp_register_style('style', ASSETS_URL . '/assets/css/style.css', array(), false, 'all');


		wp_enqueue_style('google-fonts');
		wp_enqueue_style('fontawesome');
		wp_enqueue_style('fontawesome4');
		wp_enqueue_style('owl');
		wp_enqueue_style('owl-car');
		wp_enqueue_style('style');
	}
}
add_action('wp_enqueue_scripts', 'theme_stylesheets');

// Apibrėžiame navigacijas

function register_theme_menus() {
   
	register_nav_menus(array( 
        'primary-navigation' => __( 'Primary Navigation' ),
        'footer-navigation' => __( 'Footer Navigation' ), 
    ));
}

add_action( 'init', 'register_theme_menus' );

// Apibrėžiame widgets juostas

#$sidebars = array( 'Footer Widgets', 'Blog Widgets' );

if( isset($sidebars) && !empty($sidebars) ) {

	foreach( $sidebars as $sidebar ) {

		if( empty($sidebar) ) continue;

		$id = sanitize_title($sidebar);

		register_sidebar(array(
			'name' => $sidebar,
			'id' => $id,
			'description' => $sidebar,
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		));
	}
}

// Custom posts

$themePostTypes = array(
//'Testimonials' => 'Testimonial'

);

function createPostTypes() {

	global $themePostTypes;
 
	$defaultArgs = array(
		'taxonomies' => array('category'), // uncomment this line to enable custom post type categories
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		#'menu_icon' => '',
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true, // to enable archive page, disabled to avoid conflicts with page permalinks
		'menu_position' => null,
		'can_export' => true,
		'supports' => array( 'title', 'editor', 'thumbnail', /*'custom-fields', 'author', 'excerpt', 'comments'*/ ),
	);

	foreach( $themePostTypes as $postType => $postTypeSingular ) {

		$myArgs = $defaultArgs;
		$slug = 'vcs-starter' . '-' . sanitize_title( $postType );
		$labels = makePostTypeLabels( $postType, $postTypeSingular );
		$myArgs['labels'] = $labels;
		$myArgs['rewrite'] = array( 'slug' => $slug, 'with_front' => true );
		$functionName = 'postType' . $postType . 'Vars';

		if( function_exists($functionName) ) {
			
			$customVars = call_user_func($functionName);

			if( is_array($customVars) && !empty($customVars) ) {
				$myArgs = array_merge($myArgs, $customVars);
			}
		}

		register_post_type( $postType, $myArgs );

	}
}

if( isset( $themePostTypes ) && !empty( $themePostTypes ) && is_array( $themePostTypes ) ) {
	add_action('init', 'createPostTypes', 0 );
}


function makePostTypeLabels( $name, $nameSingular ) {

	return array(
		'name' => _x($name, 'post type general name'),
		'singular_name' => _x($nameSingular, 'post type singular name'),
		'add_new' => _x('Add New', 'Example item'),
		'add_new_item' => __('Add New '.$nameSingular),
		'edit_item' => __('Edit '.$nameSingular),
		'new_item' => __('New '.$nameSingular),
		'view_item' => __('View '.$nameSingular),
		'search_items' => __('Search '.$name),
		'not_found' => __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Bin'),
		'parent_item_colon' => ''
	);
}

if( function_exists('acf_add_options_page') ) {
acf_add_options_page();
}

?>
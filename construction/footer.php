<footer>
	<section class="fifth" style=" <?php if ( get_field('fis_fifth_background', 'option')) ?> background-image: url(<?php echo get_field('fis_fifth_background', 'option')["sizes"]["large"];?>);">
	<div class="site_menu container flex">
		<div class="both logo_final final">
			<a href="<?php echo site_url(); ?>"><img src="<?php echo get_field('fis_fifth_section_logo', 'option')["url"]; ?>" alt="<?php bloginfo('name'); ?>"/></a>
			<?php the_field('fis_fifth_section_text', 'option');?>
		</div>
		<div class="three final">
			<?php the_field('fis_first_menu_title', 'option');?>
			<?php
	      	$args = [
	      		'menu_class' => 'three final',
	      		'menu' => get_field('fis_fifth_first_menu', 'option'),
	      		'container' => false
	      	];
	      	wp_nav_menu($args); 
	      	?>
		</div>
		<div class="three final">
			<?php the_field('fis_second_menu_title', 'option');?>
			<?php
	      	$args1 = [
	      		'menu_class' => 'three final',
	      		'menu' => get_field('fis_fifth_second_menu', 'option'),
	      		'container' => false
	      	];
	      	wp_nav_menu($args1);  
	      	?>
		</div>
		<div class="three final">
			<?php the_field('fis_third_menu_title', 'option');?>
			<?php
	      	$args2 = [
	      		'menu_class' => 'three final',
	      		'menu' => get_field('fis_fifth_third_menu', 'option'),
	      		'container' => false
	      	];
	      	wp_nav_menu($args2); 
	      	?>
		</div>
		<div class="both final">
			<?php the_field('fis_fifth_section_contacts', 'option');
				if( have_rows('fis_fifth_contacts_repeater', 'option')){?>
					<div class="uli">
					<?php
					while ( have_rows('fis_fifth_contacts_repeater', 'option')){
						the_row();
						?>
						<div class="lis">
						<?php the_sub_field('fis_fifth_icon_r', 'option'); ?>
						<a href="<?php echo  get_sub_field('fis_fifth_contact_field_r', 'option')["url"]; ?>" target="<?php echo get_sub_field('fis_fifth_contact_field_r', 'option')["target"];?>"><?php echo get_sub_field('fis_fifth_contact_field_r', 'option')["title"]; ?></a></div>
						<?php 
					}
					?></div>	
					<?php
				}
			?>
		</div>
	</div>
</section>


<div class="mainfooter">
<div class="container footer flex">

<div class="kaz foo">
	<p><span><i class="fas fa-at"></i></span><?php _e('Copyrights free-psd-templates.com');?></p>
</div>
<div class="bottom-menu foo">
	<?php
	$foo = [
		'menu_class' => 'flex',
		'container' => false,
		'theme_location' => 'footer-navigation'
	];
	wp_nav_menu($foo); 
	?>
</div>
<div class="social foo">
	<?php
	// check if the repeater field has rows of data
	if( have_rows('foo_social_footer_menu', 'option') ):
	 	?><div class="flex"><?php
	    while ( have_rows('foo_social_footer_menu', 'option') ) : the_row();
	        $link = get_sub_field('foo_social_menu_link');
	        ?>
	        <a href="<?php echo $link["url"]; ?>" target="<?php echo $link["target"]; ?>"><?php the_sub_field('foo_social_menu_icon'); ?></a>
	        <?php
	    endwhile;
	    ?></div><?php
	endif;

?>
 				
</div>
</div>
</div>				
</footer>
<?php wp_footer(); ?>	
</body>

</html>	

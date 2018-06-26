<?php

/* Template Name: Services */

get_header();

?>

<div class="ban" style="background: url(<?php echo get_field('s_services_banner')["sizes"]["large"];?>) background-size: cover;">
	<div class="layer">
	 	<div class="p-headtitle container">
	 		<?php the_field('s_services_banner_title');?>
		</div>
	</div>	
</div>

<div class="s-first">
<div class="container s-subtitle"><?php the_field('s_services_subtitle');?></div>
	<div class="s-content container flex">
		<div class="s-paragraph">
			<div class="s-p1"><?php the_field('s_services_description_title');?></div>
			<div class="s-p2"><?php the_field('s_services_description_text');?></div>
			<div class="s-p3"><a href="<?php echo  get_field('s_services_description_link')["url"]; ?>" target="<?php echo get_field('s_services_description_link')["target"];?>"><?php echo get_field('s_services_description_link')["title"]; ?></a></div>
		</div>
		<?php
		$image = get_field('s_services_description_picture');
		?>
		<div class="s-pic"><img src="<?php echo $image["sizes"]["large"]; ?>" alt="<?php echo $image["alt"]; ?>"></div>	
	</div>
</div>	

<div class="s-second">
	<div class="s-gallery container flex">
		<?php
			if( have_rows('s_services_pictures_repeater')){
				while ( have_rows('s_services_pictures_repeater')){
					the_row(); ?>
					<div class="s-section">
						<img src="<?php echo get_sub_field('s_services_picture_r')["sizes"]["large"]; ?>" alt="<?php echo get_sub_field('s_services_picture_r')["alt"]; ?>">
						<?php the_sub_field('s_services_description_r');?>
					</div>	
				<?php
 				}
 			}
 		?>		
	</div>
</div>

<div class="s-third">
	<div class="s-paint container flex">
		<?php
			if( have_rows('s_services_detailed_repeater')){
				while ( have_rows('s_services_detailed_repeater')){
					the_row(); ?>
					<div class="s-inside"><img src="<?php echo get_sub_field('s_services_detailed_picture_r')["sizes"]["large"]; ?>" alt="<?php echo get_sub_field('s_services_detailed_picture_r')["alt"]; ?>"></div>
					<div class="s-inside">
						<?php the_sub_field('s_services_detailed_title_r');?>
						<?php the_sub_field('s_services_detailed_description_r');?>
					</div>
				<?php
				}
			}
		?>					
	</div>
</div>

<section class=fourth>
<div class="john_doe container" style=" <?php if ( get_field('fs_quotation_background',7)) ?> background-image: url(<?php echo get_field('fs_quotation_background',7)["sizes"]["large"];?>);">
 	<div class="fab"><?php the_field('fs_quotation_icon', 7); ?></div>
 		<?php the_field('fs_quotation_author', 7); ?>
 		<?php the_field('fs_quotation_text', 7); ?>
 	</div>

 	<div class="trademarks container flex">
		<div class="owl-carousel">
			<?php
				if( have_rows('fs_carousell', 7)){
					while ( have_rows('fs_carousell', 7)){
						the_row();
							?>
							<img src="<?php echo get_sub_field('fs_carousell_image_r', 7)["sizes"]["large"]; ?>" alt="<?php echo get_sub_field('fs_carousell_image_r', 7)["alt"]; ?>">
							<?php
					}
				}
				?>	
		</div>
	</div>
</section>			

<!-- Start Point -->

<?php get_footer(); ?>
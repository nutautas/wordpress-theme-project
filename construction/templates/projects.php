<?php

/* Template Name: Projects */

get_header();

?>

<div class="ban" style="background: url(<?php echo get_field('p_banner_image')["sizes"]["large"];?>) background-size: cover;">
	<div class="layer">
	 	<div class="p-headtitle container">
	 		<?php the_field('p_banner_title');?>
		</div>
	</div>	
</div>

<div class="p-gallery">
	<div class="container p-subtitle"><?php the_field('p_page_title');?></div>
	<div class="container flex p-pic">
		<?php
			if( have_rows('p_page_gallery')){
				while ( have_rows('p_page_gallery')){
					the_row();?>
					<div class="p-img">
						<img src="<?php echo get_sub_field('p_gallery_picture_r')["sizes"]["large"]; ?>" alt="<?php echo get_sub_field('p_gallery_picture_r')["alt"]; ?>">
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
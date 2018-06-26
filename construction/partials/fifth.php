<section class=fourth>
<div class="john_doe container" style=" <?php if ( get_field('fs_quotation_background')) ?> background-image: url(<?php echo get_field('fs_quotation_background')["sizes"]["large"];?>);">
 	<div class="fab"><?php the_field('fs_quotation_icon'); ?></div>
 		<?php the_field('fs_quotation_author'); ?>
 		<?php the_field('fs_quotation_text'); ?>
 	</div>

 	<div class="trademarks container flex">
 		<div class="owl-carousel">
 			<?php
			if( have_rows('fs_carousell')){
				while ( have_rows('fs_carousell')){
					the_row();
					?>
					<img src="<?php echo get_sub_field('fs_carousell_image_r')["sizes"]["large"]; ?>" alt="<?php echo get_sub_field('fs_carousell_image_r')["alt"]; ?>">
					<?php
 				}
 			}
 			?>	
 		</div>
 	</div>
 </section>			
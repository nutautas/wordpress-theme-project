<section class="fourth">
	<div class="container">
		<?php the_field('fs_title');?>
	</div>
	<div class="container">
		<?php
		if( have_rows('fr_description_fields')){
			?><?php
			$a = 1;
			while ( have_rows('fr_description_fields')){
				the_row();
				?><div class=" what_we_do flex"><?php
				if ($a%2!=0){
				?>
					<div class="inner">
						<?php the_sub_field('fs_description_title_r');?>
						<?php the_sub_field('fr_description_text_r');?>
					</div>
					<div class="inner pic">
						<img src="<?php echo get_sub_field('fs_description_picture_r')["sizes"]["large"]; ?>" alt="<?php echo get_sub_field('fs_description_picture_r')["alt"]; ?>">
					</div>
				<?php } else { ?>
				<div class="inner pic">
						<img src="<?php echo get_sub_field('fs_description_picture_r')["sizes"]["large"]; ?>" alt="<?php echo get_sub_field('fs_description_picture_r')["alt"]; ?>">
				</div>
				<div class="inner">
						<?php the_sub_field('fs_description_title_r');?>
						<?php the_sub_field('fr_description_text_r');?>
				</div>
				<?php				
			} $a++; ?></div><?php }
			?>
			
		<?php
		}
	?>
	</div>
</section>
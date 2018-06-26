<section class="third" style=" <?php if ( get_field('ts_section_background')) ?> background-image: url(<?php echo get_field('ts_section_background')["sizes"]["large"];?>);">
	<div class="container">
		<?php the_field('ts_main_title');?>
	</div>
	<div class="container">
		<?php
			if( have_rows('ts_section_features')){
				?><div class="flex"><?php
				while ( have_rows('ts_section_features')){
					the_row();
					?>
						<div class="list">
						<?php the_sub_field('ts_feature_title_r');?>
						<?php the_sub_field('ts_feature_description_r');?>
						</div>
					<?php				
				}
				?>
			</div>
			<?php
			}
		?>
	</div>
	<div class="container learn_more">
		<a href="<?php echo  get_field('ts_link_button')["url"]; ?>" target="<?php echo get_field('ts_link_button')["target"];?>"><?php echo get_field('ts_link_button')["title"]; ?></a>
	</div>
</section>
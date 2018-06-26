<section class="second">
	<div class="container">
		<div class="black_box">
			<div id="first">
				<?php the_field('ss_title');?>
			</div>
			<?php the_field('ss_icon'); ?>
		</div>	
	</div>
	<div class="scs container flex">
		<div class="paragraph">
			<div id="p1"><?php the_field('ss_subtitle');?></div>
			<div id="p2"><?php the_field('ss_text');?> </div>
			<div  id="p3"><a href="<?php echo  get_field('ss_link')["url"]; ?>" target="<?php echo get_field('ss_link')["target"];?>"><?php echo get_field('ss_link')["title"]; ?></a></div>
		</div>
		<?php
		$image = get_field('ss_image');
		?>
		<img id="bridge" src="<?php echo $image["sizes"]["medium"]; ?>" alt="<?php echo $image["alt"]; ?>">	
	</div>
</section>
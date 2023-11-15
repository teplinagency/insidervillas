<?php
/**
 * Template Post Type: boat
 */
get_header();
?>
<?php $yacht_name = get_the_title(); ?>
<main>
	<div class="page-top" style="background-image: url(<?php the_field('block1_bg_image'); ?>);">
		<div class="container">
			<h1 class="h1">
				<?php echo str_replace('%name%', $yacht_name, get_field('block1_h1_long_name')); ?>
			</h1> 
			<div class="desc"><?php the_field('block1_short_description'); ?></div>
			
			<?php $btn = get_field('block1_button'); ?>	
			<a href="javascript:;" data-fancybox data-src="#request-yacht" class="btn-1">
				<?php echo $btn["btn_text"]; ?>
			</a>
		</div>  
	</div>

	<section class="what-makes">
		<div class="container">
			<div class="what-makes__body">
				<div class="what-makes__left">
					<h3 class="h3">
						<?php echo str_replace('%name%', $yacht_name, get_field('block2_title')); ?>
					</h3>
					<div class="desc">
						<?php the_field('block2_description'); ?>
					</div>
				</div>
				
				<?php $block2_images = get_field('block2_right_images'); ?>
				<div class="what-makes__images">
					<?php if($block2_images["image_1"]) : ?>
						<div class="reveal img1">
							<?php echo wp_get_attachment_image($block2_images["image_1"], 'full'); ?>
						</div>
					<?php endif; ?>
					
					<?php if($block2_images["image_2"]) : ?>
						<div class="reveal img2">
							<?php echo wp_get_attachment_image($block2_images["image_2"], 'full'); ?>
						</div>
					<?php endif; ?>
					<svg width="310" height="348" viewBox="0 0 310 348" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.15" d="M164.246 1.23047C187.527 10.898 208.941 23.3769 229.861 37.5329C253.822 53.7463 280.502 71.6397 292.556 99.2887C303.13 123.542 304.436 156.104 307.682 182.43C311.692 214.959 304.522 235.06 283.167 259.729C255.848 291.287 225.042 319.644 184.379 331.603C125.806 348.831 61.1788 346.729 0.884766 346.729" stroke="#1F5465"/></svg>
				</div>
			</div>
			<?php if(have_rows('block2_offer_list')) : ?>
				<div class="subtitle"><?php the_field('block2_offer_list_title'); ?></div>
				<div class="what-makes__items">
					<?php while(have_rows('block2_offer_list')) : the_row(); ?>
						<div class="what-makes__item">
							<div class="ico">
								<?php $svg = file_get_contents(get_sub_field('icon')); ?>
								<?php echo $svg; ?>
							</div>
							<div class="desc">
								<?php the_sub_field('text'); ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>


	<section class="the-duo the-duo2 the-duo3 color scroll" data-color="#F3FAFC">
		<div class="container">
			<div class="the-duo__title">
				<div class="the-duo__left">
					<h3 class="h3"><?php the_field('block3_title'); ?></h3>
					<div class="subtitle"><?php the_field('block3_subtitle'); ?></div>        
				</div>
				<div class="desc"><?php the_field('block3_description'); ?></div>
			</div>
		</div>
		<div class="scroll__body">
			<?php echo wp_get_attachment_image(get_field('block3_image'), 'full'); ?>
		</div>
		<div class="container bottom">
			<div class="description">
				<?php the_field('block3_text_on_image'); ?>
			</div>
		</div>
	</section>

	<section class="charter">
		<div class="container">
			<?php 
			$t1 = get_field('block4_left_text');
			$t2 = get_field('block4_right_text')
			?>
			<?php if($t1 || $t2) : ?>
				<div class="charter__top">
					<h4 class="h4"><?php echo $t1; ?></h4>
					<div class="desc"><?php echo $t2; ?></div>
				</div>
			<?php endif; ?>
			
			<div class="charter__body">
				
				<?php $left_content_block = get_field('block4_left_content_block'); ?>
				<div class="charter__left">
					<div class="img">
						<?php echo wp_get_attachment_image($left_content_block["image"], 'full'); ?>
					</div>
					<h4 class="h4"><?php echo $left_content_block["text"]; ?></h4>
					<div class="subtitle"><?php echo $left_content_block["small_text"]; ?></div>
					
					<?php $btn = $left_content_block["button"]; ?>
					<a href="javascript:;" data-fancybox data-src="#request-yacht" class="btn-2">
						<?php echo $btn["btn_text"]; ?>
					</a>
				</div>
				
				<?php $right_content_block = get_field('block4_right_content_block'); ?>
				<div class="charter__right">
					<div class="text">
						<h3 class="h3">
							<?php echo str_replace('%name%', $yacht_name, $right_content_block["title"]); ?>
						</h3>
						<div class="desc">
							<?php echo $right_content_block["text"]; ?>
						</div>
					</div>
					<div class="img2">
						<?php echo wp_get_attachment_image($right_content_block["image"], 'full'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>



	<?php get_template_part('template-parts/contact_us'); ?>          
</main>

<?php get_footer(); ?>
<?php
/**
 * Template name: Our Experience
 */
get_header();
?>

<main>
	<div class="page-top experiences" style="background-image: url(<?php the_field('block1_bg_image'); ?>);">
		<div class="container">
			<h1 class="h1"><?php the_field('block1_page_title'); ?></h1> 
		</div> 
		
		<?php
		$args = array(
			'post_type' => 'places',
			'posts_per_page' => -1,
			'orderby' => 'ID',
			'order' => 'ASC'
		);
		
		$places_posts = new WP_Query($args);
		?>
		
		<?php if($places_posts->have_posts()) : ?>
			<div class="experiences-menu">
				<ul>
					<?php while($places_posts->have_posts()) : $places_posts->the_post(); ?>
						<li>
							<?php $short_name = trim(strtok(get_the_title(), '&')); ?>
							<a href="#<?php echo ($places_posts->current_post + 1); ?>" class="<?php echo ($places_posts->current_post == 0) ? 'active' : ''; ?>">
								<?php echo $short_name; ?>
							</a>
						</li>
					<?php endwhile; ?>
				</ul>
			</div> 
		<?php endif; ?>
		<?php wp_reset_postdata(); ?>
	</div>

	<section class="experiences-page">
		<div class="container">
			<div class="experiences-page__title">
				<div class="desc"><?php the_field('block2_text_left'); ?></div>
				<h4 class="h4"><?php the_field('block2_text_right'); ?></h4>
			</div>
			
			<?php if($places_posts->have_posts()) : ?>
				<div class="experiences-page__items">
					<?php while($places_posts->have_posts()) : $places_posts->the_post(); ?>
						<div class="experiences-page__item <?php echo ($places_posts->current_post % 2 != 0) ? 'reverse' : ''; ?>" id="<?php echo ($places_posts->current_post + 1); ?>">
							<div class="text">
								<div class="subtitle">
									<?php the_field('slogan'); ?>
								</div>
								<h3 class="h3"><?php the_title(); ?></h3>
								<div class="desc"><?php the_content(); ?></div>
								<a href="javascript:;" data-fancybox data-src="#request-area" class="btn-2" data-area-name="<?php the_title(); ?>">Request access</a>
							</div>
							<div class="images">
								<?php echo wp_get_attachment_image(get_field('main_image'), 'full', '', array('class' => 'img1')); ?>
								<?php echo wp_get_attachment_image(get_field('secondary_image'), 'full', '', array('class' => 'img2')); ?>
							</div>
							<svg class="element-bg-1 svg-1" width="1152" height="633" viewBox="0 0 1152 633" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.15" d="M1151.03 0.910156C944.777 80.2378 721.543 65.8984 509.356 120.434C449.266 135.879 391.764 159.527 337.999 190.475C268.242 230.63 197.358 280.311 140.358 337.311C98.4336 379.235 61.374 430.473 35.6643 484C12.0262 533.214 4.57947 579.11 1.30469 632.598" stroke="#1F5465"/></svg>
							<svg class="element-bg-1 svg-2" width="1135" height="617" viewBox="0 0 1135 617" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.15" d="M0.605469 0.84375C17.3345 47.5696 57.6282 83.9603 94.5804 115.376C129.963 145.457 169.42 158.278 213.811 169.411C327.719 197.98 447.31 188.435 563.574 191.73C700.146 195.601 832.891 235.639 930.957 334.748C983.017 387.362 1021.94 454.571 1065.75 513.888C1090.54 547.445 1115.23 579.802 1134.47 616.673" stroke="#1F5465"/></svg>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</section>

	<?php get_template_part('template-parts/contact_us'); ?>
	
</main>


<?php get_footer(); ?>
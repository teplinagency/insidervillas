<?php
/**
 * Template name: Concierge
 */
get_header();
?>

<main>
	<div class="page-top concierge-top" style="background-image: url(<?php echo the_field('block1_bg_image'); ?>);">
		<div class="container">
			<h1 class="h1"><?php echo the_field('block1_title'); ?></h1> 
			<div class="desc"><?php echo the_field('block1_text'); ?></div>
		</div>  
	</div>

	<section class="your-story">
		<div class="container">
			<div class="your-story__body">
				<div class="your-story__left">
					<h3 class="h3"><?php echo the_field('block2_title'); ?></h3>
					<div class="desc"><?php echo the_field('block2_text'); ?></div>
				</div>
				<?php $block2_images = get_field('block2_images'); ?>
				<div class="your-story__img">
					<?php echo wp_get_attachment_image($block2_images["image_1"], 'full', '', array('class' => 'img1')); ?>
					<?php echo wp_get_attachment_image($block2_images["image_2"], 'full', '', array('class' => 'img2')); ?>
				</div>
			</div>
		</div>
	</section>

	<section class="the-duo the-duo2 color scroll" data-color="#F3FAFC">
		<div class="container">
			<div class="the-duo__title">
				<h3 class="h3"><?php echo the_field('block3_title'); ?></h3>
				<div class="desc"><?php echo the_field('block3_text'); ?></div>
			</div>
		</div>
		<div class="scroll__body">
			<?php echo wp_get_attachment_image(get_field('block3_image'), 'full'); ?>
		</div>
		<div class="container bottom">
			<div class="description"><?php echo the_field('block3_text_on_image'); ?></div>
		</div>
	</section>

<?php if(have_rows('block4_content_blocks')) : ?>
	<section class="text-and-2-img-container jets">
		<?php while(have_rows('block4_content_blocks')) : the_row(); ?>
			<div class="text-and-2-img <?php echo (get_row_index() % 2 == 0) ? 'reverce' : ''; ?>" >
				<div class="container"> 
					<div class="text-and-2-img__body">
						<?php $images = get_sub_field('images'); ?>
						<div class="text-and-2-img__images">
							<?php echo wp_get_attachment_image($images["image_1"], 'full', '', array('class' => 'img1')); ?>
							<?php echo wp_get_attachment_image($images["image_2"], 'full', '', array('class' => 'img2')); ?>
						</div>
						<div class="text-and-2-img__text">
							<h3 class="h3"><?php echo the_sub_field('title'); ?></h3>
							<div class="desc">
								<?php echo the_sub_field('text'); ?>
							</div>
						</div>
					</div> 
				</div>
			</div>
		<?php endwhile; ?>
	</section> 
<?php endif; ?>
	
	
	<section class="fixed-image fixed-concierge color" data-color="#F3FAFC"> 
		<div class="title"><h3 class="h3"><?php echo the_field('block5_title'); ?></h3></div> 
		<div class="container">
			
			<div class="fixed-image__left">
				<?php if(have_rows('block5_content_blocks')) : ?>
					<?php while(have_rows('block5_content_blocks')) : the_row(); ?>
						<div class="fixed-image__item <?php echo (get_row_index() == 1) ? 'active' : '' ?>" id="<?php echo get_row_index(); ?>">
							<div class="image">
								<?php echo wp_get_attachment_image(get_sub_field('image'), 'full', '', array('class' => 'mob-2')); ?>
							</div>
							<div class="arrows">
								<div class="prev3">
									<svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.4146 0.983607L6.431 0L0.434929 5.99607L6.43886 12L7.42247 11.0164L3.0946 6.68852H33V5.30361L3.0946 5.30361L7.4146 0.983607Z" fill="#1F5465"/></svg>
								</div>
								<div class="next3">
									<svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.5854 0.983607L26.569 0L32.5651 5.99607L26.5611 12L25.5775 11.0164L29.9054 6.68852H0V5.30361L29.9054 5.30361L25.5854 0.983607Z" fill="#1F5465"/></svg>
								</div>
							</div>
							<h4 class="h4"><?php the_sub_field('title'); ?></h4>
							<div class="desc"> 
								<?php the_sub_field('text'); ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<?php $btn = get_field('block5_button'); ?>
				<a href="javascript:;" data-fancybox data-src="#request-concierge" class="btn-2">
					<?php echo $btn["btn_text"]; ?>
				</a>  
			</div>
			
			
					
			<div class="fixed-image__right">
				<?php if(have_rows('block5_content_blocks')) : ?>
					<?php while(have_rows('block5_content_blocks')) : the_row(); ?>
						<div class="sticky-thumb id<?php echo get_row_index(); ?> <?php echo (get_row_index() == 1) ? 'active' : '' ?>">
							<?php echo wp_get_attachment_image(get_sub_field('image'), 'full'); ?>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>				
			</div>
		</div>
	</section>


	<?php get_template_part('template-parts/contact_us'); ?>  
	<?php get_template_part('template-parts/modals/request-concierge'); ?>
	
</main>

<script type="text/javascript">
	jQuery(function($) {
		var sections = $('.fixed-image__item');
		$(window).on('scroll', function() {
			var cur_pos = $(this).scrollTop();

			sections.each(function() {
				var top = $(this).offset().top - 150,
					bottom = top + $(this).outerHeight();

				if (cur_pos >= top && cur_pos <= bottom) {
					$('.fixed-image__item').removeClass('active');
					$('.sticky-thumb').removeClass('active');

					$(this).addClass('active');
					$('.id' + $(this).attr('id') + '').addClass('active');
				}
			});
		});
	});
</script>

<?php get_footer(); ?>
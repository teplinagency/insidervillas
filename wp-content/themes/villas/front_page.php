<?php
/**
 * Template name: Home page
 */
get_header();
?>

<main>
	<div class="page-top" style="background-image: url(<?php the_field('block1_bg_image'); ?>);">
		<div class="container">
			<h1 class="h1"><?php the_field('block1_title'); ?></h1>
			<div class="desc"><?php the_field('block1_subtitle'); ?></div>
		</div> 

		<div class="page-top__search">
			<div class="container">
				<?php get_template_part('template-parts/search_form'); ?>        
			</div>
		</div>
	</div>

	<section class="text-and-img">
		<div class="container">
			<?php $content_block1 = get_field('block2_content_block_1'); ?>
			<div class="text-and-img__item">
				<div class="img reveal">
					<?php echo wp_get_attachment_image($content_block1["image"], 'full', '', array('class' => 'img_1')); ?>
				</div>
				<div class="text">
					<h3 class="h3"><?php echo $content_block1["title"]; ?></h3>
					<div class="desc"><?php echo $content_block1["description"]; ?></div>
				</div>

				<svg class="element-bg-1" width="610" height="181" viewBox="0 0 610 181" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path opacity="0.15" d="M1 0.5C1 0.5 90.8141 65.2743 157 87C287.111 129.709 392.364 -9.4094 507 65.5C557.13 98.2579 609 180 609 180" stroke="#1F5465"/>
				</svg>
			</div>

			<?php $content_block2 = get_field('block2_content_block_2'); ?>
			<div class="text-and-img__item">
				<div class="text">
					<h3 class="h3"><?php echo $content_block2["title"]; ?></h3>
					<div class="subtitle"><?php echo $content_block2["subtitle"]; ?></div>
					<div class="desc"><?php echo $content_block2["description"]; ?></div>
				</div>
				<div class="img">
					<div class="reveal">
						<?php echo wp_get_attachment_image($content_block2["image_1"], 'full', '', array('class' => 'img_1')); ?>
					</div>
					<div class="images">
						<div class="reveal">
							<?php echo wp_get_attachment_image($content_block2["image_2"], 'full', '', array('class' => 'img_2')); ?>
						</div>
						<div class="reveal">
							<?php echo wp_get_attachment_image($content_block2["image_3"], 'full', '', array('class' => 'img_3')); ?>
						</div>
					</div>         
				</div>
				<svg class="element-bg-2" width="205" height="300" viewBox="0 0 205 300" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path opacity="0.15" d="M28.5 0.5C28.5 0.5 166.278 20.957 197.5 88.5C244.801 190.829 0.5 299.5 0.5 299.5" stroke="#1F5465"/>
				</svg> 
			</div>
		</div>
	</section>

	<section class="make-your color text-an" data-color="#F3FAFC">
		<div class="container split-parent">
			<h2 class="h2">
				<?php the_field('block3_text_row_1'); ?>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/make-your1.png" alt="">  <br>      
				<?php the_field('block3_text_row_2'); ?>  <br>
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/make-your2.png" alt="">   
				<?php the_field('block3_text_row_3'); ?>
			</h2>
		</div>
	</section>

	<section class="live-in">
		<div class="container">
			<h3 class="h3"><?php the_field('block4_title'); ?></h3>
			<div class="live-in__body">
				
				<?php $content_block1 = get_field('block4_left_content_block'); ?>
				<div class="live-in__left">
					<div class="img">
						<?php echo wp_get_attachment_image($content_block1["image"], 'full'); ?>
					</div>
					<div class="desc"><?php echo $content_block1["text_1"]; ?></div>
					<h4 class="h4">
						<?php echo $content_block1["text_2"]; ?>
					</h4>
					<div class="desc"><?php echo $content_block1["text_3"]; ?></div>
					<svg class="element-bg-1" width="297" height="50" viewBox="0 0 297 50" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path opacity="0.15" d="M0.5 0.5C0.5 0.5 78.6158 42.5631 133.5 48C197.79 54.3687 296 17 296 17" stroke="#1F5465"/>
					</svg>
				</div>
				
				<?php $content_block2 = get_field('block4_right_content_block'); ?>
				<div class="live-in__right">
					<div class="desc"><?php echo $content_block2["text_1"]; ?></div>
					<div class="images">
						<div class="img"><?php echo wp_get_attachment_image($content_block2["image_1"], 'full'); ?></div>
						<div class="img"><?php echo wp_get_attachment_image($content_block2["image_2"], 'full'); ?></div>
					</div>
					<svg class="element-bg-2" width="263" height="372" viewBox="0 0 263 372" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path opacity="0.15" d="M40.5738 3.13724C58.6717 2.7679 76.7595 1.13111 94.8848 0.815886C109.72 0.557882 121.332 4.78795 135.005 10.4079C160.244 20.7817 181.439 34.9808 200.747 54.426C229.026 82.9056 250.453 120.378 258.518 159.763C265.984 196.218 261.445 234.735 235.042 262.691C224.75 273.588 211.427 281.45 196.28 276.926C189.317 274.846 170.493 268.263 169.869 259.362C169.31 251.405 174.076 246.842 181.87 246.748C197.73 246.557 214.634 254.483 216.208 271.801C218.957 302.035 183.161 321.169 162.16 335.354C149.595 343.841 137.094 352.682 122.741 357.91C112.77 361.542 103.829 362.819 93.3518 363.867C62.3317 366.969 31.6112 370.524 0.366211 370.524" stroke="#1F5465"/>
					</svg>
				</div>
			</div>
		</div>
	</section>

	<section class="stroll color" data-color="#F3FAFC">
		<div class="container">
			<h3 class="h3">
				<?php the_field('block5_title'); ?>
			</h3>
			<div class="subtitle"><?php the_field('block5_subtitle'); ?></div>
			<div class="stroll__body">
				<?php echo wp_get_attachment_image(get_field('block5_image'), 'full'); ?>
			</div>
			
			<?php $btn = get_field('block5_button'); ?>
			<a href="<?php echo $btn["btn_link"]; ?>" class="btn-1">
				<?php echo $btn["btn_text"]; ?>
			</a>
		</div>
	</section>

	<section class="concierge">
		<div class="container">
			<div class="concierge__title">
				<h3 class="h3"><?php the_field('block6_title'); ?></h3>
				<div class="desc"><?php the_field('block6_text'); ?></div>
			</div>

			<div class="concierge__img-text">
				<?php echo wp_get_attachment_image(get_field('block6_image_1'), 'full'); ?>
				<div class="description"><?php the_field('block6_text_on_image'); ?></div>
			</div>  

			<div class="concierge__body">
				<div class="concierge__left">
					<h4 class="h4"><?php the_field('block6_subtitle'); ?></h4>
					
					<?php if(have_rows('block6_list')) : ?>
						<div class="concierge__items">
							<?php while(have_rows('block6_list')) : the_row(); ?>
								<div class="concierge__item">
									<div class="ico">
										<img src="<?php the_sub_field('icon');  ?>" alt="">
									</div>
									<p><?php the_sub_field('text');  ?></p>
								</div>
							<?php endwhile; ?>
						</div>
					<?php endif; ?>

					<div class="subtitle"><?php the_field('block6_additional_text'); ?></div>
				</div>
				<div class="concierge__right">
					<?php echo wp_get_attachment_image(get_field('block6_image_2'), 'full'); ?>
				</div>
			</div>
			<svg class="element-bg-1" width="843" height="1314" viewBox="0 0 843 1314" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.15" d="M648.254 1C699.768 18.8516 747.076 55.2204 782.781 96.1844C813.691 131.647 824.365 184.786 833.546 229.725C842.536 273.728 845.724 323.606 837.494 367.918C824.315 438.882 788.574 505.951 756.834 569.991C728.531 627.098 697.197 677.311 648.818 719.325C578.611 780.294 492.159 822.742 411.35 867.389C297.533 930.273 178.472 986.671 93.5051 1088.22C62.2175 1125.61 33.9477 1164.12 19.8959 1211.75C10.1778 1244.68 3.44552 1279.04 1 1313.28" stroke="#1F5465"/>
			</svg>
		</div>
	</section>


	<section class="take-place color" data-color="#F3FAFC">
		<div class="container">
			<div class="take-place__titile">
				<h3 class="h3"><?php the_field('block7_title'); ?></h3>
				<div class="desc"><?php the_field('block7_text_1'); ?></div>
			</div>
			<div class="take-place_body">
				<div class="take-place__left">
					<div class="subtitle"><?php the_field('block7_subtitle'); ?></div>
					<div class="desc"><?php the_field('block7_text_2'); ?></div>
					
					<?php $btn = get_field('block7_button'); ?>
					<a href="<?php echo $btn["btn_link"]; ?>" class="btn-2">
						<?php echo $btn["btn_text"]; ?>
					</a>
				</div>
				<?php $images = get_field('block7_images'); ?>
				<?php if($images) : ?>
					<div class="take-place__right">
						<?php echo wp_get_attachment_image($images["image_1"], 'full', '', array('class' => 'img1')); ?>
						<?php echo wp_get_attachment_image($images["image_2"], 'full', '', array('class' => 'img2')); ?>
						<?php echo wp_get_attachment_image($images["image_3"], 'full', '', array('class' => 'img3')); ?>
						<?php echo wp_get_attachment_image($images["image_4"], 'full', '', array('class' => 'img4')); ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<section class="our-concierge">
		<div class="container">
			<div class="our-concierge__title">
				<div class="subtitle"><?php the_field('block8_title'); ?></div>
				<h3 class="h3"><?php the_field('block8_subtitle'); ?></h3>
			</div>
		</div>
		<div class="our-concierge__body">
			<div class="our-concierge__left">
				
				<?php if(have_rows('block8_images_slider')) : ?>
					<div class="our-concierge-slider">
						<?php while(have_rows('block8_images_slider')) : the_row(); ?>
							<?php echo wp_get_attachment_image(get_sub_field('image'), 'full'); ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
				
				<div class="desc"><?php the_field('block8_text_1'); ?></div>
			</div>
			<div class="our-concierge__right">
				<div class="desc"><?php the_field('block8_right_text_1'); ?></div>
				<div class="desc2"><?php the_field('block8_right_text_2'); ?></div>
				<h4 class="h4"><?php the_field('block8_right_text_3'); ?></h4>

				<div class="arrows">
					<div class="prev">
						<svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M7.4146 0.983607L6.431 0L0.434929 5.99607L6.43886 12L7.42247 11.0164L3.0946 6.68852H33V5.30361L3.0946 5.30361L7.4146 0.983607Z" fill="#1F5465"/>
						</svg>
					</div>
					<div class="next">
						<svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M25.5854 0.983607L26.569 0L32.5651 5.99607L26.5611 12L25.5775 11.0164L29.9054 6.68852H0V5.30361L29.9054 5.30361L25.5854 0.983607Z" fill="#1F5465"/>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="just-moment" style="background-image: url(<?php echo get_field('block9_bg_image'); ?>);">
		<div class="container">
			<h3 class="subtitle"><?php the_field('block9_block_title'); ?></h3>
		</div>
	</section>

	<?php get_template_part('template-parts/contact_us'); ?>         
</main>

<?php get_footer(); ?>
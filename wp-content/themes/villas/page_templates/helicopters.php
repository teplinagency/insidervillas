<?php
/**
 * Template name: Helicopters
 */
get_header();
?>

<main class="helicopter__page">
	<div class="page-top helicopters-top" style="background-image: url(<?php the_field('block1_bg_image'); ?>);">
		<div class="container">
			<h1 class="h1"><?php the_field('block1_title'); ?></h1> 
			<div class="desc"><?php the_field('block1_text'); ?></div>
			
			<?php $btn = get_field('block1_button'); ?>
			<a href="<?php echo $btn["btn_link"]; ?>" class="btn-1 link-to">
				<?php echo $btn["btn_text"]; ?>
			</a>
		</div>  
	</div>

	<div class="fixed-image">
		<div class="container">
			<div class="fixed-image__left">
				<?php $content_block1 = get_field('block2_content_block_1'); ?>
				<?php if($content_block1) : ?>
					<div class="fixed-image__item active" id="1">
						<div class="h3"><?php echo $content_block1["title"]; ?></div>
						<div class="desc"> 
							<?php echo $content_block1["text"]; ?>					
							<?php echo wp_get_attachment_image($content_block1["image"], 'full', '', array('class' => 'mob-1')); ?>
						</div>
					</div>
				<?php endif; ?>
				
				<?php $content_block2 = get_field('block2_content_block_2'); ?>
				<?php if($content_block2) : ?>	
					<div class="fixed-image__item" id="2">
						<div class="h3"><?php echo $content_block2["title"]; ?></div>
						<div class="desc">
							<?php echo $content_block2["text"]; ?>
							<?php echo wp_get_attachment_image($content_block2["image"], 'full', '', array('class' => 'mob-2')); ?>

							<?php $btn = get_field('block2_button'); ?>
							<?php if(!$btn["btn_link"]) : ?>
								<a href="javascript:;" data-fancybox data-src="#request-helicopter" class="btn-2 request_helicopter_btn">
									<?php echo $btn["btn_text"]; ?>
								</a>
							<?php else : ?>
								<a href="<?php echo $btn["btn_link"]; ?>"  class="btn-2">
									<?php echo $btn["btn_text"]; ?>
								</a>
							<?php endif; ?> 
							
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="fixed-image__right">
				<div class="sticky-thumb id1 active">
					<?php echo wp_get_attachment_image($content_block1["image"], 'full'); ?>
				</div>
				<div class="sticky-thumb id2">
					<?php echo wp_get_attachment_image($content_block2["image"], 'full'); ?>
				</div>
			</div>
		</div>
	</div>


	<section class="the-duo the-duo2 color scroll" data-color="#F3FAFC">
		<div class="container">
			<div class="the-duo__title">
				<h3 class="h3"><?php the_field('block3_title'); ?></h3>
				<div class="desc"><?php the_field('block3_text'); ?></div>
			</div>
		</div>
		<div class="scroll__body">
			<?php echo wp_get_attachment_image(get_field('block3_image'), 'full'); ?>
		</div>
		<div class="container bottom">
			<div class="description"><?php the_field('block3_text_on_image'); ?></div>
		</div>
	</section>


	<section class="text-and-2-img">
		<div class="container"> 
			<div class="text-and-2-img__body">
				<div class="text-and-2-img__images">
					<?php echo wp_get_attachment_image(get_field('block4_image_1'), 'full', '', array('class' => 'img1')); ?>
					<?php echo wp_get_attachment_image(get_field('block4_image_2'), 'full', '', array('class' => 'img2')); ?>
				</div>
				<div class="text-and-2-img__text">
					<h3 class="h3"><?php the_field('block4_title'); ?></h3>
					<div class="desc">
						<?php the_field('block4_text'); ?>
					</div>
				</div>
			</div>
			<svg class="element-bg-1" width="1486" height="1748" viewBox="0 0 1486 1748" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.15" d="M1402.62 1747.5C1455.12 1656 1497.97 1484.52 1481.04 1389.11C1470.63 1330.5 1453.69 1273.39 1423.46 1221.75C1391.03 1166.34 1349.29 1115.42 1295.94 1079.11C1255.89 1051.85 1211.83 1027.37 1167.74 1007.38C1033.99 946.765 879.45 917.854 734.341 902.264C553.808 882.868 362.26 883.74 191.701 813.633C149.543 796.304 113.768 767.819 78.4739 733.659C43.1797 699.5 25.2369 659.836 9.67966 617C-2.14154 584.451 0.0660272 540.433 2.75991 505.143C5.06595 474.934 17.1637 448.432 33.2654 423.108C69.3692 366.327 114.084 314.009 179.609 293.117C260.618 267.288 343.416 250.115 422.828 218.914C485.675 194.222 548.237 167.261 605.311 130.971C662.385 94.6808 815.18 1 815.18 1" stroke="#1F5465"/></svg>
		</div>
	</section>

	<?php if(have_rows('block5_list')) : ?>
	<section class="why-rent-helicopter">
		<div class="container">
			<div class="why-rent-helicopter__items">
				<div class="why-rent-helicopter__item">
					<h4 class="h4"><?php the_field('block5_list_title'); ?></h4>
				</div>
				<?php while(have_rows('block5_list')) : the_row(); ?>
					<div class="why-rent-helicopter__item">
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
		</div>
	</section>
	<?php endif; ?>

	<section class="the-world color" data-color="#F3FAFC">
		<div class="container">
			<div class="the-world__title">
				<h3 class="h3"><?php the_field('block6_title'); ?></h3>
				<div class="desc"><?php the_field('block6_text'); ?></div>
			</div>
			<div class="the-world__img">
				<?php echo wp_get_attachment_image(get_field('block6_image'), 'full'); ?>
			</div>
		</div>
	</section>

	<section class="text-and-2-img reverce">
		<div class="container">
			<svg class="element-bg-3" width="292" height="245" viewBox="0 0 292 245" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.15" d="M170.574 1C127.416 11.7566 78.8545 18.2402 43.6566 54.3111C36.3391 61.81 30.675 70.6879 25.333 80.2863C17.9806 93.497 9.21767 106.866 4.76262 122.094C0.84864 135.473 -0.751469 153.231 3.61428 166.87C10.2424 187.578 30.0541 198.682 44.9547 207.008C75.513 224.084 108.171 234.952 141.416 240.22C163.951 243.79 191.264 244.647 213.911 243.559C261.138 241.291 243.301 239.197 291 234.777" stroke="#1F5465"/>
			</svg>
			<div class="text-and-2-img__body">
				<div class="text-and-2-img__text">
					<h3 class="h3"><?php the_field('block7_title'); ?></h3>
					<div class="desc">
						<?php the_field('block7_text'); ?>
					</div>
				</div>
				<div class="text-and-2-img__images">
					<?php echo wp_get_attachment_image(get_field('block7_image_1'), 'full', '', array('class' => 'img1')); ?>
					<?php echo wp_get_attachment_image(get_field('block7_image_2'), 'full', '', array('class' => 'img2')); ?>
				</div>
			</div>
		</div>
	</section>


	<section class="finding finding2 color " data-color="#F3FAFC" id="all-helicopters">
		<div class="container">
			<div class="finding__top">
				<div class="finding__title">
					<h3 class="h3"><?php the_field('block8_title'); ?></h3> 
				</div>
				<div class="desc"><?php the_field('block8_text'); ?></div>
			</div>
			
			<?php 
			$args = array(
				'post_type' => 'helicopter',
				'posts_per_page' => -1,
				'orderby' => 'ID',
				'order' => 'DESC'
			);
			
			$helic_list = new WP_Query($args);
			?>
			<?php if($helic_list->have_posts()) : ?>
				<div class="finding__items">
					<?php while($helic_list->have_posts()) : $helic_list->the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="finding__item">
							<?php the_post_thumbnail($helic_list->ID); ?>
							<div class="bottom">
								<h4 class="h4"><?php the_title(); ?></h4>
								<div class="dsc">DISCOVER</div>
							</div>
						</a>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			
			<div class="arrows">
				<div class="prev3">
					<svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.4146 0.983607L6.431 0L0.434929 5.99607L6.43886 12L7.42247 11.0164L3.0946 6.68852H33V5.30361L3.0946 5.30361L7.4146 0.983607Z" fill="#1F5465"/></svg>
				</div>
				<div class="next3">
					<svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.5854 0.983607L26.569 0L32.5651 5.99607L26.5611 12L25.5775 11.0164L29.9054 6.68852H0V5.30361L29.9054 5.30361L25.5854 0.983607Z" fill="#1F5465"/></svg>
				</div>
			</div>
			<div class="finding__bottom">
				
				<?php if(!$btn["btn_link"]) : ?>
					<a href="javascript:;" data-fancybox data-src="#request-helicopter" class="btn-2 request_helicopter_btn">
						<?php echo $btn["btn_text"]; ?>
					</a>
				<?php else : ?>
					<a href="<?php echo $btn["btn_link"]; ?>"  class="btn-2">
						<?php echo $btn["btn_text"]; ?>
					</a>
				<?php endif; ?>
				
				<div class="subtitle"><?php the_field('block8_additional_text'); ?></div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/contact_us'); ?>   
	<?php get_template_part('template-parts/modals/request-helicopter'); ?>
	
</main>

<script type="text/javascript">
	jQuery (function($) {
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
		
		$('.request_helicopter_btn').on('click', function() {
			var options = new Array();
			<?php if($helic_list->have_posts()) : ?>
				<?php while($helic_list->have_posts()) : $helic_list->the_post(); ?>
						options.push('<option value="<?php echo ucwords(strtolower(get_the_title())); ?>"><?php echo ucwords(strtolower(get_the_title())); ?></option>');
				<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			
			$('#request-helicopter').find('#helicopter_name').append(options.join(''));
		});
	});	
</script>

<?php get_footer(); ?>
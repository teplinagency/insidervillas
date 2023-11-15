<?php
/**
 * Template name: Private Jets
 */
get_header();
?>

<main>
	<div class="page-top private-jets" style="background-image: url(<?php the_field('block1_bg_image'); ?>);">
		<div class="container">
			<h1 class="h1"><?php the_field('block1_title'); ?></h1> 
			<div class="desc"><?php the_field('block1_text'); ?></div>
			
			<?php $btn = get_field('block1_button'); ?>
			<a href="<?php echo $btn["btn_link"]; ?>" class="btn-1 link-to">
				<?php echo $btn["btn_text"]; ?>
			</a>
		</div>  
	</div>

	<div class="fixed-image reverce" >
		<div class="container"> 
			<?php 
			$content_block_1 = get_field('block2_content_block_1');
			$content_block_2 = get_field('block2_content_block_2');
			?>
			<div class="fixed-image__right">
				<div class="sticky-thumb id1 active">
					<?php echo wp_get_attachment_image($content_block_1["image"], 'full'); ?>
				</div>
				<div class="sticky-thumb id2">
					<?php echo wp_get_attachment_image($content_block_2["image"], 'full'); ?>
				</div>
			</div>
			<div class="fixed-image__left">
				<div class="fixed-image__item active" id="1">
					<div class="subtitle"><?php the_field('block2_subtitle'); ?></div>
					<div class="h3"><?php the_field('block2_main_title'); ?></div>
					<div class="titl">
						<div class="ico">
							<?php $svg = file_get_contents($content_block_1["icon"]); ?>
							<?php echo $svg; ?>
						</div>
						<div class="text"><?php echo $content_block_1["secondary_title"]; ?></div>
					</div>
					<div class="desc"> 
						<?php echo $content_block_1["text"]; ?>
						<?php echo wp_get_attachment_image($content_block_1["image"], 'full', '', array('class' => 'mob-1')); ?>
					</div>
				</div>

				<div class="fixed-image__item" id="2">
					<div class="titl">
						<div class="ico">
							<?php $svg = file_get_contents($content_block_2['icon']); ?>
							<?php echo $svg; ?>
						</div>
						<div class="text"><?php echo $content_block_2["secondary_title"]; ?></div>
					</div>
					<div class="desc">
						<?php echo $content_block_2["text"]; ?>
						
						<?php echo wp_get_attachment_image($content_block_2["image"], 'full', '', array('class' => 'mob-2')); ?>
						
						<?php $btn = get_field('block2_button'); ?>
						<?php if(!$btn["btn_link"]) : ?>
							<a href="javascript:;" data-fancybox data-src="#request-jets" class="btn-2 request_jet_btn">
								<?php echo $btn["btn_text"]; ?>
							</a>
						<?php else : ?>
							<a href="<?php echo $btn["btn_link"]; ?>"  class="btn-2">
								<?php echo $btn["btn_text"]; ?>
							</a>
						<?php endif; ?>         
					</div>
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

<?php if(have_rows('block5_list')) : ?>
	<section class="experiences experiences-jets">
		<div class="container">
			<svg class="element-bg-1" width="1288" height="1268" viewBox="0 0 1288 1268" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.15" d="M1287.47 1267.57C1262.35 1249.24 1235.8 1231.17 1216.81 1206.3C1199.99 1184.28 1184.1 1161.57 1167.46 1139.43C1155.62 1123.67 1146.78 1104.72 1134.66 1089.66C1129.43 1083.17 1118.79 1079.39 1111.66 1075.64C1077.73 1057.78 1041.83 1039.78 1004.84 1029.38C973.531 1020.57 942.911 1011.65 912.307 1000.64C855.774 980.285 792.925 970.057 733.699 961.382C674.54 952.717 616.652 953.014 558.456 936.568C488.903 916.911 419.48 899.263 349.425 881.471C292.399 866.988 236.721 846.498 184.977 818.383C113.293 779.435 48.9211 734.993 15.2007 659.122C7.28561 641.313 0.403517 627.158 1.04105 606.97C1.75727 584.289 5.59676 559.43 12.2566 537.713C23.6422 500.587 51.5895 461.723 75.9051 431.726C103.564 397.605 140.197 373.665 174.883 347.609C217.205 315.817 259.756 284.838 302.6 253.679C354.702 215.786 406.984 180.65 465.366 152.879C513.724 129.876 563.323 110.792 611.169 86.5664C659.015 62.3407 837.307 1 837.307 1" stroke="#1F5465"/>
			</svg>
			<div class="experiences__body">
				<?php while(have_rows('block5_list')) : the_row(); ?>
					<div class="experiences__item">
						<div class="img">
							<?php echo wp_get_attachment_image(get_sub_field('image'), 'full'); ?>
						</div>
						<div class="text"> 
							<h3 class="h3"><?php the_sub_field('title'); ?></h3>
							<div class="desc">
								<?php the_sub_field('text'); ?>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			
			<svg class="element-bg-2" width="1082" height="1281" viewBox="0 0 1082 1281" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.15" d="M1080.97 1.04297C1069.03 21.0922 1052.81 37.1949 1039.75 56.8405C1011.07 99.9787 980.369 143.608 948.063 184.137C894.311 251.572 821.661 317.111 736.93 341.997C703.981 351.674 672.975 363.978 642.438 380.13C627.429 388.069 612.721 396.733 598.277 405.645C584.166 414.352 567.795 417.789 552.854 424.852C539.418 431.203 525.817 435.304 511.777 440.133C490.117 447.583 471.766 459.157 451.493 469.294C419.634 485.223 387.304 497.524 356.581 516.119C338.937 526.798 322.347 539.415 304.008 548.924C289.45 556.473 273.223 558.541 258.725 566.449C225.383 584.635 192.295 602.97 159.888 622.947C98.22 660.962 23.7678 687.859 10.1595 766.787C6.53641 787.801 6.2693 809.183 5.95366 830.436C5.65976 850.225 1.98227 869.526 1.32724 889.177C0.77888 905.628 6.57928 920.705 10.4399 936.423C16.5108 961.14 17.7099 986.471 24.7398 1011.01C40.801 1067.06 67.6659 1120.92 103.109 1167.46C142.305 1218.94 205.19 1250.11 260.828 1280.46" stroke="#1F5465"/>
			</svg>
		</div>
	</section>
<?php endif; ?>

	<section class="the-world color to-luxury" data-color="#F3FAFC">
		<div class="container">
			<div class="the-world__title">
				<h3 class="h3"><?php the_field('block5_title1'); ?></h3>
				<div class="desc"><?php the_field('block5_text1'); ?></div>
			</div>
			<div class="the-world__img">
				<?php echo wp_get_attachment_image(get_field('block5_image'), 'full'); ?>
			</div>
			<div class="the-world__bottom">
				<div class="title">        
					<h3 class="h3"><?php the_field('block5_title2'); ?></h3>
					<div class="subtitle"><?php the_field('block5_subtitle2'); ?></div>
				</div>
				<div class="desc">
					<?php the_field('block5_text2'); ?>
				</div>
			</div>
		</div>
	</section>

	
<?php if(have_rows('block6_slides')) : ?>
	<section class="luxury">
		<div class="container">
			<div class="slider-luxury">
				<?php while(have_rows('block6_slides')) : the_row(); ?>
					<div class="slider-luxury__item">
						<div class="img">
							<?php echo wp_get_attachment_image(get_sub_field('image'), 'full'); ?>
						</div>
						<div class="text">
							<h3 class="h3"><?php the_sub_field('title'); ?></h3>
							<div class="desc"><?php the_sub_field('text'); ?></div>
							<div class="arrows">
								<div class="prev">
									<svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.4146 0.983607L6.431 0L0.434929 5.99607L6.43886 12L7.42247 11.0164L3.0946 6.68852H33V5.30361L3.0946 5.30361L7.4146 0.983607Z" fill="#1F5465"/></svg>
								</div>
								<div class="next">
									<svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.5854 0.983607L26.569 0L32.5651 5.99607L26.5611 12L25.5775 11.0164L29.9054 6.68852H0V5.30361L29.9054 5.30361L25.5854 0.983607Z" fill="#1F5465"/></svg>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; ?>
	
	<section class="finding finding3 color" data-color="#F3FAFC" id="all-jets">
		<div class="container">
			<div class="finding__top">
				<div class="finding__title">
					<h3 class="h3"><?php the_field('block7_title'); ?></h3> 
					<div class="subtitle"><?php the_field('block7_subtitle'); ?></div>
				</div>
				<div class="desc"><?php the_field('block7_text'); ?></div>
			</div>
			
			<?php 
			$args = array(
				'post_type' => 'jets',
				'posts_per_page' => -1,
				'orderby' => 'ID',
				'order' => 'DESC'
			);
			
			$jets_list = new WP_Query($args);
			?>
			<?php if($jets_list->have_posts()) : ?>
				<div class="finding__items">
					<?php while($jets_list->have_posts()) : $jets_list->the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="finding__item">
							<?php the_post_thumbnail($jets_list->ID); ?>
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
					<svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M7.4146 0.983607L6.431 0L0.434929 5.99607L6.43886 12L7.42247 11.0164L3.0946 6.68852H33V5.30361L3.0946 5.30361L7.4146 0.983607Z" fill="#1F5465"/>
					</svg>
				</div>
				<div class="next3">
					<svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M25.5854 0.983607L26.569 0L32.5651 5.99607L26.5611 12L25.5775 11.0164L29.9054 6.68852H0V5.30361L29.9054 5.30361L25.5854 0.983607Z" fill="#1F5465"/>
					</svg>
				</div>
			</div>
			
			<?php $btn = get_field('block7_button'); ?>
			<div class="finding__bottom">
				<?php if(!$btn["btn_link"]) : ?>
					<a href="javascript:;" data-fancybox data-src="#request-jets" class="btn-2 request_jet_btn">
						<?php echo $btn["btn_text"]; ?>
					</a>
				<?php else : ?>
					<a href="<?php echo $btn["btn_link"]; ?>"  class="btn-2">
						<?php echo $btn["btn_text"]; ?>
					</a>
				<?php endif; ?>
				
				<div class="subtitle"><?php the_field('block7_additional_text'); ?></div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/contact_us'); ?> 
	<?php get_template_part('template-parts/modals/request-jets'); ?>
	
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
		
	
		$('.request_jet_btn').on('click', function() {
			var options = new Array();
			<?php if($jets_list->have_posts()) : ?>
				<?php while($jets_list->have_posts()) : $jets_list->the_post(); ?>
						options.push('<option value="<?php echo ucwords(strtolower(get_the_title())); ?>"><?php echo ucwords(strtolower(get_the_title())); ?></option>');
				<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			
			$('#request-jets').find('#jet_name').append(options.join(''));
		});
	});	
</script>

<?php get_footer(); ?>
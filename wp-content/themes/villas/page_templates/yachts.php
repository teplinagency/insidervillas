<?php
/**
 * Template name: Yachts
 */
get_header();
?>

<main>
	<div class="page-top" style="background-image: url(<?php the_field('block1_bg_image'); ?>);">
		<div class="container">
			<h1 class="h1"><?php the_field('block1_page_title'); ?></h1> 
			<div class="desc"><?php the_field('block1_text'); ?></div>
			
			<?php $btn = get_field('block1_button'); ?>
			<a href="<?php echo $btn["btn_link"]; ?>" class="btn-1 link-to">
				<?php echo $btn["btn_text"]; ?>
			</a>
		</div>  
	</div>

	<section class="yacht-charters">
		<div class="container">
			<svg class="element-bg-21" width="1608" height="1588" viewBox="0 0 1608 1588" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.15" d="M887.878 0.214844C887.878 0.214844 899.626 56.6156 836.379 137.524C773.132 218.432 712.136 301.319 634.515 369.394C593.753 405.144 547.087 433.167 501.176 461.597C427.481 507.232 351.882 557.217 269.524 585.879C220.643 602.891 168.081 618.996 115.781 617.523C78.8927 616.483 47.1488 607.521 17.1404 581.842C6.6989 575.969 -1.81151 555.396 2.29368 539.942C9.14569 514.146 33.1372 507.425 57.6222 507.425C81.2486 507.425 103.267 518.9 114.69 539.942C122.429 554.199 126.757 570.722 131.821 585.988C141.935 616.486 152.184 646.572 166.847 675.245C189.442 719.431 215.123 762.233 250.757 797.236C328.971 874.066 424.458 917.386 528.455 947.16C568.819 958.716 609.336 969.862 651.101 975.094C716.216 983.251 782.426 984.065 847.945 985.132C892.665 985.861 937.79 986.574 982.375 982.186C1030.99 977.402 1078.5 965.742 1126.73 958.399C1183.99 949.683 1241.39 948.055 1298.81 956.435C1349.57 963.843 1399.72 975.984 1448.73 991.025C1493.24 1004.68 1548.5 1020.21 1580.76 1056.71C1622.95 1104.44 1607.63 1175.6 1581.42 1225.84C1556.38 1273.83 1528.77 1319.73 1506.13 1369C1483.49 1418.27 1448.73 1587.7 1448.73 1587.7" stroke="#1F5465"/>
			</svg>

			<div class="yacht-charters__body">
				<div class="images">
					<div class="reveal img1">
						<?php echo wp_get_attachment_image(get_field('block2_image_1'), 'full'); ?>
					</div>
					<div class="reveal img2">
						<?php echo wp_get_attachment_image(get_field('block2_image_2'), 'full'); ?>
					</div>
				</div>
				<div class="text">
					<div class="subtitle"><?php the_field('block2_subtitle'); ?></div>
					<h3 class="h3"><?php the_field('block2_title'); ?></h3>
					<div class="desc">
						<?php the_field('block2_text'); ?>
					</div>
					
					<?php $btn = get_field('block2_button'); ?>
					<a href="javascript:;" data-fancybox data-src="#request-yacht" class="btn-2">
						<?php echo $btn["btn_text"]; ?>
					</a>
				</div>
			</div>
			
			<?php if(have_rows('block2_list')) : ?>
				<div class="yacht-charters__items">
					<?php while(have_rows('block2_list')) : the_row(); ?>
						<div class="yacht-charters__item">        
							<div class="titl">
								<div class="ico">
									<?php $svg = file_get_contents(get_sub_field('icon')); ?>
									<?php echo $svg; ?>
								</div>
								<?php the_sub_field('title'); ?>
							</div>
							<div class="dsc">
								<?php the_sub_field('text'); ?>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<section class="the-duo the-duo2 color scroll" data-color="#F3FAFC">
		<div class="container">
			<div class="the-duo__title">
				<h3 class="h3"><?php the_field('block3_title'); ?></h3>
				<div class="desc"><?php the_field('block3_text'); ?></div>
			</div>
		</div>
		<div class="scroll__body">
			<?php echo wp_get_attachment_image(get_field('block3_bg_image'), 'full'); ?>
		</div>
		<div class="container bottom">
			<div class="description"><?php the_field('block3_text_on_image'); ?></div>
		</div>
	</section>


	<section class="experiences yets-experiences">
		<div class="container">			
			<?php if(have_rows('block4_list_1')) : ?>
				<div class="experiences__body">
					<?php while(have_rows('block4_list_1')) : the_row(); ?>
						<div class="experiences__item">
							<div class="img">
								<svg class="element-bg-2" width="609" height="181" viewBox="0 0 609 181" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.15" d="M0.294922 1C0.294922 1 90.109 65.7743 156.295 87.5C286.406 130.209 391.659 -8.9094 506.295 66C556.425 98.7579 608.295 180.5 608.295 180.5" stroke="#1F5465"/></svg>
								<?php echo wp_get_attachment_image(get_sub_field('image'), 'full'); ?>
							</div>
							<div class="text"> 
								<h3 class="h3"><?php the_sub_field('title'); ?></h3>
								<div class="desc"><?php the_sub_field('description'); ?></div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			
			<div class="yets-experiences__items">
				<svg class="element-bg-3" width="798" height="949" viewBox="0 0 798 949" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.15" d="M797.89 1.02364C711.845 1.02364 625.377 0.0697298 539.767 10.2817C482.899 17.0651 428.168 30.9482 372.901 45.4402C350.647 51.2758 327.807 56.2888 306.332 64.7278C273.808 77.5081 243.546 96.8458 214.413 115.867C146.399 160.274 76.0599 203.679 45.7839 282.733C34.6228 311.875 21.1514 383.269 66.5043 391.515C91.3691 396.036 108.011 369.858 114.007 348.641C125.365 308.45 49.4211 328.728 35.4237 341.808C16.3715 359.611 7.09207 388.799 3.68183 413.888C-6.69898 490.261 18.9993 556.594 59.2301 620.21C100.119 684.867 146.636 747.657 206.257 796.334C243.569 826.797 306.332 897 418.373 948.5" stroke="#1F5465"/></svg>

				<div class="yets-experiences__item">
					<h4 class="h4"><?php the_field('block4_list_2_title'); ?></h4>
				</div>
				
				<?php if(have_rows('block4_list_2')) : ?>
					<?php while(have_rows('block4_list_2')) : the_row(); ?>
						<div class="yets-experiences__item">
							<div class="ico">
								<?php $svg = file_get_contents(get_sub_field('icon')); ?>
								<?php echo $svg; ?>
							</div>
							<div class="dsc">
								<?php the_sub_field('title'); ?>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>


	<section class="every-taste color" data-color="#F3FAFC">
		<div class="container">
			<div class="every-taste__body">
				<div class="every-taste__left">
					<div class="img">
						<?php echo wp_get_attachment_image(get_field('block5_left_image'), 'full', '', array('class' => 'img1')); ?>
						
						<?php if(have_rows('block5_watersports_list')) : ?>
							<div class="list">
								<div class="title"><?php the_field('block5_list_title'); ?></div>
								<ul>
									<?php while(have_rows('block5_watersports_list')) : the_row(); ?>
										<li><?php the_sub_field('text'); ?></li>
									<?php endwhile; ?>
								</ul>
							</div>
						<?php endif; ?>
					</div>
					<div class="desc"><?php the_field('block5_description_1'); ?></div>
				</div>
				
				<?php $right_block = get_field('block5_right_block'); ?>
				<div class="every-taste__right">
					<svg class="element-bg-5" width="1173" height="1132" viewBox="0 0 1173 1132" fill="none" xmlns="http://www.w3.org/2000/svg"><path opacity="0.15" d="M0.976562 0.884766C72.5118 55.5359 151.581 107.111 234.647 142.548C315.188 176.907 398.2 200.484 484.279 215.674C536.886 224.958 589.986 231.131 642.528 240.815C695.209 250.523 747.531 262.663 800.047 273.257C894.201 292.251 1000.69 309.08 1077.74 370.794C1119.34 404.116 1170.88 450.832 1171.83 508.91C1172.22 532.272 1166.41 552.47 1149.2 568.892C1107.68 608.496 1047.52 629.022 994.703 647.861C901.977 680.931 808.641 711.067 717.115 747.588C633.245 781.054 543.16 814.802 475.203 876.524C401.243 943.698 373.086 1041.27 337.087 1131.27" stroke="#1F5465"/></svg>

					<h3 class="h3"><?php echo $right_block["title"]; ?></h3>
					<div class="desc"><?php echo $right_block["text"]; ?></div>
					<div class="image">
						<?php echo wp_get_attachment_image($right_block["image"], 'full', '', array('class' => 'img2')); ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="dinner">
		<div class="container">
			<div class="dinner__body">
				<?php if(have_rows('block6_slider_images')) : ?>
					<div class="dinner__left">
						<div class="our-concierge-slider">
							<?php while(have_rows('block6_slider_images')) : the_row(); ?>
								<?php echo wp_get_attachment_image(get_sub_field('image'), 'full'); ?>
							<?php endwhile; ?>
						</div>
					</div>
				<?php endif; ?>
				
				<div class="dinner__rigth">
					<h3 class="h3"><?php the_field('block6_title'); ?></h3>
					<div class="desc"><?php the_field('block6_text'); ?></div>
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
		</div>
	</section>

	<section class="finding color" data-color="#F3FAFC" id="all-yacht">
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
				'post_type' => 'boat',
				'posts_per_page' => -1,
				'orderby' => 'ID',
				'order' => 'DESC'
			);
			
			$boat_list = new WP_Query($args);
			?>
			<?php if($boat_list->have_posts()) : ?>
				<div class="finding__items">
					<?php while($boat_list->have_posts()) : $boat_list->the_post(); ?>
						<a href="<?php the_permalink(); ?>" class="finding__item">
							<?php the_post_thumbnail($boat_list->ID); ?>
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
				
				<?php $btn = get_field('block7_button'); ?>
				<a href="<?php echo $btn["btn_link"]; ?>" class="btn-2">
					<?php echo $btn["btn_text"]; ?>
				</a>
				
				<div class="subtitle"><?php the_field('block7_bottom_text'); ?></div>
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/contact_us'); ?>         
</main>

<?php get_footer(); ?>
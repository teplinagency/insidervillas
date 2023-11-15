<?php
/**
 * Template name: Villas
 */
get_header();
?>
<main>
	<div class="page-top all-vilass" style="background-image: url(<?php the_field('block1_bg_image'); ?>);">
		<div class="container">
			<h1 class="h1"><?php the_field('block1_title'); ?></h1> 
		</div> 

		<div class="page-top__search">
			<div class="container">
				<?php //get_template_part('template-parts/search_form'); ?>         
			</div>
		</div>
	</div>

	<section class="text-and-2-img reverce all-vilass">
		<div class="container">
			<svg class="element-bg-3" width="292" height="245" viewBox="0 0 292 245" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.15" d="M170.574 1C127.416 11.7566 78.8545 18.2402 43.6566 54.3111C36.3391 61.81 30.675 70.6879 25.333 80.2863C17.9806 93.497 9.21767 106.866 4.76262 122.094C0.84864 135.473 -0.751469 153.231 3.61428 166.87C10.2424 187.578 30.0541 198.682 44.9547 207.008C75.513 224.084 108.171 234.952 141.416 240.22C163.951 243.79 191.264 244.647 213.911 243.559C261.138 241.291 243.301 239.197 291 234.777" stroke="#1F5465"/>
			</svg>
			<div class="text-and-2-img__body">
				<div class="text-and-2-img__text">
					<div class="subtitle"><?php the_field('block2_subtitle'); ?></div>
					<h3 class="h3"><?php the_field('block2_title'); ?></h3>
					<div class="desc">
						<?php the_field('block2_text1'); ?>
					</div>
					<?php $btn = get_field('block2_btn'); ?>
					<a href="<?php echo $btn["btn_link"]; ?>" class="btn-2 link-to">
						<?php echo $btn["btn_text"]; ?>
					</a>
				</div>
				<?php $block_images = get_field('block2_images'); ?>
				<?php if($block_images) : ?>
					<div class="text-and-2-img__images">
						<div class="reveal img1">
							<?php echo wp_get_attachment_image($block_images["image_1"], 'full'); ?>
						</div>
						<div class="reveal img2">
							<?php echo wp_get_attachment_image($block_images["image_2"], 'full'); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="bottom-desc">
				<div class="bottom-desc__text">
					<?php the_field('block2_bottom_text_1'); ?> 
				</div>
				<h4 class="h4"><?php the_field('block2_bottom_text_2'); ?></h4>
			</div>
			<svg class="element-bg-5" width="393" height="616" viewBox="0 0 393 616" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.15" d="M392.672 0.967773C372.854 3.0789 294.913 10.2391 275.255 13.5549C242.84 19.0223 210.893 25.8677 179.889 36.9682C133.368 53.6246 93.8969 83.4212 59.597 118.406C17.6717 161.168 -36.4693 245.748 36.1172 287.336C61.1866 301.7 93.0437 308.119 121.581 308.62C135.908 308.871 153.144 309.115 168.534 305.681M168.534 305.681C186.346 301.706 201.685 292.804 207.177 273.28C215.604 243.324 200.007 227.643 174.916 213.491C148.852 198.79 120.736 190.392 93.4165 207.514C78.4914 216.869 73.8639 233.605 78.8213 249.939C82.8969 263.367 92.7952 269.737 104.796 276.454C125.151 287.849 147.044 296.701 168.534 305.681ZM168.534 305.681C168.609 305.712 168.684 305.744 168.76 305.775C233.868 332.989 274.842 382.593 307.357 444.191C322.563 472.998 333.725 501.662 337.093 534.238C339.891 561.295 338.917 588.428 342.162 615.421" stroke="#1F5465"/>
			</svg>
		</div>
	</section>


	<section class="the-duo the-attention color scroll" data-color="#F3FAFC">
		<div class="container">
			<div class="the-duo__title">
				<div class="title">
					<h3 class="h3"><?php the_field('block3_title'); ?> </h3>
					<div class="subtitle"><?php the_field('block3_subtitle'); ?></div>
				</div>
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


	<section class="dnevertheless">
		<div class="container">
			<div class="dnevertheless__body">
				<div class="dnevertheless__left">
					<div class="subtitle"><?php the_field('block4_subtitle'); ?></div>
					<h3 class="h3"><?php the_field('block4_title1'); ?></h3>
					<div class="desc"><?php the_field('block4_text1'); ?></div>
					<?php echo wp_get_attachment_image(get_field('block4_image1'), 'full', null, array('class' => 'img1')); ?>
				</div>
				<div class="dnevertheless__right">
					<div class="dnevertheless__img">
						<?php echo wp_get_attachment_image(get_field('block4_image2'), 'full', null, array('class' => 'img2')); ?>
						
						<?php if(have_rows('block4_environment_list')) : ?>
							<div class="dnevertheless__items">
								<h4 class="h4"><?php the_field('block4_list_title'); ?></h4> 
								<?php while(have_rows('block4_environment_list')) : the_row(); ?>
									<div class="dnevertheless__item">
										<div class="ico">
											<?php $svg = file_get_contents(get_sub_field('icon')); ?>
											<?php echo $svg; ?>
										</div>
										<p><?php the_sub_field('text'); ?></p>
									</div>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>
					</div>
					<h3 class="h3"><?php the_field('block4_title2'); ?></h3>
					<div class="desc"><?php the_field('block4_text2'); ?></div>
					
					<?php 
					$svg = file_get_contents(get_field('block4_bg_logo'));
					echo $svg;
					?>
					
					<div class="mob-img">
						<?php echo wp_get_attachment_image(get_field('block4_image1'), 'full', null, array('class' => 'img3')); ?>
					</div>        
				</div>
			</div>
			<svg class="element-bg-1" width="1172" height="1132" viewBox="0 0 1172 1132" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.15" d="M1171.4 0.884766C1099.86 55.5359 1020.79 107.111 937.725 142.548C857.184 176.907 774.172 200.484 688.093 215.674C635.486 224.958 582.386 231.131 529.844 240.815C477.163 250.523 424.841 262.663 372.325 273.257C278.171 292.251 171.678 309.08 94.6323 370.794C53.0319 404.116 1.49024 450.832 0.53814 508.91C0.15515 532.272 5.95815 552.47 23.175 568.892C64.6949 608.496 124.848 629.022 177.669 647.861C270.395 680.931 363.731 711.067 455.257 747.588C539.127 781.054 629.212 814.802 697.169 876.524C771.129 943.698 799.286 1041.27 835.285 1131.27" stroke="#1F5465"/>
			</svg>
		</div>
	</section>

	<section class="paralax-scroll" style="background-image: url(<?php the_field('block5_bg_image'); ?>);">
		<div class="container">
			<div class="paralax-scroll__body">
				<?php if($top_content_block = get_field('block5_top_left_text_block')) : ?>
					<div class="paralax-scroll__left">
						<div class="dsc"><?php echo $top_content_block["text"]; ?></div>
						<h3 class="h3"><?php echo $top_content_block["title"]; ?></h3>
					</div>
				<?php endif; ?>
				
				<?php if($bottom_content_block = get_field('block5_bottom_right_text_block')) : ?>
					<div class="paralax-scroll__right">
						<div class="subtitle"><?php echo $bottom_content_block["title"]; ?></div>
						<div class="desc"><?php echo $bottom_content_block["text"]; ?></div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>


	<section class="relax-unwind">
		<div class="container">
			<svg class="element-bg-1" width="962" height="1112" viewBox="0 0 962 1112" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.15" d="M820.766 1.01758C814.357 25.0539 800.119 45.144 786.028 65.3544C759.818 102.944 731.792 139.709 696.454 169.259C620.526 232.753 532.67 285.995 446.896 335.008C378.217 374.254 311.356 398.739 233.478 413.21C166.21 425.709 88.8331 436.017 20.3722 425.984C-2.20721 422.675 -2.18308 389.478 6.66359 373.019C17.3233 353.187 37.7335 353.093 57.4477 354.325C77.6863 355.59 81.4471 393.487 83.307 407.29C87.6313 439.381 89.9869 470.749 92.3422 502.939C95.0945 540.554 108.414 576.877 116.332 613.542C126.918 662.558 137.31 726.925 181.448 758.105C251.297 807.448 344.997 799.517 425.087 791.753C486.653 785.785 547.972 775.274 609.841 772.748C637.325 771.627 667.02 769.661 694.274 774.306C722.209 779.068 750.539 793.737 774.656 807.955C834.955 843.504 868.006 886.823 894.606 950.337C917.13 1004.12 935.937 1058.57 960.968 1111.41" stroke="#1F5465"/>
			</svg>
			<div class="relax-unwind__body">
				<div class="relax-unwind__images">
					<?php echo wp_get_attachment_image(get_field('block6_main_image'), 'full', null, array('class' => 'img1')); ?>
					
					<?php if($secondary_images = get_field('block6_secondary_images')) : ?>
						<div class="images">
							<?php echo wp_get_attachment_image($secondary_images["image_1"], 'full', null, array('class' => 'img2')); ?>
							<?php echo wp_get_attachment_image($secondary_images["image_2"], 'full', null, array('class' => 'img3')); ?> 
						</div>
					<?php endif; ?>
				</div>
				<div class="relax-unwind__right">
					<h3 class="h3"><?php the_field('block6_title'); ?></h3>
					<div class="desc"><?php the_field('block6_text1'); ?></div>

				</div>
			</div>
			<div class="bottom">
				<h4 class="h4"><?php the_field('block6_text2'); ?></h4>
			</div>
		</div>
	</section>

	<section class="relax-unwind-2">
		<div class="container">
			<div class="relax-unwind-2__body">
				<div class="relax-unwind-2__text">
					<h3 class="h3"><?php the_field('block7_title'); ?></h3>
					<div class="desc"><?php the_field('block7_text1'); ?></div>
					
					<?php $btn = get_field('block7_btn'); ?>
					<a href="<?php echo $btn["btn_link"]; ?>" class="btn-2">
						<?php echo $btn["btn_text"]; ?>
					</a>

					<div class="desc2"><?php the_field('block7_text2'); ?></div>
					<div class="subtitle"><?php the_field('block7_text3'); ?></div>
					<svg class="element-bg-2" width="460" height="195" viewBox="0 0 460 195" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path opacity="0.15" d="M44.4848 187.783C78.0073 193.102 100.178 191.792 139.664 194.169C188.529 193.854 225.77 189.08 271.104 181.69C321.622 169.007 377.761 156.195 421.137 127.566C445.752 111.319 461.983 86.244 458.742 61.346C454.186 26.3541 407.345 13.7084 371.67 7.48408C285.808 -7.49632 191.11 4.12491 103.727 27.158C64.6164 37.4669 -5.16009 57.8223 1.34951 102.221C6.40752 136.719 52.8678 153.342 90.6862 153.548" stroke="#1F5465"/>
					</svg>
				</div>
				<div class="relax-unwind-2__img">
					<?php echo wp_get_attachment_image(get_field('block7_image'), 'full', null, array('class' => 'img1')); ?>
				</div>
			</div>
		</div>
	</section>
	
	<?php
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$args_main = array(
		'post_type' => 'villa',
		'paged' => $paged,
		'orderby' => 'ID',
		'order' => 'DESC'
	);
	$villas__list_main = new WP_Query($args_main);
	
	$args_sec = array(
		'post_type' => 'villa',
		'posts_per_page' => -1,
	);
	$villas__list_sec = get_posts($args_sec);
	
	$budget = $guests = $bedrooms = $bathrooms = $areas_data = [];
	foreach($villas__list_sec as $post) {
		setup_postdata($post);
		$price = get_field('price');
		if($price && $price != 0) $budget[] = $price;
		
		$guest = get_field('guests');
		if($guest && $guest != 0) $guests[] = $guest;
		
		$bedroom = get_field('bedrooms');
		if($bedroom && $bedroom != 0) $bedrooms[] = $bedroom;
		
		$bathroom = get_field('bathrooms');
		if($bathroom && $bathroom != 0) $bathrooms[] = $bathroom;	
		
		$postID = $post->ID;
		$areas = get_the_terms($postID, 'areas');
		foreach($areas as $area) {
			if($coord = get_field('location', $area)) {
				$villa_price = get_field('price', $postid); 
				if($villa_price == 0) $villa_price = 'Upon request';
				else $villa_price = 'from '.$villa_price.'€/per nigth';
				
				$areas_data[$area->slug]['coords'] = array('lat' => $coord['lat'], 'lng' => $coord['lng']);			
				$areas_data[$area->slug]['items'][$postID]['title'] = get_the_title($postid); 
				$areas_data[$area->slug]['items'][$postID]['link'] = get_the_permalink($postid); 
				$areas_data[$area->slug]['items'][$postID]['price'] = $villa_price; 
				$areas_data[$area->slug]['items'][$postID]['img'] = get_the_post_thumbnail_url($postid, 'medium');
				
			} 
		}	
	}
	
	$areas_final_data = [];
	foreach($areas_data as $area=>$data) {
		$areas_final_data[$area]['lat'] = $data['coords']['lat'];
		$areas_final_data[$area]['lng'] = $data['coords']['lng'];
		$items_html = '<div class="gm_villas">';
		foreach($data['items'] as $item) {
			$items_html .= '<a href="'.$item['link'].'" class="gm_villa"><img src="'.$item['img'].'" alt="'.$item['title'].'" width="175px"><span class="villa_data"><span class="villa_name">'.$item['title'].'</span><span class="villa_price">'.$item['price'].'</span></span></a>';
		}
		$items_html .= '</div>';
		$areas_final_data[$area]['items'] = $items_html;
	}
	

	wp_reset_postdata();
	$count_villas = count($villas__list_sec);
	$budget = array_unique($budget);
	$min_budget = min($budget);
	$max_budget = max($budget);
	$guests = array_unique($guests);
	$min_guests = min($guests);
	$max_guests = max($guests);
	$bedrooms = array_unique($bedrooms);
	$bathrooms = array_unique($bathrooms);
	asort($bedrooms);
	asort($bathrooms);
	
	?>

	<section class="find-place color" data-color="#F3FAFC">
		<div class="container">
			<h3 class="h3"><?php the_field('block8_title'); ?></h3>
			<div class="map villas__page_map" id="map">
				
			</div>
			<div class="products" id="all-villas">
				<div class="products__top">
					<div class="left">
						<div class="filter-labels sp-btwn">
							<div class="titl">Filter by</div>
							<a href="#" class="clear">Clear All</a>
						</div>
						<!--div class="filter-labels">
							<div class="filter-label">
								Spain 
								<div class="close">
									<svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.66567 0.679318L3.5 2.84499L1.33433 0.679318C1.09524 0.440227 0.707148 0.440227 0.468057 0.679318L0.179318 0.968057C-0.0597728 1.20715 -0.0597728 1.59524 0.179318 1.83433L2.34499 4L0.179318 6.16567C-0.0597728 6.40476 -0.0597728 6.79285 0.179318 7.03194L0.468057 7.32068C0.707148 7.55977 1.09524 7.55977 1.33433 7.32068L3.5 5.15501L5.66567 7.32068C5.90476 7.55977 6.29285 7.55977 6.53194 7.32068L6.82068 7.03194C7.05977 6.79285 7.05977 6.40476 6.82068 6.16567L4.65501 4L6.82068 1.83433C7.05977 1.59524 7.05977 1.20715 6.82068 0.968057L6.53194 0.679318C6.29285 0.440227 5.90476 0.440227 5.66567 0.679318Z" fill="black"/></svg>
								</div>
							</div>
						</div-->
					</div>
					<div class="right">
						<div class="num">
							Found <span><?php echo $count_villas; ?></span> villa(s)
						</div>
						<div class="sort">
							<div class="title">sort by</div>
							<div class="filtr-btn">
								<svg width="14" height="13" viewBox="0 0 14 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M14 0.286133V1.95613L9 6.71513V12.2861H5V6.71513L0 1.95513V0.286133H14Z" fill="#181D24"/></svg>
							</div>
							<div class="select villas_order">
								<select>
									<option value="">Default</option>
									<option value="price_desc">Price High to Low</option>
									<option value="price_asc">Price Low to High</option>
									<option value="square">Square</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="products__body">
					<div class="left">
						<div class="top-filter">
							<div class="titl">Filter by</div>
							<a href="#" class="clerr">Clear All</a>
						</div>
						
						<?php 
						$areas = get_terms(array(
							'taxonomy' => 'areas',
							'hide_empty' => false,
							'parent' => 0,
							'orderby' => 'name',
							'order' => 'ASC'
						));
						?>
						
						<?php if($areas) { ?>
						<div class="filter-item filter-areas">
							<div class="filter-item__top">
								<div class="title">Areas <span></span></div>
							</div>
							<div class="filter-item__body">
								<div class="search-item">
									<form action="#">
										<input type="text" name="search" placeholder="Search location...">
										<button type="submit">
											<svg width="13" height="12" viewBox="0 0 13 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.128 10.8358L10.4772 9.19085C11.3721 8.08523 11.8087 6.67837 11.6969 5.26034C11.5851 3.84232 10.9334 2.52127 9.87625 1.56958C8.81908 0.617903 7.43704 0.108161 6.01511 0.145467C4.59317 0.182773 3.23976 0.764285 2.23396 1.77009C1.22815 2.7759 0.646641 4.12931 0.609334 5.55124C0.572028 6.97318 1.08177 8.35522 2.03345 9.41238C2.98513 10.4695 4.30619 11.1212 5.72421 11.233C7.14223 11.3449 8.5491 10.9083 9.65471 10.0133L11.2997 11.6642C11.3539 11.7189 11.4185 11.7623 11.4895 11.7919C11.5606 11.8215 11.6369 11.8367 11.7139 11.8367C11.7909 11.8367 11.8671 11.8215 11.9382 11.7919C12.0093 11.7623 12.0738 11.7189 12.128 11.6642C12.1827 11.61 12.2261 11.5454 12.2557 11.4743C12.2853 11.4033 12.3006 11.327 12.3006 11.25C12.3006 11.173 12.2853 11.0968 12.2557 11.0257C12.2261 10.9546 12.1827 10.8901 12.128 10.8358ZM1.79721 5.70835C1.79721 4.84305 2.0538 3.99719 2.53453 3.27773C3.01526 2.55826 3.69855 1.99751 4.49797 1.66637C5.2974 1.33524 6.17707 1.2486 7.02573 1.41741C7.8744 1.58622 8.65395 2.0029 9.26581 2.61475C9.87766 3.22661 10.2943 4.00616 10.4631 4.85483C10.632 5.70349 10.5453 6.58316 10.2142 7.38259C9.88305 8.18201 9.3223 8.8653 8.60283 9.34603C7.88337 9.82676 7.03751 10.0833 6.17221 10.0833C5.01189 10.0833 3.89909 9.62241 3.07862 8.80194C2.25815 7.98147 1.79721 6.86867 1.79721 5.70835Z" fill="#8B8E91"/></svg>
										</button>
									</form>
								</div>
								<div class="areas__filter_body">							
									<?php //1st lvl hierarcical ?>
									<?php foreach($areas as $area) { ?>
										<div class="filter__item first_child">
											<input type="checkbox" name="area" id="area_<?php echo $area->term_id; ?>" data-term-id="<?php echo $area->term_id; ?>" data-area="<?php echo get_full_area($area, '', 'text'); ?>"> 
											<label for="area_<?php echo $area->term_id; ?>" class="">
												<span><?php echo $area->name; ?></span>
											</label> 
										</div>
										<?php
										//2st lvl hierarcical
										$inner_areas = get_terms(['taxonomy' => 'areas','parent' => $area->term_id, 'hide_empty' => false,'orderby' => 'name','order' => 'ASC']);
										if(!is_wp_error( $inner_areas ) && $inner_areas) {
											foreach ( $inner_areas as $inner_area ) { ?>
												<div class="filter__item second_child">
													<input type="checkbox" name="area" id="area_<?php echo $inner_area->term_id; ?>" data-term-id="<?php echo $inner_area->term_id; ?>" data-area="<?php echo get_full_area($inner_area, '', 'text'); ?>"> 
													<label for="area_<?php echo $inner_area->term_id; ?>" class="">
														<span><?php echo $inner_area->name; ?></span>
													</label> 
												</div>
												<?php 
												//3st lvl hierarcical
												$sub_inner_areas = get_terms(['taxonomy' => 'areas', 'parent' => $inner_area->term_id, 'hide_empty' => false,'orderby' => 'name','order' => 'ASC']);
												if(!is_wp_error( $sub_inner_areas ) && $sub_inner_areas)	{
													foreach ( $sub_inner_areas as $sub_inner_area ) { ?>
														<div class="filter__item third_child">
															<input type="checkbox" name="area" id="area_<?php echo $sub_inner_area->term_id; ?>" data-term-id="<?php echo $sub_inner_area->term_id; ?>" data-area="<?php echo get_full_area($sub_inner_area, '', 'text'); ?>"> 
															<label for="area_<?php echo $sub_inner_area->term_id; ?>" class="">
																<span><?php echo $sub_inner_area->name; ?></span>
															</label> 
														</div>
													<?php 
													}
												}
											}
										}
									} 
									?>	
								</div>
							</div>
						</div>
						<?php } ?>
						
						<div class="filter-item filter-price">
							<div class="filter-item__top">
								<div class="title">budget <span></span></div>
							</div>
							<div class="filter-item__body">
								<div class="selector">
									<div class="price-slider">
										<span id="min-price" data-currency="€" class="slider-price"><?php echo $min_budget; ?></span>   
										<span id="max-price" data-currency="€" data-max="<?php echo $max_budget; ?>" class="slider-price"><?php echo $max_budget; ?></span>
										<div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
											<div class="ui-slider-range ui-corner-all ui-widget-header"></div>
											<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
											<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="filter-item filter-guests">
							<div class="filter-item__top">
								<div class="title">guests <span></span></div>
							</div>
							<div class="filter-item__body">
								<div class="input-number__body">
									<span class="input-number-decrement">
										<svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 5.75122H5.25132H6.74868H12V7.24858H6.74868H5.25132H0V5.75122Z" fill="#181D24"/></svg>
									</span>
									<input class="input-number guests" id="guests" type="number" value="0" min="<?php echo $min_guests; ?>" max="<?php echo $max_guests; ?>">
									<span class="input-number-increment">
										<svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.74868 5.75132V0.5H5.25132V5.75132H0V7.24868H5.25132V12.5H6.74868V7.24868H12V5.75132H6.74868Z" fill="#181D24"/></svg>
									</span>
								</div>
							</div>
						</div>
						
						<div class="filter-item filter-bedrooms">
							<div class="filter-item__top">
								<div class="title">bedrooms <span></span></div>
							</div>
							<div class="filter-item__body">
								<?php foreach($bedrooms as $key=>$val) : ?>
									<div class="filter__item">
										<input type="checkbox" name="bedrooms" id="bedroom_<?php echo $val; ?>" data-bedrooms="<?php echo $val; ?>"> 
										<label for="bedroom_<?php echo $val; ?>"> <span><?php echo $val; ?></span></label> 
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						
						<div class="filter-item filter-bathrooms">
							<div class="filter-item__top">
								<div class="title">bathrooms <span></span></div>
							</div>
							<div class="filter-item__body">
								<?php foreach($bathrooms as $key=>$val) : ?>
									<div class="filter__item">
										<input type="checkbox" name="bathrooms" id="bathroom_<?php echo $val; ?>" data-bathrooms="<?php echo $val; ?>"> 
										<label for="bathroom_<?php echo $val; ?>" class=""> <span><?php echo $val; ?></span></label> 
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						
						<button type="submit" class="btn-1 filter__villas_btn">SHOW RESULTS</button>
					</div>
					
					
					<div class="right">
						<?php if($villas__list_main->have_posts()) :  ?>
							<div class="products__items" id="response">							
								<?php 
								while($villas__list_main->have_posts()) : $villas__list_main->the_post(); 
									get_template_part('template-parts/post-lists/villa');
								endwhile; 
								?>
							</div>
						<?php endif; ?>
						<?php wp_reset_postdata(); ?>
						
						<div class="pagination">
							<a href="#" class="btn-1 load-more">load more</a>
							<input type="hidden" name="page" id="page" value="<?php echo $paged; ?>">
							<input type="hidden" name="per_page" id="per_page" value="<?php echo get_option( 'posts_per_page' ); ?>">
							<input type="hidden" name="max-pages" id="max-pages" value="<?php echo $villas__list_main->max_num_pages; ?>">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    
	
	<section class="what-we-love">
		<div class="container">
			<h3 class="h3"><?php the_field('block9_title'); ?></h3>
			
			<?php if(have_rows('block8_items')) : ?>
				<div class="what-we-love__items">
					<?php while(have_rows('block8_items')) : the_row(); ?>
						<div class="what-we-love__item">
							<div class="ico">
								<?php 
								$svg = file_get_contents(get_sub_field('icon'));
								echo $svg;
								?>
							</div>
							<div class="title">
								<?php the_sub_field('text'); ?>
							</div>
						</div>
					<?php endwhile; ?>		
				</div>
			<?php endif; ?>
		</div>
	</section>
	
	

	<?php get_template_part('template-parts/contact_us'); ?>         
</main>

<script src="https://unpkg.com/@googlemaps/markerclusterer/dist/index.min.js"></script>

<script type="text/javascript">
	jQuery(function($) {
		$("#slider-range").slider({
			range: true, 
			min: <?php echo $min_budget; ?>,
			max: <?php echo $max_budget; ?>,
			step: 1,
			values: [ <?php echo $min_budget; ?>, <?php echo $max_budget; ?> ],
			slide: function( event, ui ) {
				$( "#min-price").html(ui.values[ 0 ]);
				suffix = '';
				if (ui.values[ 1 ] == $( "#max-price").data('max') ) suffix = ' +';
				//$( "#max-price").html(ui.values[ 1 ] + suffix); 
				 
				$( "#max-price").html(ui.values[ 1 ]);  
				currency = $( "#max-price").data('currency');
				$('.filter-price .title span').text(currency + ui.values[ 0 ] +' - '+ currency + ui.values[ 1 ]);
			}
		});
		
		$('.clear, .clerr').on('click', function() {
			$('.filter-item .title span').text('');
			$('.filter-item__body input[type="checkbox"]').each(function() {
				$(this).prop('checked', false);
				$(this).removeClass('checked');
				$('#guests').val('');
				$('#min-price').text(<?php echo $min_budget; ?>);
				$('#max-price').text(<?php echo $max_budget; ?>);					
				var $slider = $( "#slider-range" );
				$slider.slider("values", 0, <?php echo $min_budget; ?>);
				$slider.slider("values", 1, <?php echo $max_budget; ?>);
			});
			return false;
		});
	}); 
	
	function initMap() {
		var markerArray = [];
		var locations = [
			<?php foreach($areas_final_data as $area=>$items) : ?>				
				[
					<?php echo $items['lat']; ?>, 
					<?php echo $items['lng']; ?>,
					'<?php echo $items['items']; ?>'

				],				
			<?php endforeach; ?>
		];
		
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 3,
			center: new google.maps.LatLng(<?php echo $items['lat']; ?>, <?php echo $items['lng']; ?>),	
			disableDefaultUI: true,
			styles:[{"featureType": "water", "elementType": "geometry.fill", "stylers": [{"color": "#d3d3d3"}]},{"featureType": "transit", "stylers": [{"color": "#808080"},{"visibility": "off"}]},{"featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [{"visibility": "on"},{"color": "#b3b3b3"}]},{"featureType": "road.highway", "elementType": "geometry.fill", "stylers": [{"color": "#ffffff"}]},{"featureType": "road.local", "elementType": "geometry.fill", "stylers": [{"visibility": "on"},{"color": "#ffffff"},{"weight": 1.8}]},{"featureType": "road.local", "elementType": "geometry.stroke", "stylers": [{"color": "#d7d7d7"}]},{"featureType": "poi", "elementType": "geometry.fill", "stylers": [{"visibility": "on"},{"color": "#ebebeb"}]},{"featureType": "administrative", "elementType": "geometry", "stylers": [{"color": "#a7a7a7"}]},{"featureType": "road.arterial", "elementType": "geometry.fill", "stylers": [{"color": "#ffffff"}]},{"featureType": "road.arterial", "elementType": "geometry.fill", "stylers": [{"color": "#ffffff"}]},{"featureType": "landscape", "elementType": "geometry.fill", "stylers": [{"visibility": "on"},{"color": "#efefef"}]},{"featureType": "road", "elementType": "labels.text.fill", "stylers": [{"color": "#696969"}]},{"featureType": "administrative", "elementType": "labels.text.fill", "stylers": [{"visibility": "on"},{"color": "#737373"}]},{"featureType": "poi", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]},{"featureType": "poi", "elementType": "labels", "stylers": [{"visibility": "off"}]},{"featureType": "road.arterial", "elementType": "geometry.stroke", "stylers": [{"color": "#d6d6d6"}]},{"featureType": "road", "elementType": "labels.icon", "stylers": [{"visibility": "off"}]},{},{"featureType": "poi", "elementType": "geometry.fill", "stylers": [{"color": "#dadada"}]}],
			mapTypeId: google.maps.MapTypeId.ROADMAP
		});
		

		var infowindow = new google.maps.InfoWindow(),
			marker,
			i,
			iconBase = '<?php echo get_template_directory_uri(); ?>';
		
		
		
		for (i = 0; i < locations.length; i++) {
			marker = new google.maps.Marker({
				position: new google.maps.LatLng(locations[i][0], locations[i][1]),
				icon:  iconBase + '/assets/img/map_marker.png',
				map: map
			});
			
			markerArray.push(marker); //push local var marker into global array

			google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
				return function() {
					infowindow.setContent(locations[i][2]);
					infowindow.open(map, marker);
				}
			})(marker, i));
			
			/*google.maps.event.addListener(marker, 'mouseout', (function(marker, i) {
				return function() {
					infowindow.close();
				}
			})(marker, i));*/
			
			/*google.maps.event.addListener(marker, 'click', (function(marker, i) {
				return function() {
					window.location.href = locations[i][0];
				}
			})(marker, i));*/
		}
		const markerCluster = new markerClusterer.MarkerClusterer({map: map, markers: markerArray});
	}

</script>

<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiAY0QGCd6LPf7usc0kRZeWqwvNokl5aA&callback=initMap&libraries=geometry"></script>
<?php get_footer(); ?>
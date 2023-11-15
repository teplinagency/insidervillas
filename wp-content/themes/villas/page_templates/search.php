<?php
/**
 * Template name: Search
 */
get_header();
?>

<main>
	<div class="page-top all-vilass" style="background-image: url(<?php the_field('bg_image'); ?>);">
		<div class="container">
			<h1 class="h1"><?php the_field('page_title'); ?></h1> 
		</div> 

		<div class="page-top__search">
			<div class="container">
				<?php get_template_part('template-parts/search_form'); ?>         
			</div>
		</div>
	</div>
	
	<?php	
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
		wp_reset_postdata();
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
	
	
	
	$paged = get_query_var('paged') ? get_query_var('paged') : 1;
	$args_main = array(
		'post_type' => 'villa',
		'paged' => $paged,
	);
	
	//FILTER
	$args_main['meta_query'] = array();
	$args_main['tax_query'] = array();
	
	if(!empty($_POST['area'])) {
		$args_main['tax_query'][] = array(
			'taxonomy' => 'areas',
			'field'    => 'term_id',
			'terms'    => $_POST['area'],
		);
	}
	
	if($_POST['price_min'] && $_POST['price_max']) {
		if($min_budget == $_POST['price_min']) $min = 0;
		else $min = $_POST['price_min'];
			
		$args_main['meta_query'][] = array(
			'price_field' => array( //for order by this field
				'key' => 'price',
				'value' => array($min, $_POST['price_max']),
				'type'    => 'numeric',
				'compare' => 'BETWEEN'
			)
		);	
	}
	
	$args_main['orderby'] = array('price_field' => 'DESC');

	
	if(!empty($_POST['bedrooms'])) {
		$args_main['meta_query'][] = array(
			'key' => 'bedrooms',
			'value' => $_POST['bedrooms']
		);
	}
	
	
	$villas__list_main = new WP_Query($args_main);	
	$count_villas = $villas__list_main->found_posts;

	?>

	<section class="find-place products-page color" data-color="#F3FAFC">
		<div class="container">
			<div class="products">
				<div class="products__top">
					<div class="left">
						<div class="filter-labels sp-btwn">
							<div class="titl">Filter by</div>
							<a href="#" class="clear">Сlear All</a>
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
							<a href="#" class="clerr">clear all</a>
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
								<div class="title">
									Areas 
									<span>
										<?php 
										if($_POST['area']) {
											$area = get_term_by('id', $_POST['area'], 'areas');
											echo get_full_area($area, '', 'text');
										}
										?>
									</span>
								</div>
							</div>
							<div class="filter-item__body">
								<div class="search-item">
									<form action="">
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
											<input type="checkbox" name="area" id="area_<?php echo $area->term_id; ?>" data-term-id="<?php echo $area->term_id; ?>" data-area="<?php echo get_full_area($area, '', 'text'); ?>" <?php echo($_POST["area"] == $area->term_id) ? 'checked':''; ?>> 
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
													<input type="checkbox" name="area" id="area_<?php echo $inner_area->term_id; ?>" data-term-id="<?php echo $inner_area->term_id; ?>" data-area="<?php echo get_full_area($inner_area, '', 'text'); ?>" <?php echo($_POST["area"] == $inner_area->term_id) ? 'checked':''; ?>> 
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
															<input type="checkbox" name="area" id="area_<?php echo $sub_inner_area->term_id; ?>" data-term-id="<?php echo $sub_inner_area->term_id; ?>" data-area="<?php echo get_full_area($sub_inner_area, '', 'text'); ?>" <?php echo($_POST["area"] == $sub_inner_area->term_id) ? 'checked':''; ?>> 
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
								<div class="title">
									budget 
									<span>
										<?php
										if($_POST["price_min"] && $_POST["price_max"]) {
											echo '€'.$_POST["price_min"].' - €'.$_POST["price_max"];
										}
										?>
									</span>
								</div>
							</div>
							<div class="filter-item__body">
								<div class="selector">
									<div class="price-slider">
										<span id="min-price" data-currency="€" class="slider-price">
											<?php echo ($_POST["price_min"]) ? $_POST["price_min"] : $min_budget; ?>
											<?php //echo $min_budget; ?>
										</span>   
										<span id="max-price" data-currency="€" data-max="<?php echo $max_budget; ?>" class="slider-price">
											<?php echo ($_POST["price_max"]) ? $_POST["price_max"] : $max_budget; ?>
											<?php //echo $max_budget; ?>
										</span>
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
									<input class="input-number guests" id="guests" type="text" value="0" min="<?php echo $min_guests; ?>" max="<?php echo $max_guests; ?>">
									<span class="input-number-increment">
										<svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.74868 5.75132V0.5H5.25132V5.75132H0V7.24868H5.25132V12.5H6.74868V7.24868H12V5.75132H6.74868Z" fill="#181D24"/></svg>
									</span>
								</div>
							</div>
						</div>
						
						<div class="filter-item filter-bedrooms">
							<div class="filter-item__top">
								<div class="title">bedrooms <span><?php echo $_POST["bedrooms"]; ?></span></div>
							</div>
							<div class="filter-item__body">
								<?php foreach($bedrooms as $key=>$val) : ?>
									<div class="filter__item">
										<input type="checkbox" name="bedrooms" id="bedroom_<?php echo $val; ?>" data-bedrooms="<?php echo $val; ?>" <?php echo($_POST["bedrooms"] == $val) ? 'checked':''; ?>> 
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
						<?php if($villas__list_main->have_posts()) : ?>
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
							<?php if($villas__list_main->max_num_pages > 1) : ?>
								<a href="#" class="btn-1 load-more">load more</a>
							<?php endif; ?>
							<input type="hidden" name="page" id="page" value="<?php echo $paged; ?>">
							<input type="hidden" name="per_page" id="per_page" value="<?php echo get_option( 'posts_per_page' ); ?>">
							<input type="hidden" name="max-pages" id="max-pages" value="<?php echo $villas__list_main->max_num_pages; ?>">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<?php get_template_part('template-parts/contact_us'); ?>         
</main>

<script type="text/javascript">
	jQuery(function($) {
		$("#slider-range").slider({
			range: true, 
			min: <?php echo $min_budget; ?>,
			max: <?php echo $max_budget; ?>,
			step: 1,
			values: [ <?php echo ($_POST["price_min"]) ? $_POST["price_min"] : $min_budget; ?>, <?php echo ($_POST["price_max"]) ? $_POST["price_max"] : $max_budget; ?> ],
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

		$('.clear').on('click', function() {
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
</script>

<?php get_footer(); ?>
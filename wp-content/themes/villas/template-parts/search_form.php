<form class="search__body" id="search__body" action="<?php echo site_url('/search-result/'); ?>" method="POST">
	<?php 
	$areas = get_terms(array(
		'taxonomy' => 'areas',
		'hide_empty' => false,
		'parent' => 0,
		'orderby' => 'name',
		'order' => 'ASC'
	));
	?>
	<?php if($areas) : ?>
		<div class="search__block search__areas">
			<div class="search_list">
				<div class="li all_options" data-area-id="">
						All areas
				</div>
				
				<?php //1st lvl hierarcical ?>
				<?php foreach($areas as $area) { ?>
					<div class="li first_child" data-area-id="<?php echo $area->term_id; ?>">
						<?php echo $area->name; ?>
					</div>
					<?php
					//2st lvl hierarcical
					$inner_areas = get_terms([
						'taxonomy' 		=> 'areas',
						'parent' 		=> $area->term_id, 
						'hide_empty' 	=> false,
						'orderby' 		=> 'name',
						'order' 		=> 'ASC'
					]);
					if(!is_wp_error( $inner_areas ) && $inner_areas) {
						foreach ( $inner_areas as $inner_area ) { ?>
							<div class="li second_child" data-area-id="<?php echo $inner_area->term_id; ?>">
								<?php echo $inner_area->name; ?>
							</div>
							<?php 
							//3st lvl hierarcical
							$sub_inner_areas = get_terms([
								'taxonomy' => 'areas', 
								'parent' => $inner_area->term_id, 
								'hide_empty' => false,
								'orderby' => 'name',
								'order' => 'ASC'
							]);
							if(!is_wp_error( $sub_inner_areas ) && $sub_inner_areas)	{
								foreach ( $sub_inner_areas as $sub_inner_area ) { ?>
									<div class="li third_child" data-area-id="<?php echo $sub_inner_area->term_id; ?>">
										<?php echo $sub_inner_area->name; ?>
									</div>
								<?php
								}
							}
						}
					}
				}					 
				?>
			</div>
			<div class="button">
				Areas 
				<svg width="6" height="5" viewBox="0 0 6 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.44562 4.17216C2.60844 4.39151 2.93678 4.39151 3.09961 4.17216L5.46424 0.986639C5.66371 0.717924 5.47191 0.33667 5.13725 0.33667H0.407973C0.0733163 0.33667 -0.118489 0.717924 0.0809794 0.986638L2.44562 4.17216Z" fill="white"/></svg>
			</div>
			<div class="text">
				<?php 
				if($_POST['area']) {
					$area = get_term_by('id', $_POST['area'], 'areas');
					echo get_full_area($area, '', 'text');
				}
				else echo '<span>Select area</span>';
				?>
			</div> 
		</div>
	<?php endif; ?>
	
	
	<style>
		.search__body {
			padding-left:30px;
			padding-right:30px;
		}
		.search_list#search-date {
			min-width: 270px;
			height: 275px;
			padding: 10px;
		}
		#search-date .air-datepicker {
			border: none;
			border-radius: 0;
			background: #1E4958;
			width:100%;
		}
		.air-datepicker-cell {
			
		}
		#search-date .air-datepicker-nav--title,
		#search-date .air-datepicker-nav--title i,
		#search-date .air-datepicker-body--day-name,
		#search-date .air-datepicker-cell{
			color:#fff;
			font-family: 'Euclid Circular B';
			font-style:normal !important;
			font-size:13px;
		}
		#search-date .air-datepicker-nav--title,
		#search-date .air-datepicker-nav--title i {
			font-size:14px;
		}
		#search-date .air-datepicker-body--day-name {
			text-transform: capitalize;
		}
		#search-date .air-datepicker-cell.-current-{
			border:1px solid #fff;
			border-radius:100%;
		}

		#search-date .air-datepicker-cell:hover {
			background:#26848B;
			border-radius:100%;
		}
		#search-date  .air-datepicker-cell.-day-.-other-month- {
			color:grey;
		}

		#search-date .air-datepicker-cell.-selected-,
		#search-date .air-datepicker-cell.-selected-.fe,
		#search-date .air-datepicker-cell.-selected-.le {
			border-radius:100%;
			background:#26848B;
		}
		#search-date .air-datepicker-cell.-selected-.fe::after,
		#search-date .air-datepicker-cell.-selected-.le::after {
			content:'';
			position:absolute;
			top:0;
			width:100%;
			height:100%;
			background: rgba(38, 132, 139, 0.2);		
		}
		#search-date .air-datepicker-cell.-selected-.fe::after {
			left:0;
			border-radius: 100% 0 0 100%;
		}
		#search-date .air-datepicker-cell.-selected-.le::after {
			border-radius: 0 100% 100% 0;
			left: 0;
		}
		#search-date .air-datepicker-cell.between,
		#search-date .air-datepicker-cell.between:hover{
			background: rgba(38, 132, 139, 0.2);
			border-radius: 0;
			border:none;
		}
		.page-top__search .button svg {
			margin-left:6px;
		}
		#search__body button[type="submit"] {
			padding:15px 0;
			flex:1 0 160px;
		}
		@media only screen and (max-width:900px) {
			#search__body button[type="submit"] { 
				flex:unset;
			}
			#search-date .air-datepicker-cell.-current-,
			#search-date .air-datepicker-cell:hover {
				border:none;
				border-radius:0;
			}
			#search-date .air-datepicker-cell.-selected-,
			#search-date .air-datepicker-cell.-selected-.fe,
			#search-date .air-datepicker-cell.-selected-.le {
				border-radius:0;
				background:transparent;
			}
			#search-date .air-datepicker-cell:hover {
				background:unset;
			}
			#search-date .air-datepicker-cell.-current-::before,
			#search-date .air-datepicker-cell:hover::before,
			#search-date .air-datepicker-cell.-selected-.fe::after, 
			#search-date .air-datepicker-cell.-selected-.le::after,
			#search-date .air-datepicker-cell.between::before,
			#search-date .air-datepicker-cell.-selected-::before{
				content:'';
				position:absolute;
				top: calc(50% - 20px);
				left: calc(50% - 20px);
				width:38px;
				height:38px;
				z-index:-1;
			}
			#search-date .air-datepicker-cell.-selected-::before {
				background:#26848B;
				border-radius: 100%;
			}
			#search-date .air-datepicker-cell.-current-::before{			
				border-radius:100%;
				border:1px solid #ffffff;
			}
			#search-date .air-datepicker-cell:not(.-selected-):hover,
			#search-date .air-datepicker-cell:not(.-selected-):hover::before,
			#search-date .air-datepicker-cell.-focus-:not(.-selected-){
				background:unset;
				border-radius: 100%;
				border:none;
			}
			
			#search-date .air-datepicker-cell.between {
				background:none;
			}
			#search-date .air-datepicker-cell.between::before,
			#search-date .air-datepicker-cell.-selected-.fe::after{
				background: rgba(38, 132, 139, 0.2);
				width: 100%;
			}
		}
	</style>
	
	<div class="search__block search__rooms search__dates">
		<div class="search_list" id="search-date"></div>
		<div class="button">
			date 
			<svg width="6" height="5" viewBox="0 0 6 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.44562 4.17216C2.60844 4.39151 2.93678 4.39151 3.09961 4.17216L5.46424 0.986639C5.66371 0.717924 5.47191 0.33667 5.13725 0.33667H0.407973C0.0733163 0.33667 -0.118489 0.717924 0.0809794 0.986638L2.44562 4.17216Z" fill="white"/></svg>
		</div>            
		<div class="text">
			<?php 
			if($_POST['bedrooms']) echo $_POST['bedrooms']; 
			else echo '<span>Feb 9 - Feb 14</span>';
			?>			
		</div> 
	</div>
	
	
	
	
	<?php
	$args_sec = array(
		'post_type' => 'villa',
		'posts_per_page' => -1,
	);
	$villas__list_sec = get_posts($args_sec);
	
	$budget = $bedrooms = [];
	foreach($villas__list_sec as $post) {
		setup_postdata($post);
		$price = get_field('price');
		if($price && $price != 0) $budget[] = $price;
		
		$bedroom = get_field('bedrooms');
		if($bedroom && $bedroom != 0) $bedrooms[] = $bedroom;
	}
	wp_reset_postdata();
	//$count_villas = count($budget);
	$budget = array_unique($budget);
	$min_budget = min($budget);
	$max_budget = max($budget);
	$bedrooms = array_unique($bedrooms);
	asort($bedrooms);
	?>
	
	<div class="search__block search__rooms">
		<div class="search_list">
			<div class="li all_options" data-bedrooms="">
				Check all
			</div>
			<?php foreach($bedrooms as $key=>$val) : ?>
				<div class="li" data-bedrooms="<?php echo $val; ?>"><?php echo $val; ?></div> 
			<?php endforeach; ?>
		</div>
		<div class="button">
			rooms 
			<svg width="6" height="5" viewBox="0 0 6 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.44562 4.17216C2.60844 4.39151 2.93678 4.39151 3.09961 4.17216L5.46424 0.986639C5.66371 0.717924 5.47191 0.33667 5.13725 0.33667H0.407973C0.0733163 0.33667 -0.118489 0.717924 0.0809794 0.986638L2.44562 4.17216Z" fill="white"/></svg>
		</div>            
		<div class="text">
			<?php 
			if($_POST['bedrooms']) echo $_POST['bedrooms']; 
			else echo '<span>1, 2 ...</span>';
			?>			
		</div> 
	</div>
	
	<div class="search__block search__range">
		<!--div class="s-range">
			<div class="range-slider range__slider">
				<span class="rangeValues">from<span>€ <?php echo $min_budget; ?></span> to <span>€ <?php echo $max_budget; ?></span></span>
				<input name="price_min" value="<?php echo($_POST['price_min']) ? $_POST['price_min'] : $min_budget; ?>" min="<?php echo $min_budget; ?>" max="<?php echo $max_budget; ?>" step="1" type="range">
				<input name="price_max" value="<?php echo($_POST['price_max']) ? $_POST['price_max'] : $max_budget; ?>" min="<?php echo $min_budget; ?>" max="<?php echo $max_budget; ?>" step="1" type="range">
			</div>
		</div-->
		
		
		<div class="s-range">
			<div class="selector">
				<div class="price-slider range__slider">
					<div class="slider-top">
						<div class="slider-from">
							<div class="titl">from</div>
							<span id="min-price2" data-currency="€" data-min="<?php echo($_POST['price_min']) ? $_POST['price_min'] : $min_budget; ?>" class="slider-price">
								<?php echo($_POST['price_min']) ? $_POST['price_min'] : $min_budget; ?>
							</span>                    
						</div>
						<div class="slider-to">
							<div class="titl">to</div>
							<span id="max-price2" data-currency="€" data-max="<?php echo($_POST['price_max']) ? $_POST['price_max'] : $max_budget; ?>"  class="slider-price">
								<?php echo($_POST['price_max']) ? $_POST['price_max'] : $max_budget; ?>
							</span>
						</div>
					</div>
					<div id="slider-range2" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
						<div class="ui-slider-range ui-corner-all ui-widget-header"></div>
						<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
						<span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
					</div>
				</div>
			</div>
		</div>
		
		
		
		
		<div class="button">
			price range 
			<svg width="6" height="5" viewBox="0 0 6 5" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.44562 4.17216C2.60844 4.39151 2.93678 4.39151 3.09961 4.17216L5.46424 0.986639C5.66371 0.717924 5.47191 0.33667 5.13725 0.33667H0.407973C0.0733163 0.33667 -0.118489 0.717924 0.0809794 0.986638L2.44562 4.17216Z" fill="white"/></svg>
		</div>
		<div class="text" id="price__range_text">
			<?php 
			if($_POST['price_min'] && $_POST['price_max']) echo 'from €'.$_POST['price_min'].' to €'.$_POST['price_max']; 
			else echo '<span>from €'.$min_budget.' to €'.$max_budget.'</span>';
			?>			
		</div> 
	</div>
	<button type="submit" class="btn-1">search villas</button>
	<input type="hidden" name="area" id="area" value="<?php echo $_POST["area"]; ?>">
	<input type="hidden" name="bedrooms" id="bedrooms" value="<?php echo $_POST["bedrooms"]; ?>">
	<input name="price_min" id="price_min" value="<?php echo($_POST['price_min']) ? $_POST['price_min'] : $min_budget; ?>" type="hidden">
	<input name="price_max" id="price_max" value="<?php echo($_POST['price_max']) ? $_POST['price_max'] : $max_budget; ?>" type="hidden">
	<input name="date_start" id="date_start" value="<?php echo($_POST['date_start']) ? $_POST['date_start'] : 0; ?>" type="hidden">
	<input name="date_end" id="date_end" value="<?php echo($_POST['date_end']) ? $_POST['date_end'] : 0; ?>" type="hidden">
</form>  


<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
	jQuery(function($) {
		$('body').on('click', '.search_list.active .li', function() {
			var block = $(this).parents('.search__block');
			block.find('.text').text($(this).text());
			if(block.hasClass('search__areas')) $('#area').val($(this).data('area-id'));
			if(block.hasClass('search__rooms')) $('#bedrooms').val($(this).data('bedrooms'));
		});

		$("#slider-range2").slider({
			range: true, 
			min: <?php echo($_POST['price_min']) ? $_POST['price_min'] : $min_budget; ?>,
			max: <?php echo($_POST['price_max']) ? $_POST['price_max'] : $max_budget; ?>,
			values: [  <?php echo($_POST['price_min']) ? $_POST['price_min'] : $min_budget; ?>, <?php echo($_POST['price_max']) ? $_POST['price_max'] : $max_budget; ?> ],
			step:1,
			slide: function( event, ui ) {
				$( "#min-price2").html(ui.values[ 0 ]);
				suffix = '';
				if (ui.values[ 1 ] == $( "#max-price2").data('max') ) suffix = '';
				$( "#max-price2").html(ui.values[ 1 ] + suffix);  

				$('#price__range_text').html('from € ' + ui.values[ 0 ] + ' to € ' + ui.values[ 1 ]);
				$('#price_min').val(ui.values[ 0 ]);
				$('#price_max').val(ui.values[ 1 ]);
			}
		   });
	});
	
	//slider
	/*function getVals(){
		// Get slider values
		let parent = this.parentNode;
		let slides = parent.getElementsByTagName("input");
		let slide1 = parseFloat( slides[0].value );
		let slide2 = parseFloat( slides[1].value );
		// Neither slider will clip the other, so make sure we determine which is larger
		if( slide1 > slide2 ){ let tmp = slide2; slide2 = slide1; slide1 = tmp; }

		let displayElement = parent.getElementsByClassName("rangeValues")[0];
		let displayElement2 = document.getElementById("price__range_text");
		displayElement.innerHTML = "from<span>€ " + slide1 + "</span> to <span>€ " + slide2 + "</span>";
		displayElement2.innerHTML = "€ " + slide1 + " to € " + slide2 + "";
	}

	window.onload = function(){
		// Initialize Sliders
		let sliderSections = document.getElementsByClassName("range__slider");
		for( let x = 0; x < sliderSections.length; x++ ){
			let sliders = sliderSections[x].getElementsByTagName("input");
			for( let y = 0; y < sliders.length; y++ ){
				if( sliders[y].type ==="range" ){						
					sliders[y].oninput = getVals;
					// Manually trigger event first time to display values
					//sliders[y].oninput();
				}
			}
		}
	}*/
	
	

</script>
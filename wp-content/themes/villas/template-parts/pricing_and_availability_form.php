<?php global $post; ?>
<div class="search__body time" id="availability_form">
	<div class="search__wrapper">
			
		<div class="search__areas"> 
			<div class="button check_in_field"> 
				<label for="date_in">check in </label>
				<svg width="6" height="5" viewBox="0 0 6 5" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.44562 4.17216C2.60844 4.39151 2.93678 4.39151 3.09961 4.17216L5.46424 0.986639C5.66371 0.717924 5.47191 0.33667 5.13725 0.33667H0.407973C0.0733163 0.33667 -0.118489 0.717924 0.0809794 0.986638L2.44562 4.17216Z" fill="white"/>
				</svg>
			</div>
			<div class="text">
				<input type="text" id="date_in" name="date_in" class="date-input" placeholder="<?php echo date('m/d/Y'); ?>">
			</div> 
		</div>

		<div class="search__areas"> 
			<div class="button check_out_field "> 
				<label for="date_out">check out </label>
				<svg width="6" height="5" viewBox="0 0 6 5" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.44562 4.17216C2.60844 4.39151 2.93678 4.39151 3.09961 4.17216L5.46424 0.986639C5.66371 0.717924 5.47191 0.33667 5.13725 0.33667H0.407973C0.0733163 0.33667 -0.118489 0.717924 0.0809794 0.986638L2.44562 4.17216Z" fill="white"/>
				</svg>
			</div>
			<div class="text">
				<input type="text" id="date_out" name="date_out" class="date-input" placeholder="<?php echo date('m/d/Y'); ?>">
			</div> 
		</div>


		<div class="search__rooms ">
			<?php
			$args_sec = array(
				'post_type' => 'villa',
				'posts_per_page' => -1,
			);
			$villas__list_sec = get_posts($args_sec);

			$guests = [];
			foreach($villas__list_sec as $post) {
				setup_postdata($post);
				$guest = get_field('guests');
				if($guest && $guest != 0) $guests[] = $guest;
			}
			wp_reset_postdata();
			$guests = array_unique($guests);
			asort($guests);
			$max_quests = array_pop($guests);
			?>
			<div class="search_list guests_list">
				<?php for($i = 1; $i <= $max_quests; $i++) { ?>
					<div class="li"><?php echo $i; ?></div> 
				<?php } ?>
			</div>
			<div class="button">guests 
				<svg width="6" height="5" viewBox="0 0 6 5" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M2.44562 4.17216C2.60844 4.39151 2.93678 4.39151 3.09961 4.17216L5.46424 0.986639C5.66371 0.717924 5.47191 0.33667 5.13725 0.33667H0.407973C0.0733163 0.33667 -0.118489 0.717924 0.0809794 0.986638L2.44562 4.17216Z" fill="white"/>
				</svg>
			</div>            
			<div class="text" id="guests">1, 2 ...</div> 
		</div>

		<?php if(have_rows('prices_table', $post->ID)) : $prices = []; ?>
		<?php while(have_rows('prices_table', $post->ID)) : the_row(); ?>
			<?php $prices[] = get_sub_field('price_per_night'); ?>
		<?php endwhile; ?>
		<?php endif; ?>

		<?php 
		sort($prices);
		$min_price = array_shift($prices);
		$max_price = array_pop($prices);
		?>

		<div class="search__block search__range">
			<div class="button">
				price range 
			</div>
			<div class="text" id="price__range_text">
				<span><?php echo 'from €'.$min_price.' to €'.$max_price; ?></span>			
			</div> 
		</div>
		
	</div>
	
	<a href="#" class="btn-1 availability__form_btn">Check Pricing and Availability</a>
	
</div>        
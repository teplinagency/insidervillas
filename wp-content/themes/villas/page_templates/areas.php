<?php
/**
 * Template name: Areas
 */
get_header();
?>
<main>
	<div class="page-top all-vilass" style="background-image: url(https://insidervillas.com/wp-content/uploads/2022/09/DSC_4925.jpg);">
		<div class="container">
			<h1 class="h1">Our luxury holiday destinations</h1> 
		</div> 
	</div>

	<section class="text-and-2-img">
		<div class="container">	
			<div class="all_areas_Wrapper">
				<?php
				$area_list = get_terms(['taxonomy' => 'areas', 'parent' => 0, 'orderby' => 'name', 'order' => 'ASC']);
				if($area_list) {
					echo '<ul class="main_area">';
					
					foreach($area_list as $main_area) {
						echo '<li>';
							echo '<a href="'.get_term_link($main_area).'">'.$main_area->name.'</a>';
							$sub_area_list = get_terms(['taxonomy' => 'areas', 'parent' => $main_area->term_id, 'orderby' => 'name', 'order' => 'ASC']);
							if($sub_area_list) {
								echo '<ul class="sub_main_area">';
									foreach($sub_area_list as $sub_area) {
										echo '<li>';
											echo '<a href="'.get_term_link($sub_area).'">'.$sub_area->name.'</a>';

											$subsub_area_list = get_terms(['taxonomy' => 'areas', 'parent' => $sub_area->term_id, 'orderby' => 'name', 'order' => 'ASC']);	
											if($subsub_area_list) {
												echo '<ul class="subsub_main_area">';
													foreach($subsub_area_list as $subsub_area) {
														echo '<li>';
															echo '<a href="'.get_term_link($subsub_area).'">'.$subsub_area->name.'</a>';
														echo '</li>';
													}
												echo '</ul>'; //subsub_main_area
											}
										echo '</li>';
									}
								echo '</ul>'; //sub_main_area
							}
						echo '</li>';
					}
					echo '</ul>'; //main_area
				}
				?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
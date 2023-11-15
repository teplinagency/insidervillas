<?php
/**
 * Template Post Type: villa
 */
get_header();
?>
<?php global $post; ?>
<?php $villa_name = get_the_title(); ?>


<main>
	<div class="page-top all-vilass" style="background-image: url(<?php echo get_the_post_thumbnail_url($post->ID, 'full'); ?>);">
		<div class="container">
			<h1 class="h1"><?php the_title(); ?></h1> 
		</div> 

		<div class="page-top__search">
			<div class="container">
				<?php get_template_part('template-parts/pricing_and_availability_form'); ?>   
			</div>
		</div>
	</div>
	
	<?php $content_block = get_field('first_content_block'); ?>
	<?php $etv7155 = get_field('etv7155'); ?>
	<?php $features = get_field('features_box'); ?>
	<?php $services = get_field('services'); ?>
	
	<?php if(($content_block["block_text"] || $content_block["block_title"]) || $etv7155["etv_7155_list"] || $features["features_list"] || $services["services_list"]) : ?>
		<div class="villa-new-block">
			<div class="container">			
				<?php if($content_block["block_text"] || $content_block["block_title"]) : ?>
					<div class="villa-new-block__body">
						<div class="villa-new-block__left">
							<?php echo wp_get_attachment_image($content_block["block_image"], 'large'); ?>
						</div>
						<div class="villa-new-block__right">
							<?php $villa = trim(strtok(get_the_title(), ',')); ?>
							<div class="h3"><?php echo str_replace('%villa%', $villa, $content_block["block_title"]); ?></div>
							<div class="subtitle"><?php echo $content_block["block_subtitle"]; ?></div>
							<div class="desc">
								<?php echo $content_block["block_text"]; ?>
							</div>
						</div>
					</div>
				<?php endif; ?>

				
				<div class="villa-new-block__items <?php echo (!$etv7155["etv_7155_list"] || !$features["features_list"] || !$services["services_list"]) ? 'two_columns':''; ?>">				
					<?php if($etv7155["etv_7155_list"]) : ?>
						<div class="villa-new-block__item">
							<div class="top">
								<div class="ico">
									<?php if($etv7155["icon"]) : ?>
										<img src="<?php echo $etv7155["icon"]; ?>" alt="">
									<?php else : ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/double-bed.svg" alt="">
									<?php endif; ?>
								</div>
								<div class="title"><?php echo $etv7155["title"]; ?></div>
							</div>
							<?php echo $etv7155["etv_7155_list"]; ?>
						</div>
					<?php endif; ?>


					<?php if($features["features_list"]) : ?>
						<div class="villa-new-block__item">
							<div class="top">
								<div class="ico">
									<?php if($features["icon"]) : ?>
										<img src="<?php echo $features["icon"]; ?>" alt="">
									<?php else : ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hibicus.svg" alt="">
									<?php endif; ?>
								</div>
								<div class="title"><?php echo $features["title"]; ?></div>
							</div>
							<?php echo $features["features_list"]; ?>
						</div>
					<?php endif; ?>


					<?php if($services["services_list"]) : ?>
						<div class="villa-new-block__item">
							<div class="top">
								<div class="ico">
									<?php if($services["icon"]) : ?>
										<img src="<?php echo $services["icon"]; ?>" alt="">
									<?php else : ?>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/margarita.svg" alt="">
									<?php endif; ?>
								</div>
								<div class="title"><?php echo $services["title"]; ?></div>
							</div>
							<?php echo $services["services_list"]; ?>
						</div>
					<?php endif; ?>
				</div>
				<div class="hr"></div>
			</div>
		</div>
	<?php endif; ?>


	<section class="key-highlights">
		<div class="key-highlights-top">
			<div class="container">
				<div class="title">
					<?php if($subtitle = get_field('sub_title')) : ?>
						<h3 class="h3"><?php echo $subtitle; ?></h3>
					<?php endif; ?>
					<div class="desc">
						<?php the_field('short_description'); ?>
					</div>
				</div>
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
		
		<?php if($fotos = get_field('additional_foto')) : $row = 1; ?>
			<div class="key-highlights_bottom">
				<div class="container">
					<div class="key-highlights_slider">
						<?php foreach($fotos as $foto) :  ?>
							<?php 
							if($row == 1) echo '<div class="key-highlights_item" data-row-id="'.$row.'">'; 
							elseif($row % 3 == 0) echo '</div><div class="key-highlights_item" data-row-id="'.$row.'">';
							?>								
								<a href="<?php echo wp_get_attachment_image_url($foto, 'full'); ?>" data-fancybox="gallery" class="key-highlights_row" data-image-id="<?php echo $row; ?>" <?php echo ($row % 3 == 0) ? 'style="height:100%"' : ''; ?>>
									<?php echo wp_get_attachment_image($foto, 'large'); ?>
								</a>
							<?php 
							if($row % 3 == 0) echo '</div><div class="key-highlights_item" data-row-id="'.$row.'">'; 

							$row++; 
							if($row > 5) {
								echo '</div>'; 
								$row = 1;
							}
							?>

						<?php endforeach; ?> 
					</div>
				</div>
			</div> 
		<?php endif; ?>
	</section>


	<section class="info-block">
		<div class="container">
			<div class="info-block__body">
				<div class="info-block__left">
					<div class="title">Details</div>
					<div class="detals">
						<div class="left">
							<?php if($property_type = get_field('property_type')) : ?>
								<div class="left__item">property type <span><?php echo $property_type; ?></span></div>
							<?php endif; ?>
							
							<?php if($property_id = get_field('property_id')) : ?>
								<div class="left__item">property id <span><?php echo $property_id; ?></span></div>
							<?php endif; ?>
							
							<?php if($check_in_hour = get_field('check_in_hour')) : ?>
								<div class="left__item">Check-in Hour <span><?php echo $check_in_hour; ?></span></div>
							<?php endif; ?>
							
							<?php if($check_out_hour = get_field('check-out_hour')) : ?>
								<div class="left__item">Check-Out Hour <span><?php echo $check_out_hour; ?></span></div> 
							<?php endif; ?>
						</div>
						<div class="right">
							<?php if($guests = get_field('guests')) : ?>
								<div class="right__item">
									<div class="ico">
										<svg width="11" height="14" viewBox="0 0 11 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.51953 8.25781H3.14453C2.31084 8.25875 1.51156 8.59035 0.922051 9.17986C0.332541 9.76937 0.000940841 10.5687 0 11.4023V12.4961C0.000434265 12.8948 0.159021 13.2771 0.440964 13.559C0.722907 13.841 1.10518 13.9996 1.50391 14H9.16016C9.55888 13.9996 9.94116 13.841 10.2231 13.559C10.505 13.2771 10.6636 12.8948 10.6641 12.4961V11.4023C10.6631 10.5687 10.3315 9.76937 9.74201 9.17986C9.1525 8.59035 8.35322 8.25875 7.51953 8.25781Z" fill="#181D24"/><path d="M2.55386 4.82672C2.61176 5.52364 2.9295 6.17333 3.44406 6.64691C3.95862 7.12049 4.63238 7.38335 5.3317 7.38335C6.03102 7.38335 6.70479 7.12049 7.21935 6.64691C7.7339 6.17333 8.05165 5.52364 8.10955 4.82672L8.26021 3.01902C8.29225 2.63478 8.24422 2.24807 8.11916 1.88334C7.9941 1.51861 7.79473 1.18379 7.53366 0.900051C7.27259 0.61631 6.95549 0.38982 6.60241 0.234898C6.24932 0.0799754 5.86794 -9.34076e-06 5.48237 6.783e-08H5.18159C4.79597 -8.49991e-05 4.41452 0.079844 4.06138 0.234733C3.70823 0.389622 3.39106 0.616101 3.12993 0.899849C2.8688 1.1836 2.66938 1.51844 2.54429 1.88321C2.4192 2.24798 2.37115 2.63473 2.40319 3.01902L2.55386 4.82672Z" fill="#181D24"/></svg>
									</div>
									<?php echo $guests; ?> guests
								</div>
							<?php endif; ?>
							
							<?php if($bedrooms = get_field('bedrooms')) : ?>
								<div class="right__item">
									<div class="ico">
										<svg width="14" height="10" viewBox="0 0 14 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14 6V9.5C14 9.776 13.776 10 13.5 10C13.224 10 13 9.776 13 9.5V9H1V9.5C1 9.776 0.776 10 0.5 10C0.224 10 0 9.776 0 9.5V6C0 5.173 0.673 4.5 1.5 4.5H12.5C13.327 4.5 14 5.173 14 6Z" fill="#181D24"/><path d="M1.5 3.5V0.5C1.5 0.224 1.724 0 2 0H12C12.276 0 12.5 0.224 12.5 0.5V3.5H11V3C11 2.4485 10.5515 2 10 2H8.5C7.9485 2 7.5 2.4485 7.5 3V3.5H6.5V3C6.5 2.4485 6.0515 2 5.5 2H4C3.4485 2 3 2.4485 3 3V3.5H1.5Z" fill="#181D24"/></svg>
									</div>
									<?php echo $bedrooms; ?> bedrooms
								</div>
							<?php endif; ?>
							
							<?php if($bathrooms = get_field('bathrooms')) : ?>
								<div class="right__item">
									<div class="ico">
										<svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M13 9.5V11C13 11.842 12.4755 12.561 11.737 12.8555L11.9475 13.2765C12.071 13.5235 11.971 13.824 11.724 13.9475C11.479 14.07 11.178 13.973 11.053 13.724L10.691 13H3.309L2.947 13.7235C2.822 13.9725 2.521 14.0695 2.276 13.947C2.029 13.8235 1.929 13.523 2.0525 13.276L2.263 12.855C1.5245 12.561 1 11.842 1 11V9.5H13Z" fill="#181D24"/><path d="M14 8C14 8.276 13.7765 8.5 13.5 8.5C8.6315 8.5 5.3675 8.5 0.5 8.5C0.2235 8.5 0 8.276 0 8C0 7.724 0.2235 7.5 0.5 7.5H1V1.5C1 0.673 1.673 0 2.5 0C3.068 0 3.4385 0.2315 3.8125 0.6055C3.9725 0.538 4.1485 0.5 4.3335 0.5C4.8395 0.5 5.274 0.785 5.5 1.2L3.7 3C3.285 2.774 3 2.3395 3 1.8335C3 1.6485 3.038 1.473 3.1055 1.313C2.925 1.132 2.794 1 2.501 1C2.2245 1 2 1.2245 2 1.5V7.5H13.5C13.7765 7.5 14 7.724 14 8Z" fill="#181D24"/></svg>
									</div>
									<?php echo $bathrooms; ?> bathrooms
								</div>
							<?php endif; ?>
							
							<?php if($square = get_field('square')) : ?>
								<div class="right__item">
									<div class="ico">
										<svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.99999 6H2C0.89543 6 0 6.89543 0 8V14C0 15.1046 0.89543 16 2 16H7.99999C9.10456 16 9.99999 15.1046 9.99999 14V8C9.99999 6.89543 9.10456 6 7.99999 6Z" fill="#181D24"/><path d="M9.97931 1.88108C9.95764 1.74736 9.89498 1.62366 9.79998 1.52708L8.47065 0.193751C8.40875 0.131767 8.33525 0.0825816 8.25435 0.0490026C8.17344 0.0154237 8.08672 -0.00189105 7.99912 -0.00195296C7.91152 -0.00201486 7.82477 0.0151773 7.74382 0.0486418C7.66287 0.0821064 7.5893 0.131188 7.52731 0.193084C7.46533 0.254981 7.41614 0.32848 7.38257 0.409385C7.34899 0.49029 7.33167 0.577016 7.33161 0.664613C7.33155 0.752209 7.34874 0.83896 7.38221 0.919913C7.41567 1.00086 7.46475 1.07443 7.52665 1.13642L7.72398 1.33375H2.27598L2.47131 1.13908C2.59641 1.01408 2.66672 0.8445 2.66678 0.667653C2.66685 0.490806 2.59665 0.321178 2.47165 0.196084C2.34664 0.0709906 2.17706 0.000678595 2.00022 0.000616083C1.82337 0.000553571 1.65374 0.0707457 1.52865 0.195751L0.195315 1.52908C0.0731508 1.65571 0.00488281 1.8248 0.00488281 2.00075C0.00488281 2.1767 0.0731508 2.34579 0.195315 2.47242L1.52865 3.80575C1.65476 3.92865 1.82389 3.99743 1.99998 3.99743C2.17607 3.99743 2.3452 3.92865 2.47131 3.80575C2.5963 3.68073 2.66651 3.51119 2.66651 3.33442C2.66651 3.15764 2.5963 2.9881 2.47131 2.86308L2.27598 2.66708H7.72331L7.52798 2.86242C7.403 2.98743 7.33279 3.15697 7.33279 3.33375C7.33279 3.51053 7.403 3.68006 7.52798 3.80508C7.655 3.92648 7.82394 3.99423 7.99965 3.99423C8.17535 3.99423 8.34429 3.92648 8.47131 3.80508L9.80465 2.47175C9.87828 2.39405 9.93249 2.30003 9.96285 2.19737C9.99321 2.09472 9.99885 1.98634 9.97931 1.88108Z" fill="#181D24"/><path d="M14.8619 13.5282L14.6666 13.7235V8.27618L14.8619 8.47151C14.9239 8.53341 14.9975 8.58249 15.0784 8.61596C15.1594 8.64942 15.2461 8.66661 15.3337 8.66655C15.4213 8.66649 15.5081 8.64917 15.589 8.6156C15.6699 8.58202 15.7434 8.53283 15.8053 8.47085C15.8672 8.40886 15.9162 8.33529 15.9497 8.25434C15.9832 8.17339 16.0004 8.08664 16.0003 7.99904C16.0002 7.91145 15.9829 7.82472 15.9493 7.74381C15.9158 7.66291 15.8666 7.58941 15.8046 7.52751L14.4713 6.19418C14.3436 6.07326 14.1744 6.00586 13.9986 6.00586C13.8227 6.00586 13.6536 6.07326 13.5259 6.19418L12.1926 7.52351C12.1306 7.58543 12.0814 7.65895 12.0479 7.73989C12.0143 7.82082 11.9971 7.90757 11.9971 7.99518C11.9971 8.08279 12.0143 8.16954 12.0479 8.25047C12.0814 8.33141 12.1306 8.40493 12.1926 8.46685C12.3187 8.5901 12.488 8.65912 12.6643 8.65912C12.8406 8.65912 13.0099 8.5901 13.1359 8.46685L13.3333 8.27551V13.7235L13.1386 13.5282C13.0767 13.4662 13.0032 13.4171 12.9223 13.3836C12.8414 13.35 12.7547 13.3327 12.6672 13.3327C12.5796 13.3327 12.4929 13.3499 12.412 13.3834C12.3311 13.4169 12.2575 13.466 12.1956 13.5278C12.1337 13.5897 12.0845 13.6632 12.051 13.7441C12.0174 13.825 12.0002 13.9117 12.0001 13.9993C12.0001 14.0868 12.0173 14.1736 12.0508 14.2545C12.0843 14.3354 12.1334 14.4089 12.1953 14.4708L13.5286 15.8042C13.6552 15.9263 13.8243 15.9946 14.0003 15.9946C14.1762 15.9946 14.3453 15.9263 14.4719 15.8042L15.8053 14.4708C15.9267 14.3451 15.9939 14.1767 15.9924 14.0019C15.9909 13.8271 15.9207 13.6599 15.7971 13.5363C15.6735 13.4127 15.5063 13.3426 15.3315 13.3411C15.1567 13.3395 14.9883 13.4067 14.8626 13.5282H14.8619Z" fill="#181D24"/></svg>
									</div>
									<?php echo $square; ?> m2
								</div>
							<?php endif; ?>
							
						</div>
					</div>
					<div class="mob-img-btn">               
						<a href="javascript:;" data-fancybox data-src="#request-villa" class="btn-2">Check Pricing and Availability</a>
						<div class="image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/info-block.jpg" alt=""></div>    
					</div>
					
					<?php if($features = get_field('features')) : ?>
						<div class="features">
							<div class="title">Features</div>
							<div class="features__items">
								<?php foreach($features as $item) : ?>
								<div class="features__item">
									<div class="ico">
										<?php $svg = file_get_contents(get_stylesheet_directory_uri().'/assets/img/'.$item['value'].'.svg'); ?>
										<?php echo $svg; ?>
										<?php //echo get_stylesheet_directory_uri().'/assets/img/'.$item['value'].'svg'; ?>
									</div>
									<?php echo $item['label']; ?>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endif; ?>
					
					<div class="features location">
						<div class="title">Location</div>
						<div class="features__items">
							<div class="features__item">
								<div class="ico">
									<svg width="36" height="40" viewBox="0 0 36 40" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M32.1894 19.7673C32.1568 19.4651 32.1331 19.1095 32.0619 18.7066C31.9701 18.3065 31.8842 17.8473 31.742 17.3347C31.422 16.3273 30.9538 15.0769 30.0619 13.6933C27.4648 9.78455 23.1638 7.30111 18.0501 7.27246C14.4673 7.29253 10.8993 8.68761 8.17457 11.2932C7.95827 11.477 7.77454 11.6992 7.57604 11.9155C7.38048 12.1347 7.17305 12.3451 6.98345 12.5821C6.63084 13.071 6.22195 13.5451 5.91379 14.108C5.21753 15.1807 4.69308 16.434 4.30788 17.7733C3.55231 20.4547 3.57011 23.5895 4.63084 26.4903C6.05146 30.61 9.72091 34.3036 14.6486 35.5184C16.139 35.8828 17.6679 36.0251 19.1405 35.8858C20.6072 35.7614 22.0383 35.4651 23.3182 34.9169C28.6146 32.7274 31.6182 28.0284 32.0146 23.3258C32.056 23.0651 32.0353 22.8251 32.0412 22.6236C32.0412 22.4192 32.0383 22.2473 32.0383 22.108C32.0353 21.9658 32.0294 21.8562 32.0235 21.7851C32.0857 21.7228 32.1094 21.6488 32.1212 21.5717C32.1538 21.4888 32.1805 21.3376 32.2012 21.0769C32.2131 20.9347 32.222 20.7599 32.2279 20.5436C32.2279 20.434 32.2368 20.3154 32.2309 20.188C32.219 20.0577 32.2042 19.9184 32.1894 19.7673ZM31.9138 22.1021C31.899 22.2414 31.8812 22.4103 31.8575 22.6117C31.8338 22.8103 31.8338 23.0413 31.7716 23.2992C30.9928 28.1987 27.9021 32.3145 23.0397 34.2029C21.819 34.6917 20.4649 34.9436 19.0842 35.0354C18.9301 35.0473 18.7731 35.0562 18.619 35.0591C18.6723 34.8991 18.6931 34.6503 18.6723 34.268C18.6397 33.6903 18.299 32.4606 17.9671 32.4784C17.6353 32.4992 17.4338 33.7555 17.4664 34.3362C17.4871 34.665 17.5257 34.8932 17.582 35.0473C16.6783 34.9999 15.7686 34.8488 14.8768 34.6177C10.3313 33.4107 6.95177 29.9488 5.67974 26.1199C5.16711 24.6769 4.93306 23.1718 4.939 21.711C5.09897 21.7555 5.30343 21.7999 5.51973 21.8414C5.83971 21.9066 6.18346 21.9629 6.41751 21.9806C6.92124 22.0162 7.17305 22.0014 7.31823 21.9214C7.46048 21.8414 7.5079 21.6992 7.55231 21.5392C7.59677 21.3792 7.63529 21.231 7.50197 21.0858C7.37158 20.9466 7.07528 20.8162 6.49752 20.7777C6.23084 20.7569 5.83378 20.7925 5.46934 20.8932C5.28271 20.9436 5.1049 21.0118 4.95676 21.0888C5.00417 20.0488 5.17305 19.0384 5.44565 18.0932C5.80716 16.8695 6.29009 15.7199 6.93307 14.7391C7.21753 14.2236 7.59677 13.791 7.91675 13.3407C8.09159 13.1273 8.28416 12.9317 8.46196 12.7332C8.64567 12.5377 8.81157 12.3303 9.01011 12.1643C11.4702 9.81076 14.6643 8.53233 17.8931 8.45765C17.8664 8.54062 17.8397 8.63249 17.8131 8.73029C17.7094 9.10659 17.6264 9.54214 17.6027 9.82064C17.5079 10.8339 17.7331 10.8991 18.0708 10.9554C18.2368 10.9821 18.3849 11.0029 18.5153 10.8755C18.6457 10.751 18.7612 10.4754 18.8056 9.91251C18.8323 9.60435 18.782 9.11542 18.6664 8.71546C18.6397 8.62656 18.6131 8.54358 18.5805 8.46654C21.2955 8.56208 23.2438 9.28029 25.2679 10.4843C27.1168 11.6221 28.3553 13.0118 29.2323 14.2532C30.0975 15.5154 30.5775 16.6621 30.9301 17.5955C31.0872 18.0696 31.1968 18.4962 31.3123 18.8666C31.4071 19.2429 31.4575 19.5747 31.5227 19.8592C31.5523 20.0014 31.582 20.1318 31.6086 20.2532C31.6323 20.3747 31.6383 20.4873 31.6531 20.5881C31.6709 20.7036 31.6856 20.8073 31.6975 20.8991C31.502 20.8577 31.2175 20.8458 30.7968 20.8784C30.4471 20.9051 29.9079 21.0325 29.4664 21.2043C29.0249 21.3732 28.6872 21.5866 28.7168 21.7495C28.7434 21.9155 29.1286 22.0014 29.5849 22.0488C30.0383 22.0962 30.5686 22.108 30.9005 22.0784C31.4812 22.034 31.7894 21.954 31.9494 21.8473C31.9405 21.9125 31.9286 21.9984 31.9138 22.1021Z" fill="#26848B"/>
										<path d="M35.7581 20.2571C35.7605 19.9867 35.7392 19.6671 35.7043 19.2873C35.6298 18.5302 35.493 17.5278 35.1129 16.2561C34.7301 14.9895 34.1178 13.4398 32.9986 11.7225C30.2768 7.61866 26.1395 4.93946 21.4334 4.04204C21.4796 3.97411 21.5257 3.88065 21.5722 3.74299C21.6113 3.62732 21.6506 3.48308 21.6904 3.30325C21.9751 2.23811 21.2673 0.881388 19.8929 0.573649C19.729 0.540446 19.5511 0.521711 19.3635 0.523013C19.22 0.529668 19.069 0.536612 18.9122 0.543846C18.6006 0.563377 18.2657 0.584355 17.9206 0.605985C17.7474 0.619584 17.5884 0.62472 17.3457 0.664289C15.9541 0.960578 15.2935 2.269 15.5988 3.33038C15.6361 3.47621 15.6839 3.57314 15.7233 3.68151C15.7532 3.75688 15.7818 3.82459 15.8096 3.88818C11.9505 4.39248 8.45829 6.1082 5.71949 8.74336C3.68632 10.6793 1.82807 13.4498 0.895561 16.8111C-0.0470382 20.1532 -0.0203817 24.0546 1.28713 27.6788C3.21834 33.1099 7.79203 37.4488 13.7714 38.9612C15.6361 39.4146 17.5429 39.5679 19.3816 39.4257C25.5475 39.024 31.4341 35.0952 34.0914 29.1822C35.0845 26.997 35.4121 25.0624 35.5296 23.7437C35.5847 23.0811 35.5975 22.565 35.5811 22.2157C35.5696 21.8664 35.5536 21.6839 35.5328 21.6839C35.478 21.683 35.4724 22.4163 35.288 23.7153C35.0951 25.007 34.6979 26.886 33.6666 28.9817C30.8923 34.6839 25.1383 38.2868 19.3244 38.5743C17.5706 38.6835 15.761 38.511 14.0006 38.0587C8.29158 36.532 4.07725 32.3376 2.33491 27.3068C1.13757 23.9018 1.13854 20.2458 2.03347 17.1314C2.91911 13.9982 4.65855 11.4194 6.55629 9.61271C9.73839 6.5512 13.8523 4.96113 18.0289 4.91812C18.9535 4.9132 19.8454 4.9752 20.6979 5.09723C25.5823 5.8619 29.5467 8.51048 32.1686 12.2813C33.26 13.8791 33.8852 15.3271 34.3003 16.5162C34.7129 17.7101 34.9017 18.6581 35.0357 19.3779C35.1004 19.7389 35.1538 20.044 35.1848 20.303C35.2186 20.5616 35.262 20.7714 35.2792 20.9433C35.3687 21.6301 35.4496 21.6844 35.5328 21.6839C35.6161 21.6834 35.6943 21.6338 35.7485 20.9233C35.7672 20.7453 35.7585 20.5271 35.7581 20.2571ZM18.019 3.73605C17.422 3.73967 16.8102 3.77772 16.1902 3.84528C16.1897 3.76607 16.1875 3.67999 16.1829 3.58486C16.1669 2.7605 16.3289 2.06964 17.1334 1.79414C17.251 1.7461 17.3772 1.72802 17.4997 1.71413C17.6037 1.70907 17.7924 1.71348 17.9612 1.7171C18.3004 1.72013 18.6294 1.72303 18.9355 1.72578C19.0877 1.72498 19.2342 1.72419 19.3734 1.72346C19.4693 1.72701 19.5579 1.73786 19.6399 1.75348C20.156 1.87339 20.5644 2.2643 20.6818 2.95451C20.6858 3.03249 20.6966 3.10005 20.6949 3.20321C20.6981 3.38731 20.708 3.53654 20.7232 3.65763C20.7376 3.77215 20.7573 3.85982 20.7805 3.9297C19.8969 3.80245 18.9747 3.73467 18.019 3.73605Z" fill="#26848B"/>
										<path d="M26.9033 21.4623C26.1656 21.3823 24.8055 21.3378 22.284 21.3142C22.34 21.2224 25.8056 15.436 25.8396 15.335C25.9077 15.1956 25.9196 15.0801 25.9285 14.9823C25.9051 14.2108 25.2369 13.8954 24.7315 14.0934C24.6989 14.1023 24.6663 14.1142 24.6337 14.129C24.6278 14.132 24.6219 14.1349 24.6189 14.1349C24.3858 14.2514 20.5716 16.7816 19.007 17.8149C18.9359 17.8623 18.8648 17.9098 18.7937 17.9601C18.773 17.7379 18.7522 17.5186 18.7315 17.3053C18.4974 14.932 18.1389 13.0297 17.9759 13.0475C17.807 13.0653 17.8663 14.9882 17.8782 17.3497C17.8841 17.7438 17.8841 18.1498 17.8841 18.5616C17.6292 18.7334 17.3715 18.9112 17.1137 19.1038C16.4409 19.6179 16.0219 20.1522 15.5789 20.8815C15.4841 21.0504 15.3892 21.2194 15.2945 21.3853C12.5507 21.4623 10.1211 21.6075 10.1211 21.8357C10.1211 21.9749 12.2574 22.1527 14.7878 22.292C13.6944 24.2505 12.7522 25.9957 12.0293 27.3467C11.7813 27.8113 11.3268 28.6773 11.0959 29.1512C11.0515 29.2371 11.0129 29.3172 10.9774 29.3912C10.9744 29.3972 10.9715 29.4031 10.9685 29.409C10.9418 29.4623 10.9182 29.5127 10.8974 29.5601C10.8855 29.5838 10.8766 29.6046 10.8678 29.6253C10.8381 29.6935 10.8115 29.7527 10.7878 29.803C10.7078 29.9838 10.6781 30.0875 10.6989 30.0993H10.7048C10.7107 30.0993 10.7196 30.0964 10.7285 30.0875C10.7433 30.0786 10.7641 30.0579 10.7878 30.0282C10.7996 30.0164 10.8115 30.0016 10.8233 29.9868C10.8411 29.969 10.8589 29.9453 10.8796 29.9186C10.8796 29.9216 10.8796 29.9216 10.8826 29.9245C10.8796 29.9364 10.8826 29.9512 10.8885 29.9601V29.9631L10.8915 29.966C10.8944 29.9809 10.9004 29.9926 10.9093 30.0075C10.9122 30.0134 10.9182 30.0193 10.9211 30.0253C10.9329 30.0401 10.9448 30.0549 10.9626 30.0667C10.9744 30.0757 10.9863 30.0816 11.0041 30.0875C11.0396 30.0964 11.087 30.0993 11.1581 30.0845C12.1172 29.9022 16.2113 27.139 17.0189 26.5852C17.2529 26.4253 17.493 26.2594 17.7448 26.0816C17.6707 28.1764 17.6114 29.3645 17.647 30.0431C17.6767 30.8993 17.8218 30.9468 17.9877 30.9646C18.1537 30.9823 18.3078 30.9615 18.4944 30.1201C18.6544 29.3556 18.8707 27.9127 18.9774 25.1927C19.0041 25.1749 19.0278 25.1571 19.0544 25.1364C19.1581 25.0623 19.2618 24.9823 19.3685 24.8993C19.5492 24.7601 19.733 24.6179 19.9255 24.452C20.4887 23.9636 21.0461 23.2496 21.4544 22.6297C21.4811 22.5912 21.5078 22.5527 21.5315 22.5142C24.5419 22.5261 26.1122 22.4371 26.9211 22.3156C27.7596 22.1883 27.7893 22.0371 27.7833 21.8682C27.7804 21.7023 27.7389 21.5512 26.9033 21.4623ZM17.8455 24.5942C17.8278 24.609 17.81 24.6208 17.7922 24.6327C14.7472 26.8942 12.0163 28.7639 11.247 29.4594C11.2411 29.4623 11.2381 29.4653 11.2352 29.4712C11.2055 29.4919 11.1789 29.5156 11.1552 29.5394C11.1789 29.5038 11.2055 29.4653 11.2322 29.4267V29.4238C13.5362 26.258 16.0186 20.9512 17.8811 19.7082C18.251 19.457 22.9012 16.5662 24.1745 15.7616C24.1952 15.7527 24.207 15.7468 24.2189 15.7468C24.2218 15.7468 24.2248 15.7497 24.2248 15.7527L24.1981 15.7882C24.1892 15.8001 24.1804 15.809 24.1774 15.8149C23.9966 16.1112 23.8189 16.4045 23.65 16.686C21.5149 20.2503 21.0891 20.9969 20.4085 22.046C19.6519 23.1466 19.377 23.4568 17.8455 24.5942Z" fill="#26848B"/>
									</svg>
								</div>
								<?php 
								$location = wp_get_post_terms(get_the_ID(), 'areas');
								echo get_full_area($location[0], '', 'text');
								?>
							</div>
							<div class="villa__page_map" id="map"></div>
						</div>
					</div>


				</div>
				<div class="info-block__right">
					<div class="sticky-thumb">               
						<?php echo wp_get_attachment_image(get_field('detail_image'), 'full'); ?>
						<a href="javascript:;" data-fancybox data-src="#request-villa" class="btn-2">Check Pricing and Availability</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	
	 

    <section class="price-info">
        <div class="container">
            <div class="title">Price info</div>
            <div class="price-info__top">
                <div class="price-info__left">
                    <div class="price-info__item">
                        <div class="titl">Price per night</div>
                        <div class="desc">
							<?php $price_per_night = number_format(get_field('price')); ?>
							<?php echo($price_per_night != 0) ? '<b>€ '.$price_per_night.'</b>' : 'Upon Request'; ?>
						</div>
                    </div>
                    <div class="price-info__item">
                        <div class="titl">Minimum no of nights</div>
                        <div class="desc">
							<?php $minimum_no_of_nights = get_field('minimum_no_of_nights'); ?>
							<?php echo ($minimum_no_of_nights) ? $minimum_no_of_nights : '-'; ?>
						</div>
                    </div>
                </div>
                <div class="price-info__right">
                    <div class="price-info__item">
                        <div class="titl">Price per weekend (Sunday and Saturday)</div>
                        <div class="desc">
							<?php $price_weekend = number_format(get_field('price_weekend')); ?>
							<?php echo($price_weekend != 0) ? '<b>€ '.$price_weekend.'</b>' : 'Upon Request'; ?>
						</div>
                    </div>
                    <div class="price-info__item">
                        <div class="titl">Booking starts only on</div>
                        <div class="desc">
							<?php $booking_start = get_field('booking_start'); ?>
							<?php echo($booking_start) ? implode(', ', $booking_start) : '-'; ?>
						</div>
                    </div>
                </div>
            </div>

			<?php if(have_rows('prices_table')) : ?>
				<div class="table">
					<table>
						<tbody>
							<tr>
								<td>Period</td>
								<td>Price per <br> night</td>
								<td>Price per <br> night (7d+)</td>
								<td>Price per <br> night (30d+)</td>
								<td>Min nights <br> of booking</td>
								<td>Extra price <br> per guest</td>
								<td>Price in <br> weekends</td>
								<td>Booking starts <br> only on</td>
								<td>Booking starts/ <br> ends only on</td>
							</tr>
							<?php while(have_rows('prices_table')) : the_row(); ?>
								<?php 
								$period = get_sub_field('period'); 
								$new_date_format = str_replace('/', '', $period["to"]);
								$new_date_format = $new_date_format.date('Y');
								$now = date('dmY');
								settype($new_date_format, "integer");	
								settype($now, "integer");
								?>
								<?php if($new_date_format > $now) : ?>
									<tr>
										<td>
											<i class="calendar"></i> 										
											<?php 
											echo (get_row_index() == 1) ? date("d/m/Y") : $period["from"].'/'.date('Y'); 
											echo ' - ' . $period["to"].'/'.date('Y');
											?>
										</td>
										<td>
											<?php $price_per_night = number_format(get_sub_field('price_per_night')); ?>
											<?php echo ($price_per_night) ? '<b>€ '.$price_per_night.'</b>' : '-'; ?>
										</td>
										<td>
											<?php $price_per_night_7d = number_format(get_sub_field('price_per_night_7d')); ?>
											<?php echo ($price_per_night_7d) ? '<b>€ '.$price_per_night_7d.'</b>' : '-'; ?>
										</td>
										<td>
											<?php $price_per_night_30d = number_format(get_sub_field('price_per_night_30d')); ?>
											<?php echo ($price_per_night_30d) ? '<b>€ '.$price_per_night_30d.'</b>' : '-'; ?>
										</td>
										<td>
											<?php $min_nights = get_sub_field('min_nights'); ?>
											<?php echo ($min_nights) ? $min_nights : '-'; ?>
										</td>
										<td>
											<?php $extra_price_per_guest = number_format(get_sub_field('extra_price_per_guest')); ?>
											<?php echo ($extra_price_per_guest) ? '<b>€ '.$extra_price_per_guest.'</b>' : '-'; ?>
										</td>
										<td>
											<?php $price_in_weekends = number_format(get_sub_field('price_in_weekends')); ?>
											<?php echo ($price_in_weekends) ? '<b>€ '.$price_in_weekends.'</b>' : '-'; ?>
										</td>
										<td>
											<?php $booking_start = get_sub_field('booking_start'); ?>
											<?php echo ($booking_start) ? implode(', ', $booking_start) : '-'; ?>
										</td>
										<td>
											<?php $booking_start_end = get_sub_field('booking_start_end'); ?>
											<?php echo ($booking_start_end) ? implode(', ', $booking_start_end) : '-'; ?>
										</td>
									</tr>
								<?php endif; ?>
						   <?php endwhile; ?>
						</tbody>
					</table>
				</div>
			<?php endif; ?>
        </div>
    </section>
	
	
	<?php
	$args_main = array(
		'post_type' => 'villa',
		'posts_per_page' => 10,
		'post__not_in' => array($post->ID),
		'orderby' => 'ID',
		'order' => 'DESC'
	);
	$similar_villas = new WP_Query($args_main);
	?>
	
	<?php if($similar_villas->have_posts()) : ?>
		<section class="similar-listings color" data-color="#F3FAFC">
			<div class="container">
				<div class="similar-listings__top">
					<h3 class="h3">Similar Listings</h3>
					<div class="arrows">
						<div class="prev2">
							<svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M7.4146 0.983607L6.431 0L0.434929 5.99607L6.43886 12L7.42247 11.0164L3.0946 6.68852H33V5.30361L3.0946 5.30361L7.4146 0.983607Z" fill="#1F5465"/></svg>
						</div>
						<div class="next2">
							<svg width="33" height="12" viewBox="0 0 33 12" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M25.5854 0.983607L26.569 0L32.5651 5.99607L26.5611 12L25.5775 11.0164L29.9054 6.68852H0V5.30361L29.9054 5.30361L25.5854 0.983607Z" fill="#1F5465"/></svg>
						</div>
					</div>
				</div>
				<div class="products__items products-slider">
					<?php while($similar_villas->have_posts()) : $similar_villas->the_post(); ?>
						<?php get_template_part('template-parts/post-lists/villa'); ?>
					<?php endwhile; ?>
				</div>

				<div class="finding__bottom">
					<a href="<?php echo site_url('villas/'); ?>" class="btn-2">explore all villas</a>
					<div class="subtitle">We will find exactly <br> what you need</div>
				</div>
			</div>
		</section>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>

	<?php get_template_part('template-parts/contact_us'); ?>     
	<?php get_template_part('template-parts/modals/request-villa'); ?>
</main>

<script>
	jQuery(function($) {
		$('#villa_name').val('<?php echo get_the_title(); ?>');
		
		var wpcf7Elm2 = document.querySelector( '#wpcf7-f869-o2' );
		if( wpcf7Elm2 != null ) {
			wpcf7Elm2.addEventListener( 'wpcf7mailsent', function( event ) {
				var $client_mail = $('#wpcf7-f869-o2').find('#client_email').val();
				$('#request-villa').find('.fancybox-button').trigger('click');
				$('#thank-you').find('.desc span').text($client_mail);
				$('.thank_you_open_popup').trigger('click');
			}, false );
		}
		
		$('.villa-new-block__items.two_columns').find('.villa-new-block__item').each(function() {
			var ul = $(this).find('ul'),
				li = ul.find('li');
			console.log(li.length);
			if(li.length > 10) {
				ul.addClass('two_columns');
			}
		})
	});
	
	<?php $coord = get_field('location', $location[0]); ?>
	function initMap() {
		var locations = [
			[
				'', 
				'<?php echo $post->post_title; ?>', 
				<?php echo $coord['lat']; ?>, 
				<?php echo $coord['lng']; ?>
			],
		];
		
		var map = new google.maps.Map(document.getElementById('map'), {
			zoom: 12,
			center: new google.maps.LatLng(<?php echo $coord['lat']; ?>, <?php echo $coord['lng']; ?>),	
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
				position: new google.maps.LatLng(locations[i][2], locations[i][3]),
				icon:  iconBase + '/assets/img/map_marker.png',
				map: map
			});

			google.maps.event.addListener(marker, 'mouseover', (function(marker, i) {
				return function() {
					infowindow.setContent(locations[i][1]);
					infowindow.open(map, marker);
				}
			})(marker, i));
		}
	}
	

</script>       
<script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiAY0QGCd6LPf7usc0kRZeWqwvNokl5aA&callback=initMap"></script>
<?php get_footer(); ?>
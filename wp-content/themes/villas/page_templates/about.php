<?php
/**
 * Template name: About
 */
get_header();
?>

<main>
	<div class="page-top about" style="background-image: url(<?php the_field('block1_bg_image'); ?>);">
		<div class="container">
			<h1 class="h1"><?php the_field('block1_title'); ?></h1> 
		</div>  
	</div>

	<section class="text-image color" data-color="#F3FAFC">
		<div class="container">
			
			<?php $content_block1 = get_field('block2_content_block_1'); ?>
			<div class="text-image__item">
				<div class="img">
					<?php echo wp_get_attachment_image($content_block1["image"], 'full'); ?>
				</div>
				<div class="text">
					<h3 class="h3"><?php echo $content_block1["title"]; ?></h3>
					<div class="desc"><?php echo $content_block1["description"]; ?></div>
				</div>
			</div>
			
			<?php $content_block2 = get_field('block2_content_block_2'); ?>
			<div class="text-image__item">
				<div class="text">
					<h3 class="h3"><?php echo $content_block2["title"]; ?></h3>
					<div class="desc"><?php echo $content_block2["description"]; ?></div>
				</div>
				<div class="img">
					<?php echo wp_get_attachment_image($content_block2["image"], 'full'); ?>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="subtitle"><?php the_field('block2_additional_text'); ?></div>    
		</div>
	</section>


	<section class="text-image about__team_member">
		<div class="container">
			
			<?php $anna = get_field('block3_anna'); ?>
			<div class="text-image__item">
				<div class="img">
					<?php echo wp_get_attachment_image($anna["foto"], 'large'); ?>
					<div class="subtitle"><?php echo $anna["full_name"]; ?></div>
				</div>
				<div class="text">
					<h3 class="h3"><?php echo $anna["title"]; ?></h3>
					<div class="desc"><?php echo $anna["description"]; ?></div>
				</div>
			</div>
			
			<?php $olivier = get_field('block3_olivier'); ?>
			<div class="text-image__item">
				<div class="text">
					<h3 class="h3"><?php echo $olivier["title"]; ?></h3>
					<div class="desc"><?php echo $olivier["description"]; ?></div>
				</div>
				<div class="img">
					<?php echo wp_get_attachment_image($olivier["foto"], 'large'); ?>
					<div class="subtitle"><?php echo $olivier["full_name"]; ?></div>
				</div>
			</div>
		</div>
	</section>


	<section class="the-duo color scroll" data-color="#F3FAFC">
		<div class="container">
			<div class="the-duo__title">
				<h3 class="h3"><?php the_field('block4_title'); ?></h3>
				<div class="desc"><?php the_field('block4_text_1'); ?></div>
			</div>
		</div>
		<div class="scroll__body">
			<img src="<?php the_field('block4_image'); ?>" alt="">
		</div>
		<div class="container bottom">
			<div class="description"><?php the_field('block4_text_2'); ?></div>
		</div>
	</section>


	<section class="experiences">
		<div class="container">
			<svg class="element-bg-1" width="1288" height="1268" viewBox="0 0 1288 1268" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path opacity="0.15" d="M1287.47 1267.57C1262.35 1249.24 1235.8 1231.17 1216.81 1206.3C1199.99 1184.28 1184.1 1161.57 1167.46 1139.43C1155.62 1123.67 1146.78 1104.72 1134.66 1089.66C1129.43 1083.17 1118.79 1079.39 1111.66 1075.64C1077.73 1057.78 1041.83 1039.78 1004.84 1029.38C973.531 1020.57 942.911 1011.65 912.307 1000.64C855.774 980.285 792.925 970.057 733.699 961.382C674.54 952.717 616.652 953.014 558.456 936.568C488.903 916.911 419.48 899.263 349.425 881.471C292.399 866.988 236.721 846.498 184.977 818.383C113.293 779.435 48.9211 734.993 15.2007 659.122C7.28561 641.313 0.403517 627.158 1.04105 606.97C1.75727 584.289 5.59676 559.43 12.2566 537.713C23.6422 500.587 51.5895 461.723 75.9051 431.726C103.564 397.605 140.197 373.665 174.883 347.609C217.205 315.817 259.756 284.838 302.6 253.679C354.702 215.786 406.984 180.65 465.366 152.879C513.724 129.876 563.323 110.792 611.169 86.5664C659.015 62.3407 837.307 1 837.307 1" stroke="#1F5465"/>
			</svg>
			
			<?php if(have_rows('block5_content_list')) : ?>
				<div class="experiences__body">
					<?php while(have_rows('block5_content_list')) : the_row(); ?>
						<div class="experiences__item">
							<div class="img">
								<?php echo wp_get_attachment_image(get_sub_field('image'), 'full'); ?>
							</div>
							<div class="text">
								<?php if($subtitle = get_sub_field('subtitle')) : ?>
									<div class="subtitle"><?php echo $subtitle; ?></div>
								<?php endif; ?>
								<h3 class="h3"><?php the_sub_field('title'); ?></h3>
								<div class="desc"><?php the_sub_field('text'); ?></div>
							</div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			
			<?php if(have_rows('block5_list')) : ?>
				<div class="experiences__items">
					<?php while(have_rows('block5_list')) : the_row(); ?>
						<div class="experiences__item2">
							<div class="title">
								<div class="ico">
									<img src="<?php the_sub_field('icon'); ?>" alt="">
								</div>
								<?php the_sub_field('title'); ?>
							</div>
							<div class="dsc"><?php the_sub_field('text'); ?></div>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>


	<section class="contact-bg" style="background-image: url(<?php the_field('block6_bg_image'); ?>);">
		<div class="container">
			<div class="contact-bg__desc">
				<div class="desc">
					<?php the_field('block6_text'); ?>
				</div>
				
				<?php $btn = get_field('block6_button'); ?>
				<a href="<?php echo $btn["btn_link"]; ?>" class="btn-2">
					<?php echo $btn["btn_text"]; ?>
				</a>      
			</div>
		</div>
	</section>

	<?php get_template_part('template-parts/contact_us'); ?>         
</main>

<?php get_footer(); ?>
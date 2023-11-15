<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<meta content="width=device-width, initial-scale=1" name="viewport"> 
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/favicon.ico" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/favicons/site.webmanifest">
		<?php wp_head(); ?>	
		<style>
			img {
				height:auto;
			}
		</style>
	</head>
	<body <?php echo body_class(); ?>>
		<?php 
		$btns = get_field('header_buttons', 'options');
		$logos = get_field('logo_images', 'options'); 
		?>
		
		<header class="header <?php echo(is_page_template('page_templates/testimonials.php')) ? 'black' : ''; ?>">
			<div class="container">
				<div class="header__left">
					<a href="javascript:;" data-fancybox data-src="#sign-up" class="btn-1"><?php echo $btns["register_btn_text"]; ?></a>
					<!--a href="javascript:;" data-fancybox data-src="#login" class="link"><?php //echo $btns["login_btn_text"]; ?></a-->
				</div>
				<a href="/" class="logo">
					<?php if(is_page_template('page_templates/testimonials.php')) : ?>
						<img class="logo-default" src="<?php echo $logos["footer_logo"]; ?>" alt="Logo">
					<?php else : ?>
						<img class="logo-default" src="<?php echo $logos["main_logo"]; ?>" alt="Logo">
					<?php endif; ?>
					<img class="logo-fixed" src="<?php echo $logos["logo_fixed"]; ?>" alt="Logo">
				</a>

				<div class="header__right">
					<?php $btn_submit = $btns["submit_btn"]; ?>
					<!--a href="<?php //echo $btn_submit["btn_link"]; ?>" class="btn-2">
						<?php //echo $btn_submit["btn_text"]; ?>
						<span></span>
					</a-->
					<div class="header__burger">
						<span></span>
					</div>
				</div>
			</div>
		</header>  

		<div class="menu-popup">
			<div class="image">
				<?php echo wp_get_attachment_image(get_field('menu_image', 'options'), 'full'); ?>
			</div>
			<div class="menu-popup__content">
				<div class="menu-popup__header">
					<div class="header__left <?php echo(is_user_logged_in()) ? 'user__sign_in' : ''; ?>">
						
						<a href="javascript:;" data-fancybox data-src="#sign-up" class="btn-1"><?php echo $btns["register_btn_text"]; ?></a>
						<!--a href="javascript:;" data-fancybox data-src="#login" class="link"><?php //echo $btns["login_btn_text"]; ?></a-->
					</div>
					<a href="/" class="logo">
						<img src="<?php echo $logos["footer_logo"]; ?>" alt="Logo">
					</a>
					<!--a href="<?php //echo $btn_submit["btn_link"]; ?>" class="btn-1">
						<?php //echo $btn_submit["btn_text"]; ?>
					</a-->

					<div class="header__burger">
						<span></span>
					</div>
				</div>
				<div class="menu-popup__body">
					<?php 
					wp_nav_menu( [
						'theme_location' => 'main_menu',
						'container' => '',
						'container_class' => '',
						'menu_class' => 'menu-left' 
					]); 
					?>
					
					<?php echo wp_get_attachment_image(get_field('mobile_menu_image', 'options'), 'full', '', array('class' => 'mob-menu')); ?>
					
					<?php 
					wp_nav_menu( [
						'theme_location' => 'second_menu',
						'container' => '',
						'container_class' => '',
						'menu_class' => 'menu-right' 
					]); 
					?>
				</div>
				<div class="menu-popup__bottom">
					<div class="social">
						<div class="title"><?php _e('follow us:', 'villas'); ?> </div>
						<a href="<?php the_field('facebook', 'options'); ?>" class="social__item">
							<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.125 6.1875V3.9375C6.125 3.3165 6.629 2.8125 7.25 2.8125H8.375V0H6.125C4.26087 0 2.75 1.51088 2.75 3.375V6.1875H0.5V9H2.75V18H6.125V9H8.375L9.5 6.1875H6.125Z" fill="#A3A5A7"/></svg>
						</a>
						<a href="<?php the_field('instagram', 'options'); ?>" class="social__item">
							<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12.375 0H5.625C2.51888 0 0 2.51888 0 5.625V12.375C0 15.4811 2.51888 18 5.625 18H12.375C15.4811 18 18 15.4811 18 12.375V5.625C18 2.51888 15.4811 0 12.375 0ZM16.3125 12.375C16.3125 14.5463 14.5463 16.3125 12.375 16.3125H5.625C3.45375 16.3125 1.6875 14.5463 1.6875 12.375V5.625C1.6875 3.45375 3.45375 1.6875 5.625 1.6875H12.375C14.5463 1.6875 16.3125 3.45375 16.3125 5.625V12.375Z" fill="#A3A5A7"/><path d="M9 4.5C6.51487 4.5 4.5 6.51487 4.5 9C4.5 11.4851 6.51487 13.5 9 13.5C11.4851 13.5 13.5 11.4851 13.5 9C13.5 6.51487 11.4851 4.5 9 4.5ZM9 11.8125C7.44975 11.8125 6.1875 10.5503 6.1875 9C6.1875 7.44863 7.44975 6.1875 9 6.1875C10.5503 6.1875 11.8125 7.44863 11.8125 9C11.8125 10.5503 10.5503 11.8125 9 11.8125Z" fill="#A3A5A7"/><path d="M13.8377 4.76224C14.1688 4.76224 14.4373 4.49378 14.4373 4.16261C14.4373 3.83145 14.1688 3.56299 13.8377 3.56299C13.5065 3.56299 13.238 3.83145 13.238 4.16261C13.238 4.49378 13.5065 4.76224 13.8377 4.76224Z" fill="#A3A5A7"/></svg>
						</a>
					</div>
					<?php $terms = get_field('terms__page', 'options'); ?>
					<a href="<?php echo $terms["page_link"]; ?>" class="link">
						<?php echo $terms["text"]; ?>
					</a>
				</div>
			</div>
		</div>  
		
<section class="contact-us">
	<div class="container">
		<div class="contact-us__body">
			<div class="contact-us__left">
				<h4 class="h4"><?php the_field('subscribe_form_title', 'options'); ?></h4>
				<?php echo do_shortcode('[contact-form-7 id="166" title="Subscribe"]'); ?>
			</div>
			<div class="hr"></div>
			<div class="contact-us__right">
				<div class="desc"><?php the_field('right_text', 'options'); ?></div>

				<?php $btn = get_field('contact_us_button', 'options'); ?>
				<a href="javascript:;" data-fancybox data-src="#contact" class="btn-2">
					<?php echo $btn["btn_text"]; ?>
				</a>
			</div>
		</div>
	</div>
</section> 
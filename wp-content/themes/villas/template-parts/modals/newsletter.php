<div id="newslatter" class="modal" style="display: none;">
	<div class="modal__body">
		<div class="modal__left">
			<?php echo wp_get_attachment_image(get_field('newsletter_modal_image', 'options'), 'large'); ?>
		</div>
		<div class="modal__right">
			<h4 class="h4"><?php the_field('newsletter_modal_title', 'options'); ?></h4>
			<div class="desc"><?php the_field('newsletter_modal_subtitle', 'options'); ?></div>
			<?php echo do_shortcode('[contact-form-7 id="868" title="Subscribe (popup)"]'); ?>
		</div>
	</div>
</div>
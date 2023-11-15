<?php global $post; ?>
<div id="request-villa" class="modal modal-2" style="display: none;">
	<div class="modal__body"> 
		<div class="modal__right">
			<h4 class="h4"><?php echo str_replace('%villa_title%', get_the_title(get_the_ID()), get_field('villa_modal_title', 'options')); ?></h4>
			<div class="desc"><?php the_field('villa_modal_subtitle', 'options'); ?></div>
			<?php echo do_shortcode('[contact-form-7 id="869" title="Request Villa"]'); ?>
		</div>
	</div>
</div>
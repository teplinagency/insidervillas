<?php global $post; ?>
<div id="request-yacht" class="modal modal-2" style="display: none;">
	<div class="modal__body"> 
		<div class="modal__right">
			<h4 class="h4"><?php echo str_replace('%yacht_title%', get_the_title($post->ID), get_field('yacht_modal_title', 'options')); ?></h4>
			<div class="desc"><?php the_field('yacht_modal_subtitle', 'options'); ?></div>
			
			<?php 
			if($post->post_type == "boat") echo do_shortcode('[contact-form-7 id="870" title="Request Yacht"]'); 
			elseif($post->post_type == "jets") echo do_shortcode('[contact-form-7 id="1079" title="Request Jet"]'); 
			?>
		</div>
	</div>
</div>
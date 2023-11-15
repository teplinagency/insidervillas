<div id="sign-up" class="modal modal-6" style="display: none;">
	<div class="modal__body">
		<div class="modal__left">
			<?php echo wp_get_attachment_image(get_field('signup_modal_image', 'options'), 'large'); ?>
		</div>
		<div class="modal__right">
			<div class="txt">
				<h4 class="h4"><?php the_field('signup_modal_title', 'options'); ?></h4>
				<div class="desc"><?php the_field('signup_modal_subtitle', 'options'); ?></div>
				<!--form action="#" method="post" name="sign_up_form" id="sign_up_form"> 
					<?php wp_nonce_field('ajax-register-nonce', 'register_security'); ?>
					<input type="text" name="user_login" placeholder="Your Login*" required>
					<input type="email" name="user_email" placeholder="Email"> 
					<div class="password">
						<input type="password" name="user_password"  class="password-input" placeholder="Password*" required> 
						<a href="#" class="password-control"></a>
					</div>
					<div class="modal__check">
						<div class="check__item">
							<input type="checkbox" name="" id="modal-check2" checked> 
							<label for="modal-check2" class=""> 
								<span>Accept our <a href="<?php echo site_url('/terms-conditions/'); ?>">Terms and Conditions</a></span>
							</label> 
						</div> 
					</div>
					<div class="bottom">
						<button type="submit" class="btn-2">sign up</button> 
					</div>
					<div class="ligin-text">
						Already have an account? 
						<a href="javascript:;" data-fancybox data-src="#login">Login here</a>
					</div>
					<input type="hidden" name="redirect_to" value="<?php the_permalink(); ?>" /> 
					<input type="hidden" name="testcookie" value="1" />
				</form-->
				<?php echo do_shortcode('[contact-form-7 id="6" title="Register (Get client data)"]'); ?>
			</div>            
		</div>
	</div>
</div>
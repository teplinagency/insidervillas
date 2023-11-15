<div id="login" class="modal modal-6" style="display: none;">
	<div class="modal__body">
		<div class="modal__left">
			<?php echo wp_get_attachment_image(get_field('login_modal_image', 'options'), 'large'); ?>
		</div>
		<div class="modal__right">
			<div class="txt">
				<h4 class="h4"><?php the_field('login_modal_title', 'options'); ?></h4>
				<div class="desc"><?php the_field('login_modal_subtitle', 'options'); ?></div>
				<form name="loginform" id="loginform" action="#" method="post"> 
					<?php wp_nonce_field('ajax-login-nonce', 'login_security'); ?>
					<input type="email" name="user_login" placeholder="Email*" required> 
					<div class="password">
						<input type="password" name="pwd"  class="password-input" placeholder="Password*" required> 
						<a href="#" class="password-control"></a>
					</div>
					<div class="modal__check">
						<div class="check__item">
							<input type="checkbox" name="" id="modal-check1" checked> 
							<label for="modal-check1" class=""> <span>Keep me logged in</span></label> 
						</div>
						<a href="#" class="link">Forgotten your password?</a>
					</div>
					<div class="bottom">
						<button type="submit" class="btn-2">login</button> 
					</div>
					<div class="ligin-text">
						Dont have an account? 
						<a href="javascript:;" data-fancybox data-src="#sign-up">Sign up here</a>
					</div>
				</form>
			</div>            
		</div>
	</div>
</div>
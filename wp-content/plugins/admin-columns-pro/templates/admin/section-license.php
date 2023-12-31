<?php

use AC\View;
use ACP\RequestParser;

$form_buttons = new View( [
	'is_license_defined' => $this->is_license_defined,
] );
$form_buttons->set_template( 'admin/partials/license-form-buttons' );

/**
 * @var \ACP\Entity\License $license
 */
$license = $this->license;
?>

<form id="licence_activation" action="" method="post">
	<?php wp_nonce_field( 'acp-license', '_acnonce' ); ?>

	<?php if ( $license ) : ?>

		<?php
		$is_expired = $license->is_expired();

		// Give auto renewal 2 extra days before marked as expired
		if ( $is_expired && $license->is_auto_renewal() && $license->get_expiry_date()->get_expired_seconds() < ( 2 * DAY_IN_SECONDS ) ) {
			$is_expired = false;
		}
		?>

		<?php if ( $is_expired ) : ?>

			<p title="<?= esc_attr( $this->license_key_masked ); ?>">
				<span class="dashicons dashicons-no-alt"></span>
				<?php _e( 'Automatic updates are disabled.', 'codepress-admin-columns' ); ?>
				<?= $form_buttons; ?>
			</p>
			<p class="description">
				<?php printf( __( 'License has expired on %s', 'codepress-admin-columns' ), '<strong>' . ac_format_date( 'F j, Y', $license->get_expiry_date()->get_value()->getTimestamp() ) . '</strong>' ); ?>
			</p>

		<?php elseif ( $license->is_cancelled() ) : ?>

			<p title="<?= esc_attr( $this->license_key_masked ); ?>">
				<span class="dashicons dashicons-no-alt"></span>
				<?php _e( 'Automatic updates are disabled.', 'codepress-admin-columns' ); ?>
				<?= $form_buttons; ?>
			</p>

			<p class="description">
				<?php _e( 'Your subscription is cancelled.', 'codepress-admin-columns' ); ?>
			</p>

		<?php else : ?>

			<p title="<?= esc_attr( $this->license_key_masked ); ?>">
				<span class="dashicons dashicons-yes"></span>
				<?php _e( 'Automatic updates are enabled.', 'codepress-admin-columns' ); ?>
				<?= $form_buttons; ?>
			</p>
			<?php if ( ! $license->is_lifetime() && ! $this->license->is_auto_renewal() && $this->license->get_expiry_date()->exists() ) : ?>
				<p class="description">
					<?php printf( __( 'License is valid until %s', 'codepress-admin-columns' ), '<strong>' . ac_format_date( 'F j, Y', $license->get_expiry_date()->get_value()->getTimestamp() ) . '</strong>' ); ?>
				</p>
			<?php endif; ?>

		<?php endif; ?>

		<?php if ( $this->is_license_defined ): ?>
			<p class="description" title="<?= esc_attr( $this->license_key_masked ); ?>">
				<?php _e( 'License key is defined in code.', 'codepress-admin-columns' ); ?>
			</p>
		<?php endif; ?>

	<?php elseif ( $this->is_license_defined && $this->license_key ) : ?>

		<input type="hidden" name="license" value="<?= $this->license_key->get_value(); ?>">
		<button type="submit" class="button" name="action" value="<?= RequestParser::ACTION_ACTIVATE; ?>"><?php _e( 'Activate license', 'codepress-admin-columns' ); ?></button>
		<p class="description">
			<span class="dashicons dashicons-info"></span>
			<?php _e( 'License key is defined in code but not yet activated.', 'codepress-admin-columns' ); ?>
		</p>

	<?php else : ?>

		<input type="text" value="<?= $this->license_key ? $this->license_key->get_value() : null; ?>" name="license" size="40" placeholder="<?php echo esc_attr( __( 'Enter your license code', 'codepress-admin-columns' ) ); ?>">
		<button type="submit" class="button" name="action" value="<?= RequestParser::ACTION_ACTIVATE; ?>"><?php _e( 'Update license', 'codepress-admin-columns' ); ?></button>
		<p class="description">
			<?php printf( __( 'You can find your license key on your %s.', 'codepress-admin-columns' ), sprintf( '<a href="%s" target="_blank">%s</a>', $this->my_account_link, __( 'account page', 'codepress-admin-columns' ) ) ); ?>
		</p>
	<?php endif; ?>

</form>
<?php

namespace ACP\Table;

use AC\Form\Element\Select;
use AC\ListScreen;
use AC\ListScreenRepository\Filter;
use AC\ListScreenRepository\Sort;
use AC\ListScreenRepository\Storage;
use AC\PermissionChecker;
use AC\Registrable;

class Switcher implements Registrable {

	/** @var Storage */
	private $storage;

	public function __construct( Storage $storage ) {
		$this->storage = $storage;
	}

	public function register() {
		add_action( 'ac/admin_footer', [ $this, 'switcher' ] );
	}

	private function add_filter_args_to_url( $link ) {
		$post_status = filter_input( INPUT_GET, 'post_status', FILTER_SANITIZE_STRING );

		if ( $post_status ) {
			$link = add_query_arg( [ 'post_status' => $post_status ], $link );
		}

		$author = filter_input( INPUT_GET, 'author', FILTER_SANITIZE_STRING );

		if ( $author ) {
			$link = add_query_arg( [ 'author' => $author ], $link );
		}

		return $link;
	}

	public function switcher( ListScreen $list_screen ) {

		$list_screens = $this->storage->find_all( [
			Storage::KEY        => $list_screen->get_key(),
			Storage::ARG_FILTER => [
				new Filter\Permission( new PermissionChecker() ),
			],
			Storage::ARG_SORT   => new Sort\ManualOrder(),
		] );

		// When an admin visits the table for a hidden listscreen
		if ( ! $list_screens->contains( $list_screen ) ) {
			$list_screens->add( $list_screen );
		}

		if ( $list_screens->count() > 1 ) : ?>
			<form class="layout-switcher">
				<label for="column-view-selector" class="label screen-reader-text">
					<?php _e( 'Switch View', 'codepress-admin-columns' ); ?>
				</label>
				<span class="spinner"></span>

				<?php

				$options = [];

				foreach ( $list_screens as $_list_screen ) {
					$options[ $this->add_filter_args_to_url( $_list_screen->get_screen_link() ) ] = $_list_screen->get_title() ?: __( 'Original', 'codepress-admin-columns' );
				}

				$select = new Select( 'layout', $options );
				$select->set_attribute( 'id', 'column-view-selector' )
				       ->set_attribute( 'data-ac-tip', __( 'Switch View', 'codepress-admin-columns' ) )
				       ->set_value( $this->add_filter_args_to_url( $list_screen->get_screen_link() ) );

				echo $select->render();

				?>
				<script type="text/javascript">
					jQuery( document ).ready( function( $ ) {
						$( '.layout-switcher' ).change( function() {
							var _select = $( this ).addClass( 'loading' ).find( 'select' ).attr( 'disabled', 1 );
							window.location = _select.val();
						} );
					} );
				</script>
			</form>
		<?php
		endif;
	}

}
<?php

namespace AC\ListScreen;

use AC;
use AC\WpListTableFactory;
use ReflectionException;
use WP_Media_List_Table;

class Media extends AC\ListScreenPost {

	public function __construct() {
		parent::__construct( 'attachment' );

		$this->set_screen_id( 'upload' )
		     ->set_screen_base( 'upload' )
		     ->set_key( 'wp-media' )
		     ->set_group( 'media' )
		     ->set_label( __( 'Media' ) );
	}

	public function set_manage_value_callback() {
		add_action( 'manage_media_custom_column', [ $this, 'manage_value' ], 100, 2 );
	}

	/**
	 * @return WP_Media_List_Table
	 */
	protected function get_list_table() {
		return ( new WpListTableFactory() )->create_media_table( $this->get_screen_id() );
	}

	public function get_screen_link() {
		return add_query_arg( 'mode', 'list', parent::get_screen_link() );
	}

	/**
	 * @param int $id
	 *
	 * @return string
	 */
	public function get_single_row( $id ) {
		// Author column depends on this global to be set.
		global $authordata;

		// Title for some columns can only be retrieved when post is set globally
		if ( ! isset( $GLOBALS['post'] ) ) {
			$GLOBALS['post'] = get_post( $id );
		}

		$authordata = get_userdata( get_post_field( 'post_author', $id ) );

		return parent::get_single_row( $id );
	}

	/**
	 * @param $column_name
	 * @param $id
	 *
	 * @since 2.4.7
	 */
	public function manage_value( $column_name, $id ) {
		echo $this->get_display_value_by_column_name( $column_name, $id );
	}

	/**
	 * @throws ReflectionException
	 */
	protected function register_column_types() {
		parent::register_column_types();

		$this->register_column_types_from_dir( 'AC\Column\Media' );
		$this->register_column_type( new AC\Column\Post\TitleRaw );
	}

}
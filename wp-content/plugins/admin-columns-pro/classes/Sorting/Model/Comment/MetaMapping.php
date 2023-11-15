<?php

namespace ACP\Sorting\Model\Comment;

class MetaMapping extends Meta {

	/**
	 * @var array
	 */
	private $sorted_fields;

	public function __construct( $meta_key, $sorted_fields ) {
		parent::__construct( $meta_key );

		$this->sorted_fields = $sorted_fields;
	}

	protected function get_order_by() {
		global $wpdb;
		$fields = implode( "','", array_map( 'esc_sql', $this->sorted_fields ) );

		return sprintf( "FIELD( acsort_commentmeta.meta_value, '%s' ) %s, {$wpdb->comments}.comment_ID", $fields, $this->get_order() );
	}

}
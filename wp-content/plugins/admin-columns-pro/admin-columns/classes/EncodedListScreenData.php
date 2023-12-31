<?php

namespace AC;

use Iterator;

final class EncodedListScreenData implements Iterator {

	/**
	 * @var array
	 */
	private $data = [];

	public function add( array $data ) {
		$this->data[] = $data;
	}

	public function rewind() {
		reset( $this->data );
	}

	/**
	 * @return array
	 */
	public function current() {
		return current( $this->data );
	}

	public function key() {
		return key( $this->data );
	}

	public function next() {
		return next( $this->data );
	}

	public function valid() {
		$key = $this->key();

		return ( $key !== null && $key !== false );
	}

}
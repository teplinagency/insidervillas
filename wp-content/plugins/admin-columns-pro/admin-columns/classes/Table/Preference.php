<?php

namespace AC\Table;

use AC\Preferences\Site;

class Preference extends Site {

	public function __construct() {
		parent::__construct( 'layout_table' );
	}

}
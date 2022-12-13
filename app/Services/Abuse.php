<?php

namespace App\Services;
use App\Libraries\Request;

class Abuse {
	public function __construct(App $app) {
		Request::enforceAuth($app);
	}

	public function test() {
		var_dump("HELLO");
	}
}


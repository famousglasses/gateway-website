<?php

namespace App\Services;
use App\Libraries\Request;
use Gratify\App;

class Abuse {
	public function __construct(App $app) {
		if (!_CLI) {
			Request::enforceAuth($app);
		}
	}

	public function test() {
	}
}


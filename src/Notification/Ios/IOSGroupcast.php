<?php

/*
 * (c) CopyRight <kingshi2010@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Konohanaruto\Notification\Ios;

use Konohanaruto\Notification\IOSNotification;

class IOSGroupcast extends IOSNotification {
	function  __construct() {
		parent::__construct();
		$this->data["type"] = "groupcast";
		$this->data["filter"]  = NULL;
	}
}
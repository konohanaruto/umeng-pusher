<?php

/*
 * (c) CopyRight <kingshi2010@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Konohanaruto\UmengPusher\Android;

use Konohanaruto\UmengPusher\AndroidNotification;

class AndroidUnicast extends AndroidNotification {
	function __construct() {
		parent::__construct();
		$this->data["type"] = "unicast";
		$this->data["device_tokens"] = NULL;
	}

}

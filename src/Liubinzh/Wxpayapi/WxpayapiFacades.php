<?php namespace Liubinzh\Wxpayapi\Facades;

use Illuminate\Support\Facades\Facade;

class WxpayapiFacade extends Facade {

	protected static function getFacadeAccessor() {
		return 'wxpayapi';
	}
}
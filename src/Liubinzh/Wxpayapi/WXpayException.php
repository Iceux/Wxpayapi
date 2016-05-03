<?php
namespace Liubinzh\Wxpayapi;

use Exception;

class WxpayException extends Exception
{
	public function errorMessage()
	{
		return $this->getMessage();
	}
}
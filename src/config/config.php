<?php

return [

	/*
	|--------------------------------------------------------------------------
	| appid
	|--------------------------------------------------------------------------
	|
	| 微信支付申请的appid
	|
	*/

	'appid' => '',

	/*
	|--------------------------------------------------------------------------
	| mch_id
	|--------------------------------------------------------------------------
	|
	| 微信支付分配的商户id
	|
	*/

	'mch_id' => '',

	/*
	|--------------------------------------------------------------------------
	| key
	|--------------------------------------------------------------------------
	|
	| 签名使用的key
	|
	*/

	'key' => '',

	/*
	|--------------------------------------------------------------------------
	| Default notify url
	|--------------------------------------------------------------------------
	|
	| 默认异步通知url
	|
	*/

	'notify_url' => '',

	/*
	|--------------------------------------------------------------------------
	| sslcert path
	|--------------------------------------------------------------------------
	|
	| 操作证书路径
	|
	*/

	'sslcert_path' => '',

	/*
	|--------------------------------------------------------------------------
	| sslkey path
	|--------------------------------------------------------------------------
	|
	| 操作key路径
	|
	*/

	'sslkey_path' => '',

	/*
	|--------------------------------------------------------------------------
	| unifiedorder url
	|--------------------------------------------------------------------------
	|
	| 统一下单url
	|
	*/
	'unifiedorder_url' => 'https://api.mch.weixin.qq.com/pay/unifiedorder',

];

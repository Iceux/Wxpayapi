<?php namespace Liubinzh\Wxpayapi;

use Liubinzh\Wxpayapi\lib\Common;
use Illuminate\Support\Facades\Config as Config;

class Wxpayapi {

	use Common;

	function __construct(){
	}

	/**
	 * @param array $data
	 * @return array|mixed|object
	 * @throws WxpayException
	 *
	 * 统一下单接口
	 */
	function unifiedorder($data=array()){

		$order_info = [
			/*
			 * 必须参数
			 */
			// 应用ID
			'appid' => Config::get('wxpayapi::appid'),
			// 商户号
			'mch_id' => Config::get('wxpayapi::mch_id'),
			// 随机字符串
			'nonce_str' => str_random(32),
			// 商户订单号
			'out_trade_no' => '',
			// 商品名称
			'body' => '',
			// 价格
			'total_fee' => '',
			// 客户端ip
			'spbill_create_ip' => '',
			// 异步通知url
			'notify_url' => Config::get('wxpayapi::notify_url'),
			// 交易类型
			'trade_type' => 'APP',
			// 签名
			'sign' => '',
			/*
			 * 可选参数
			 */
			// 设备信息
			'device_info' => '',
			// 商品详情
			'detail' => '',
			// 附加参数
			'attach' => '',
			// 货币类型
			'fee_type' => '',
			// 订单生成时间
			'time_start' => '',
			// 订单过期时间
			'time_expire' => '',
			// 商品标记
			'goods_tag' => '',
			// 指定支付方式
			'limit_pay' => ''
		];

		foreach($order_info as $k=>$v){
			if(!empty($data[$k])){
				$order_info[$k] = $data[$k];
			}
			if(empty($order_info[$k])){
				unset($order_info[$k]);
			}
		}
		$order_info['sign'] = $this->MakeSign($order_info);
		$data = $this->postXmlCurl($this->ToXml($order_info),
			Config::get('wxpayapi::unifiedorder_url'));
		return $this->FromXml($data);
	}

	/**
	 * @return array|mixed|object
	 * @throws WxpayException
	 *
	 * 回调验证
	 */
	function verifyNotify(){
		//获取通知的数据
		$data = $GLOBALS['HTTP_RAW_POST_DATA'];
		$data = $this->FromXml($data);
		if(!empty($data['sign']) && ($data['sign'] == $this->MakeSign($data))){
			return $data;
		}else{
			return array();
		}
	}
}
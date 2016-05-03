
laravel4 微信支付统一下单和回调验证的封装
# Installation

Use [Composer](https://getcomposer.org/):

```sh
composer require liubinzh/wxpayapi dev-master
```

# Usage

生成配置文件并修改
```sh

php artisan config:publish liubinzh/wxpayapi

```
修改app/config/app.php 在providers 中添加 ServiceProvider
```php

'Liubinzh\Wxpayapi\WxpayapiServiceProvider',

```
添加别名
```php

'Wxpayapi'          => 'Liubinzh\Wxpayapi\Facades\WxpayapiFacade',

```
统一下单

```php

//统一下单参数，参考微信支付文档
$data = [...]; 

$result ＝ Wxpayapi::unifiedorder($data);

```

回调验证:

```php

$result = Wxpayapi::verifyNotify();

```
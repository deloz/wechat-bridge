## WeChatBridge

WeChatBridge is a PHP API library for the WeChat API. It provides a simple and efficient way for developers to integrate
WeChat features into their PHP applications.

## Features

* Easy integration with WeChat's API: WeChatBridge takes care of the complexities of working with the WeChat API,
  allowing developers to focus on building their applications.

* Robust and reliable: WeChatBridge is designed to be a reliable and stable tool for building WeChat integrations. It's
  been thoroughly tested and is used by developers around the world.

* Well-documented: WeChatBridge comes with detailed documentation that explains how to use the library and integrate
  with the WeChat API.

## Installation

You can install the package via composer:

``bash
composer require deloz/wechat-bridge
``

## Getting started

To get started with WeChatBridge, simply include the library in your PHP project and follow the instructions in the
documentation. Here's an example of how to use WeChatBridge to authenticate a user:

```php
<?php
$wechat = new WeChatBridge('YOUR_APP_ID', 'YOUR_APP_SECRET');

// Get the user's profile information
$userId = 'USER_OPENID_HERE';
$response = $wechat->get('/cgi-bin/user/info', [
    'openid' => $userId,
    'lang' => 'zh_CN'
]);

if (isset($response['errcode'])) {
    echo 'Error: ' . $response['errmsg'];
} else {
    echo 'User profile information:';
    echo '<ul>';
    echo '<li>Nickname: ' . $response['nickname'] . '</li>';
    echo '<li>Country: ' . $response['country'] . '</li>';
    echo '<li>Province: ' . $response['province'] . '</li>';
    echo '<li>City: ' . $response['city'] . '</li>';
    echo '</ul>';
}
?>
```

## Contributing

We welcome contributions from the community! If you'd like to contribute to WeChatBridge, please read our contribution
guidelines and code of conduct.

### License

WeChatBridge is released under the MIT License (MIT). Please see [License File](LICENSE.md) for more information.
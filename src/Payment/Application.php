<?php

declare(strict_types=1);

namespace Deloz\WechatBridge\Payment;

use EasyWeChat\Kernel\Exceptions\InvalidArgumentException;
use EasyWeChat\Pay\Application as BaseApplication;

final class Application
{
    private BaseApplication $app;

    /**
     * @throws InvalidArgumentException
     */
    public function __construct(array $config)
    {
        $this->app = new BaseApplication($config);
    }

    public function getPayment(Payload $payload): Payment
    {
        return new Payment($this->app, $payload);
    }
}

<?php

declare(strict_types=1);

namespace Deloz\WechatBridge\Payment;

use EasyWeChat\Kernel\Exceptions\InvalidArgumentException;
use EasyWeChat\Pay\Application as BaseApplication;
use Psr\SimpleCache\CacheInterface;

final class Application
{
    private BaseApplication $app;

    /**
     * @throws InvalidArgumentException
     */
    public function __construct(array $config, protected Payload $payload)
    {
        $this->app = new BaseApplication($config);
    }

    public function getPayment(): Payment
    {
        return new Payment($this->app, $this->payload);
    }

    public function setCache(CacheInterface $cache): self
    {
        $this->app->setCache($cache);

        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Deloz\WechatBridge\Payment;

use Deloz\WechatBridge\Traits\GetApplication;
use EasyWeChat\Kernel\Exceptions\InvalidArgumentException;
use EasyWeChat\Kernel\Exceptions\RuntimeException;
use EasyWeChat\Pay\Application as BaseApplication;
use Psr\Http\Message\ResponseInterface;
use ReflectionException;
use Throwable;

final class Application
{
    use GetApplication;
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

    /**
     * @throws InvalidArgumentException
     * @throws ReflectionException
     * @throws RuntimeException
     * @throws Throwable
     */
    public function handlePaidNotify(callable $handler): self
    {
        $server = $this->app->getServer();
        $server->handlePaid($handler);

        return $this;
    }

    /**
     * @throws InvalidArgumentException
     * @throws ReflectionException
     * @throws RuntimeException
     * @throws Throwable
     */
    public function handleRefundedNotify(callable $handler): self
    {
        $server = $this->app->getServer();
        $server->handleRefunded($handler);

        return $this;
    }

    /**
     * @throws InvalidArgumentException
     * @throws ReflectionException
     * @throws RuntimeException
     * @throws Throwable
     */
    public function serve(): ResponseInterface
    {
        return $this->app->getServer()->serve();
    }
}

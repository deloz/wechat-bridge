<?php

declare(strict_types=1);

namespace Deloz\WechatBridge\MiniProgram;

use Deloz\WechatBridge\Traits\GetApplication;
use EasyWeChat\Kernel\Exceptions\InvalidArgumentException;
use EasyWeChat\MiniApp\Application as BaseApplication;
use Psr\SimpleCache\CacheInterface;

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

    public function getAuth(): Auth
    {
        return new Auth($this->app);
    }

    public function phoneNumber(): PhoneNumber
    {
        return new PhoneNumber($this->app);
    }

    public function setCache(CacheInterface $cache): self
    {
        $this->app->setCache($cache);

        return $this;
    }
}

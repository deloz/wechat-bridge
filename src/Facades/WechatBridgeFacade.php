<?php

declare(strict_types=1);

namespace Deloz\WechatBridge\Facades;

use Illuminate\Support\Facades\Facade;

final class WechatBridgeFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'wechat.bridge';
    }
}

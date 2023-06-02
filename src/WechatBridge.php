<?php

declare(strict_types=1);

namespace Deloz\WechatBridge;

use Deloz\WechatBridge\MiniProgram\Application as MiniProgramApplication;
use Deloz\WechatBridge\Payment\Application as PaymentApplication;
use EasyWeChat\Kernel\Exceptions\InvalidArgumentException;

final class WechatBridge
{
    /**
     * @throws InvalidArgumentException
     */
    public static function miniProgram(array $config): MiniProgramApplication
    {
        return new MiniProgramApplication($config);
    }

    /**
     * @throws InvalidArgumentException
     */
    public static function pay(array $config): PaymentApplication
    {
        return new PaymentApplication($config);
    }
}

<?php

declare(strict_types=1);

namespace Deloz\WechatBridge;

use Deloz\WechatBridge\MiniProgram\Application as MiniProgramApplication;
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
}

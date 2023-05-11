<?php

declare(strict_types=1);

namespace Deloz\WechatBridge\MiniProgram;

use EasyWeChat\MiniApp\Application;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

final class PhoneNumber
{
    public function __construct(protected Application $app)
    {
    }

    /**
     * code换取用户手机号.
     *
     * https://developers.weixin.qq.com/miniprogram/dev/api-backend/open-api/phonenumber/phonenumber.getPhoneNumber.html
     *
     * @throws TransportExceptionInterface
     */
    public function getUserPhoneNumber(string $code): array
    {
        return $this->app->getClient()->postJson('/wxa/business/getuserphonenumber', [
            'code' => $code,
        ])->toArray();
    }
}

<?php

declare(strict_types=1);

namespace Deloz\WechatBridge\Payment;

use EasyWeChat\Kernel\Exceptions\InvalidArgumentException;
use EasyWeChat\Kernel\Exceptions\InvalidConfigException;
use EasyWeChat\Pay\Application;
use Exception;
use Throwable;

final class Payment
{
    public function __construct(protected Application $app, protected Payload $payload)
    {
    }

    /**
     * @throws Exception
     * @throws InvalidArgumentException
     * @throws InvalidConfigException
     */
    public function appPay(): array
    {
        $ret = $this->sendRequest('v3/pay/transactions/app', $this->basePayload());

        return [
            'app' => $this->app->getUtils()->buildAppConfig($ret['prepay_id'], $this->app->getConfig()->get('app_id')),
        ];
    }

    /**
     * @throws Exception
     * @throws InvalidArgumentException
     * @throws InvalidConfigException
     */
    public function jsPay(): array
    {
        if (!$this->payload->open_id) {
            throw new Exception('open_id is required');
        }

        $payload = $this->basePayload();
        $payload['payer'] = [
            'openid' => $this->payload->open_id,
        ];

        $ret = $this->sendRequest('v3/pay/transactions/jsapi', $payload);

        return [
            'js' => $this->app->getUtils()->buildSdkConfig($ret['prepay_id'], $this->app->getConfig()->get('app_id')),
        ];
    }

    /**
     * @throws Exception
     * @throws InvalidArgumentException
     * @throws InvalidConfigException
     */
    public function miniProgramPay(): array
    {
        if (!$this->payload->open_id) {
            throw new Exception('open_id is required');
        }

        $payload = $this->basePayload();
        $payload['payer'] = [
            'openid' => $this->payload->open_id,
        ];

        $ret = $this->sendRequest('v3/pay/transactions/jsapi', $payload);

        return [
            'js' => $this->app->getUtils()->buildMiniAppConfig($ret['prepay_id'], $this->app->getConfig()->get('app_id')),
        ];
    }

    /**
     * @throws Exception
     * @throws InvalidArgumentException
     * @throws InvalidConfigException
     */
    public function mWebPay(): array
    {
        if (!$this->payload->payer_client_ip) {
            throw new Exception('payer_client_ip is required');
        }

        $payload = $this->basePayload();
        $payload['scene_info'] = [
            'payer_client_ip' => $this->payload->payer_client_ip,
            'h5_info' => [
                'type' => 'Wap',
            ],
        ];

        $ret = $this->sendRequest('v3/pay/transactions/h5', $payload);

        return [
            'mWebUrl' => $ret['h5_url'],
        ];
    }

    /**
     * @throws Exception
     * @throws InvalidArgumentException
     * @throws InvalidConfigException
     * @throws Throwable
     */
    public function nativePay(): array
    {
        $ret = $this->sendRequest('v3/pay/transactions/native', $this->basePayload());

        return [
            'code_url' => $ret['code_url'],
        ];
    }

    /**
     * @throws InvalidArgumentException
     * @throws InvalidConfigException
     */
    private function basePayload(): array
    {
        return [
            'appid' => $this->app->getConfig()->get('app_id'),
            'mchid' => (string) $this->app->getMerchant()->getMerchantId(),
            'out_trade_no' => $this->payload->out_trade_no,
            'description' => $this->payload->description,
            'notify_url' => $this->payload->notify_url,
            'time_expire' => $this->payload->time_expire->toRfc3339String(),
            'amount' => [
                'total' => $this->payload->price,
                'currency' => 'CNY',
            ],
        ];
    }

    /**
     * @throws Exception
     * @throws InvalidArgumentException
     * @throws InvalidConfigException
     */
    private function sendRequest(string $url, array $payload): array
    {
        $ret = $this->app->getClient()
            ->postJson($url, $payload)
            ->toArray(false);

        if (isset($ret['message']) && $ret['message']) {
            throw new Exception($ret['message']);
        }

        return $ret;
    }
}

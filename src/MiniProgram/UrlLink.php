<?php

declare(strict_types=1);

namespace Deloz\WechatBridge\MiniProgram;

use EasyWeChat\MiniApp\Application;
use Exception;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

final class UrlLink
{
    public function __construct(protected Application $app)
    {
    }

    /**
     * @throws DecodingExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function generate(array $params): string
    {
        return $this->sendRequestPost('/wxa/generate_urllink', $params)['url_link'];
    }

    /**
     * @throws DecodingExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function query(string $urlLink): array
    {
        return $this->sendRequestPost('/wxa/query_urllink', [
            'url_link' => $urlLink,
        ])['url_link_info'];
    }

    /**
     * @throws DecodingExceptionInterface
     * @throws Exception
     * @throws TransportExceptionInterface
     */
    private function sendRequestPost(string $url, array $payload): array
    {
        $ret = $this->app->getClient()
            ->postJson($url, $payload)
            ->toArray(false);

        if (0 !== $ret['errcode']) {
            throw new Exception($ret['errmsg']);
        }

        return $ret;
    }
}

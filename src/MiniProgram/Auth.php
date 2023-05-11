<?php

declare(strict_types=1);

namespace Deloz\WechatBridge\MiniProgram;

use EasyWeChat\Kernel\Exceptions\DecryptException;
use EasyWeChat\Kernel\Exceptions\HttpException;
use EasyWeChat\MiniApp\Application;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\DecodingExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;

final class Auth
{
    public function __construct(protected Application $app)
    {
    }

    public function checkEncryptedData(): void
    {
    }

    public function checkSessionKey(): void
    {
    }

    /**
     * @throws ClientExceptionInterface
     * @throws DecodingExceptionInterface
     * @throws HttpException
     * @throws RedirectionExceptionInterface
     * @throws ServerExceptionInterface
     * @throws TransportExceptionInterface
     */
    public function code2Session(string $code): array
    {
        return $this->app->getUtils()->codeToSession($code);
    }

    /**
     * @throws DecryptException
     */
    public function decryptSession(string $sessionKey, string $iv, string $ciphertext): array
    {
        return $this->app->getUtils()->decryptSession($sessionKey, $iv, $ciphertext);
    }

    /**
     * @throws DecryptException
     */
    public function decryptSessionMobile(string $sessionKey, string $iv, string $ciphertext)
    {
        $arr = $this->decryptSession($sessionKey, $iv, $ciphertext);

        return $arr['purePhoneNumber'] ?? $arr['phoneNumber'];
    }

    public function getAccessToken(): void
    {
    }

    public function getPluginOpenPId(): void
    {
    }

    public function getStableAccessToken(): void
    {
    }
}

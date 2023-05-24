<?php

declare(strict_types=1);

namespace Deloz\WechatBridge\Payment;

use Carbon\Carbon;

/**
 * @property string $description
 * @property string $notify_url
 * @property string $out_trade_no
 */
final class Payload
{
    public string $description;
    public string $notify_url;
    public ?string $open_id = null;
    public ?string $payer_client_ip = null;
    public string $out_trade_no;
    public int $price;
    public Carbon $time_expire;
}

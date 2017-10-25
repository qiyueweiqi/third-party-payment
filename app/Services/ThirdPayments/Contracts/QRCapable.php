<?php
namespace App\Services\ThirdPayments\Contracts;

use App\Models\RechargeOrder;

interface QRCapable
{
    public function qrCode(RechargeOrder $rechargeOrder);
}

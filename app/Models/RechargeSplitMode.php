<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RechargeSplitMode extends Model
{
    //
    protected $table = 'recharge_split_modes';

    public function dictpayment()
    {
        return $this->belongsTo(DictPayment::class, 'pm_id');
    }

    public function defaultif()
    {
        return $this->belongsTo(RechargeIf::class, 'df_if_id');
    }

    public function spareif()
    {
        return $this->belongsTo(RechargeIf::class, 'sp_if_id');
    }
}

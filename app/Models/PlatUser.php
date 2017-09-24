<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlatUser extends Model
{
    //
    protected $table = 'plat_users';

    public function upper()
    {
        return $this->hasOne(PlatUser::class, 'upper_id');
    }

    public function getLastAtAttribute($last_at)
    {
        return date('Y-m-d H:i:s', $last_at);
    }

    public function getLastIpAttribute($ip)
    {
        return long2ip($ip);
    }

    public function setLastIpAttribute($ip)
    {
        $this->attributes['last_ip'] = ip2long($ip);
    }
}
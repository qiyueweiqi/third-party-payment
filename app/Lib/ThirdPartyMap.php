<?php
namespace App\Lib;

class ThirdPartyMap extends AbstractMap
{
    const WEIXIN        = 'weixin';
    const ALIPAT        = 'alipay';
    const HUICHAO       = 'ecpss';
    const QIANYIFU      = 'qyf';
    const YIBAO         = 'yeepay';


    public static function getMap():array
    {
        $map = [
            self::WEIXIN        => '微信官方',
            self::ALIPAT        => '支付宝官方',
            self::HUICHAO       => '汇潮支付',
            self::QIANYIFU      => '迁易付支付',
            self::YIBAO         => '易宝支付'
        ];
        return $map;
    }

}

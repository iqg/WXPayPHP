<?php
/**
 * Created by PhpStorm.
 * User: zhangchao
 * Date: 1/27/16
 * Time: 17:10
 */
/**
 * Created by PhpStorm.
 * User: zhangchao
 * Date: 10/22/15
 * Time: 15:16
 */

namespace iqg\WxPayBundle\Lib;


/**
 *
 * 提交JSAPI输入对象
 * @author widyhu
 *
 */
class WxPayAppPay extends WxPayDataBase
{
    /**
     * 设置微信分配的公众账号ID
     * @param string $value
     **/
    public function SetAppid($value)
    {
        $this->values['appid'] = $value;
    }
    /**
     * 获取微信分配的公众账号ID的值
     * @return 值
     **/
    public function GetAppid()
    {
        return $this->values['appid'];
    }
    /**
     * 判断微信分配的公众账号ID是否存在
     * @return true 或 false
     **/
    public function IsAppidSet()
    {
        return array_key_exists('appid', $this->values);
    }


    /**
     * 设置支付时间戳
     * @param string $value
     **/
    public function SetTimeStamp($value)
    {
        $this->values['timestamp'] = $value;
    }
    /**
     * 获取支付时间戳的值
     * @return 值
     **/
    public function GetTimeStamp()
    {
        return $this->values['timestamp'];
    }
    /**
     * 判断支付时间戳是否存在
     * @return true 或 false
     **/
    public function IsTimeStampSet()
    {
        return array_key_exists('timestamp', $this->values);
    }

    /**
     * 随机字符串
     * @param string $value
     **/
    public function SetNonceStr($value)
    {
        $this->values['noncestr'] = $value;
    }
    /**
     * 获取notify随机字符串值
     * @return 值
     **/
    public function GetReturn_code()
    {
        return $this->values['noncestr'];
    }
    /**
     * 判断随机字符串是否存在
     * @return true 或 false
     **/
    public function IsReturn_codeSet()
    {
        return array_key_exists('noncestr', $this->values);
    }


    /**
     * 设置订单详情扩展字符串
     * @param string $value
     **/
    public function SetPackage($value = "Sign=WXPay")
    {
        $this->values['package'] = $value;
    }
    /**
     * 获取订单详情扩展字符串的值
     * @return 值
     **/
    public function GetPackage()
    {
        return $this->values['package'];
    }
    /**
     * 判断订单详情扩展字符串是否存在
     * @return true 或 false
     **/
    public function IsPackageSet()
    {
        return array_key_exists('package', $this->values);
    }

    /**
     * 设置 partnerid
     * @param string $value
     **/
    public function SetPartnerId($value)
    {
        $this->values['partnerid'] = $value;
    }
    /**
     * 获取 prepayid
     * @return 值
     **/
    public function GetPrepayId()
    {
        return $this->values['prepayid'];
    }
    /**
     * 判断 prepayid 是否存在
     * @return true 或 false
     **/
    public function IsPrepayIdSet()
    {
        return array_key_exists('prepayid', $this->values);
    }

    /**
     * 设置 prepayid
     * @param string $value
     **/
    public function SetPrepayId($value)
    {
        $this->values['prepayid'] = $value;
    }
    /**
     * 获取 partnerid
     * @return 值
     **/
    public function GetPartnerId()
    {
        return $this->values['partnerid'];
    }
    /**
     * 判断 partnerid 是否存在
     * @return true 或 false
     **/
    public function IsPartnerIdSet()
    {
        return array_key_exists('partnerid', $this->values);
    }

    /**
     * 设置签名方式
     * @param string $value
     **/
    public function SetSignType($value)
    {
        $this->values['signtype'] = $value;
    }
    /**
     * 获取签名方式
     * @return 值
     **/
    public function GetSignType()
    {
        return $this->values['signtype'];
    }
    /**
     * 判断签名方式是否存在
     * @return true 或 false
     **/
    public function IsSignTypeSet()
    {
        return array_key_exists('signtype', $this->values);
    }

    /**
     * 设置签名方式
     * @param string $value
     **/
    public function SetSign($value)
    {
        $this->values['sign'] = $value;
    }
    /**
     * 获取签名方式
     * @return 值
     **/
    public function GetSign()
    {
        return $this->values['sign'];
    }
    /**
     * 判断签名方式是否存在
     * @return true 或 false
     **/
    public function IsSignSet()
    {
        return array_key_exists('sign', $this->values);
    }
}
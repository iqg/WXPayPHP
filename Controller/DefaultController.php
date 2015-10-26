<?php

namespace iqg\WxPayBundle\Controller;

use iqg\WxPayBundle\Lib\WxPayUnifiedOrder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/test")
     */
    public function indexAction()
    {
        /**@var $wxPayHandler \iqg\WxPayBundle\Lib\WxPayApi*/
        $wxPayHandler = $this->container->get('wx_pay.handler');

        $unifiedOrder = new WxPayUnifiedOrder();
        $unifiedOrder->SetBody("test");
        $unifiedOrder->SetAttach("test");
        $unifiedOrder->SetOut_trade_no('120924000615443522');
        $unifiedOrder->SetTotal_fee("1");
        $unifiedOrder->SetTime_start(date("YmdHis"));
        $unifiedOrder->SetTime_expire(date("YmdHis", time() + 600));
        $unifiedOrder->SetGoods_tag("test");
        $unifiedOrder->SetNotify_url("http://paysdk.weixin.qq.com/example/notify.php");
        $unifiedOrder->SetTrade_type("JSAPI");

        $unifiedOrder->SetOpenid($wxPayHandler->GetOpenid());
        $orderResult = $wxPayHandler->unifiedOrder($unifiedOrder);
        $parameters = $wxPayHandler->GetJsApiParameters($orderResult);

        return $this->render('WxPayBundle:Default:index.html.twig', array('parameters' => $parameters));
    }
}

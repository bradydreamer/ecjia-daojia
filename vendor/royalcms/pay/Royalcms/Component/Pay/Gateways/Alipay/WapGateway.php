<?php

namespace Royalcms\Component\Pay\Gateways\Alipay;

class WapGateway extends WebGateway
{
    /**
     * Get method config.
     *
     * @return string
     */
    protected function getMethod()
    {
        return 'alipay.trade.wap.pay';
    }

    /**
     * Get productCode config.
     *
     * @return string
     */
    protected function getProductCode()
    {
        return 'QUICK_WAP_WAY';
    }
}

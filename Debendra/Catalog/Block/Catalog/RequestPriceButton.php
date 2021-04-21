<?php


namespace Debendra\Catalog\Block\Catalog;

use Magento\Framework\View\Element\Template;

/**
 * Class RequestPriceButton
 * @package Debendra\Catalog\Block\Catalog
 */
class RequestPriceButton extends Template
{

    /**
     * Get button label
     *
     * @return string
     */
    public function getButtonLabel()
    {
        return __('Request price');
    }
}

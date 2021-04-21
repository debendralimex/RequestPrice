<?php

namespace Debendra\Customer\Block\Adminhtml\Request\Edit;

use Magento\Framework\View\Element\UiComponent\Control\ButtonProviderInterface;

/**
 * Class SaveButton
 * @package Debendra\Customer\Block\Adminhtml\Request\Edit
 */
class SaveButton extends GenericButton implements ButtonProviderInterface
{
    /**
     * Get Save button
     *
     * @return array
     */
    public function getButtonData()
    {
        return [
            'label' => __('Save request'),
            'class' => 'save primary',
            'data_attribute' => [
                'mage-init' => ['button' => ['event' => 'save']],
                'form-role' => 'save',
            ],
            'sort_order' => 40,
        ];
    }
}

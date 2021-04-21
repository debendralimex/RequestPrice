<?php
namespace Debendra\Customer\Model\ResourceModel\Request;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

/**
 * Class Collection
 * @package Debendra\Customer\Model\ResourceModel\Request
 */
class Collection extends AbstractCollection
{
    /**
     * Initialize Model, ResourceModel
     */
    public function _construct()
    {
        $this->_init('Debendra\Customer\Model\Request', 'Debendra\Customer\Model\ResourceModel\Request');
    }
}

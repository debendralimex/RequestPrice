<?php
namespace Debendra\Customer\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

/**
 * Class Request
 * @package Debendra\Customer\Model\ResourceModel
 */
class Request extends AbstractDb
{
    /**
     * Initialize table
     */
    public function _construct()
    {
        $this->_init('debendra_customer_request_price', 'id');
    }
}

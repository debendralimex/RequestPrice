<?php
namespace Debendra\Customer\Controller\Adminhtml\RequestPrice;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * @package Debendra\Customer\Controller\Adminhtml\RequestPrice
 */
class Index extends Action
{
    /**
     * Authorization level of a basic admin session
     *
     * @see _isAllowed()
     */
    const ADMIN_RESOURCE = 'Debendra_Customer::customer_request_price';

    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Debendra_Customer::customer_request_price');
        $resultPage->addBreadcrumb(__('Request price'), __('Request price'));
        $resultPage->addBreadcrumb(__('Request price'), __('Request price'));
        $resultPage->getConfig()->getTitle()->prepend(__('Request price'));

        return $resultPage;
    }
}

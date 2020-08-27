<?php


namespace ALevel\QuickOrder\Controller\Adminhtml\Status;

use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action;

class Index extends Action
{
    public function execute()
    {
        $page = $resultJson = $this->resultFactory->create(ResultFactory::TYPE_PAGE);

        $page->setActiveMenu('ALevel_QuickOrder::quick_order_status');
        $page->getConfig()->getTitle()->prepend(__('Status Grid'));
        return $page;
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('ALevel_QuickOrder::quick_order_status');
    }

}

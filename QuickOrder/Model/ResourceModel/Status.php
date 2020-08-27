<?php


namespace ALevel\QuickOrder\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Status extends AbstractDb
{
    public function _construct()
    {
        $this->_init('alevel_quick_order_status', 'status_id');
    }

}

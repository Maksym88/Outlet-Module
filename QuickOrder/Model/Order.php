<?php


namespace ALevel\QuickOrder\Model;

use ALevel\QuickOrder\Api\Data\OrderInterface;
use Magento\Framework\Model\AbstractModel;
use ALevel\QuickOrder\Model\ResourceModel\Order as ResourceModel;

/**
 * Class Order
 * @package ALevel\QuickOrder\Model
 */
class Order extends AbstractModel implements OrderInterface
{
    public function _construct()
    {
        $this->_init(ResourceModel::class);
    }

    public function getOrderId()
    {
        return $this->_getData(self::ORDER_ID);
    }

    public function setOrderId($id)
    {
        $this->setData(self::ORDER_ID, $id);
    }

    public function getSKU()
    {
        return $this->_getData(self::SKU);
    }

    public function setSKU($sku)
    {
        $this->setData(self::SKU, $sku);
    }

    public function getName()
    {
        return $this->_getData(self::NAME);
    }

    public function setName($name)
    {
        $this->setData(self::NAME, $name);
    }

    public function getPhone()
    {
        return $this->_getData(self::PHONE);
    }

    public function setPhone($phone)
    {
        $this->setData(self::PHONE, $phone);
    }

    public function getEmail()
    {
        return $this->_getData(self::EMAIL);
    }

    public function setEmail($email)
    {
        $this->setData(self::EMAIL, $email);
    }

    public function getStatusId()
    {
        return $this->_getData(self::STATUS_ID);
    }

    public function setStatusId($id)
    {
        $this->setData(self::STATUS_ID, $id);
    }
}


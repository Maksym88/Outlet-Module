<?php

namespace ALevel\QuickOrder\Model;

use ALevel\QuickOrder\Api\Data\OrderInterfaceFactory;

class OrderService
{
    /**
     * @var OrderInterfaceFactory
     */
    private $orderInterfaceFactory;

    /**
     * OrderService constructor.
     * @param OrderInterfaceFactory $orderInterfaceFactory
     */
    public function __construct(
        OrderInterfaceFactory $orderInterfaceFactory
    ) {
        $this->orderInterfaceFactory = $orderInterfaceFactory;
    }

    public function prepareObjectOrder($request)
    {
        $order = $this->orderInterfaceFactory->create();

        $name = $request->getParam('name');
        $phone = $request->getParam('phone');
        $email = $request->getParam('email');
        $sku = $request->getParam('sku');
        $status = 'Pending';

        $order->setName($name);
        $order->setPhone($phone);
        $order->setEmail($email);
        $order->setSKU($sku);
        $order->setStatus($status);

        return $order;
    }


}

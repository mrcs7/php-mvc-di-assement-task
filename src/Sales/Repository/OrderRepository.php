<?php

namespace Sales\Repository;

use Sales\Model\Order;
use Sales\Repository\Contracts\OrderRepositoryInterface;

class OrderRepository implements OrderRepositoryInterface
{
    /**
     * @var Order
     */
    private $order;

    /**
     * OrderRepository constructor.
     */
    public function __construct()
    {
        $this->order = new Order();
    }

    /**
     * @param $data
     * @return array
     */
    public function getTotalCountOfOrders($data)
    {
        return $this->order->getTotalCountOfOrders($data);
    }
}

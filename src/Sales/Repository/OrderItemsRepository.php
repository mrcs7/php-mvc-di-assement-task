<?php

namespace Sales\Repository;

use Sales\Model\OrderItems;
use Sales\Repository\Contracts\OrderItemsRepositoryInterface;

class OrderItemsRepository implements OrderItemsRepositoryInterface
{
    /**
     * @var OrderItems
     */
    private $order_items;

    /**
     * OrderItemsRepository constructor.
     */
    public function __construct()
    {
        $this->order_items = new OrderItems();
    }
}

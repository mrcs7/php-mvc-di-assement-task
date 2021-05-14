<?php

namespace Boozt\Repository;

use Boozt\Model\OrderItems;
use Boozt\Repository\Contracts\OrderItemsRepositoryInterface;

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

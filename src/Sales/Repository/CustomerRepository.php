<?php

namespace Sales\Repository;

use Sales\Model\Customer;
use Sales\Repository\Contracts\CustomerRepositoryInterface;

class CustomerRepository implements CustomerRepositoryInterface
{
    /**
     * @var Customer
     */
    private $customer;

    /**
     * CustomerRepository constructor.
     */
    public function __construct()
    {
        $this->customer = new Customer();
    }
}

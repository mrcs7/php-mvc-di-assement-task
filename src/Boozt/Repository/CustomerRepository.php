<?php

namespace Boozt\Repository;

use Boozt\Model\Customer;
use Boozt\Repository\Contracts\CustomerRepositoryInterface;

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

<?php

use Sales\Repository\Contracts\CustomerRepositoryInterface;
use Sales\Repository\Contracts\OrderItemsRepositoryInterface;
use Sales\Repository\Contracts\OrderRepositoryInterface;
use Sales\Repository\Contracts\StatisticsRepositoryInterface;
use Sales\Repository\CustomerRepository;
use Sales\Repository\OrderItemsRepository;
use Sales\Repository\OrderRepository;
use Sales\Repository\StatisticsRepository;
use function DI\create;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;


return [
    // Bind an interface to an implementation
    CustomerRepositoryInterface::class => create(CustomerRepository::class),
    OrderRepositoryInterface::class => create(OrderRepository::class),
    OrderItemsRepositoryInterface::class=>create(OrderItemsRepository::class),
    StatisticsRepositoryInterface::class=>create(StatisticsRepository::class),

    // Configure Twig
    Environment::class => function () {
        $loader = new FilesystemLoader(__DIR__ . '/../src/Sales/Views');
        return new Environment($loader);
    },

];

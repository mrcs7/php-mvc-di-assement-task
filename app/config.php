<?php

use Boozt\Repository\Contracts\CustomerRepositoryInterface;
use Boozt\Repository\Contracts\OrderItemsRepositoryInterface;
use Boozt\Repository\Contracts\OrderRepositoryInterface;
use Boozt\Repository\Contracts\StatisticsRepositoryInterface;
use Boozt\Repository\CustomerRepository;
use Boozt\Repository\OrderItemsRepository;
use Boozt\Repository\OrderRepository;
use Boozt\Repository\StatisticsRepository;
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
        $loader = new FilesystemLoader(__DIR__ . '/../src/Boozt/Views');
        return new Environment($loader);
    },

];

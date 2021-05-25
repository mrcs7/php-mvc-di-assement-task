<?php

namespace Sales\Controller;

use Sales\Helpers\ResponseTrait;
use Sales\Model\Customer;
use Sales\Repository\Contracts\CustomerRepositoryInterface;
use Sales\Repository\Contracts\OrderItemsRepositoryInterface;
use Sales\Repository\Contracts\OrderRepositoryInterface;
use Sales\Repository\Contracts\StatisticsRepositoryInterface;
use Sales\Request;
use Sales\Requests\StatisticsRequest;
use Twig\Environment;

class StatisticsController
{
    use ResponseTrait;
    /**
     * @var Environment
     */
    private $twig;
    /**
     * @var StatisticsRepositoryInterface
     */
    private $statisticsRepository;
    /**
     * @var OrderRepositoryInterface
     */
    private $orderRepository;

    /**
     * StatisticsController constructor.
     * @param StatisticsRepositoryInterface $statisticsRepository
     * @param OrderRepositoryInterface $orderRepository
     * @param Environment $twig
     */
    public function __construct(StatisticsRepositoryInterface $statisticsRepository, OrderRepositoryInterface $orderRepository, Environment $twig)
    {
        $this->twig =$twig;
        $this->statisticsRepository = $statisticsRepository;
        $this->orderRepository = $orderRepository;
    }

    /**
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function index()
    {
        echo $this->twig->render('statistics_index.twig');
    }

    /**
     * @param StatisticsRequest $request
     */
    public function statistics(StatisticsRequest $request)
    {
        $data=$request->all();
        $request->validate();
        if(count($request->errors)>0)
        {
            echo $this->validationErrorsResponse($request->errors);
            exit();
        }
        if (!isset($data['date_to']) || empty($data['date_to'])) {
            $data['date_to'] = date('Y-m-d', strtotime('today'));
        }
        if (!isset($data['date_from'])|| empty($data['date_from'])) {
            $data['date_from'] = date('Y-m-d', strtotime('today - 30 days'));
        }
        $result = $this->statisticsRepository->getSalesStatistics($data);
        echo $this->successResponse($result);
    }

    /**
     * @param StatisticsRequest $request
     */
    public function statisticsChart(StatisticsRequest $request)
    {
        $data=$request->all();
        if (!isset($data['date_to']) || empty($data['date_to'])) {
            $data['date_to'] = date('Y-m-d', strtotime('today'));
        }
        if (!isset($data['date_from'])|| empty($data['date_from'])) {
            $data['date_from'] = date('Y-m-d', strtotime('today - 30 days'));
        }
        $result = $this->orderRepository->getTotalCountOfOrders($data);
        echo $this->successResponse($result);
    }
}

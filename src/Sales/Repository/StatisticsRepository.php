<?php

namespace Sales\Repository;

use Sales\Model\Statistics;

class StatisticsRepository implements Contracts\StatisticsRepositoryInterface
{
    /**
     * @var Statistics
     */
    private $model;

    /**
     * StatisticsRepository constructor.
     */
    public function __construct()
    {
        $this->model = new Statistics();
    }

    /**
     * @param $data
     * @return mixed
     */
    public function getSalesStatistics($data)
    {
        return $this->model->getSalesStatistics($data);
    }
}

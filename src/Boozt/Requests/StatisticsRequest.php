<?php


namespace Boozt\Requests;


use Boozt\Request;

class StatisticsRequest extends Request
{
    /**
     * @var array
     */
    public $errors = [];

    public function validate()
    {
        $data= $this->all();
        $this->validateDateFrom($data);
        $this->validateDateTo($data);
    }

    /**
     * @param $data
     */
    private function validateDateFrom($data)
    {
        if(isset($data['date_from'])){
            if(!$this->validateDate($data['date_from'])){
                $this->errors = ['date_from must be valid Y-m-d'];
            }
        }


    }

    /**
     * @param $date_to
     */
    private function validateDateTo($date_to)
    {
        if(isset($data['date_to'])){
            if(!$this->validateDate($data['date_from'])){
                $this->errors = ['date_to must be valid Y-m-d'];
            }
        }
    }

    /**
     * @param $date
     * @param string $format
     * @return bool
     */
    public function validateDate($date, $format = 'Y-m-d')
    {
        if (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $date))
            return true;
        else
            return false;
    }

}
<?php

namespace Sales\Model;

use PDO;

class Statistics extends Model
{
    /**
     * @param $data
     * @return mixed
     */
    public function getSalesStatistics($data)
    {
        $sql="SELECT SUM(price * quantity) as total_revenue, 
       COUNT(DISTINCT `customer_id`) as customers_count , 
       COUNT(DISTINCT b_order.id) as orders_count FROM ".OrderItems::$table."
           LEFT JOIN ". Order::$table ." ON b_order.id=order_id WHERE (purchase_date BETWEEN '{$data['date_from']}' AND '{$data['date_to']}')";
        $stmt = self::getDB()->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}

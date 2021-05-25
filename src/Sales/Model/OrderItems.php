<?php

namespace Sales\Model;

use PDO;

class OrderItems extends Model
{
    /**
     * @var string \
     */
    public static $table='b_order_items';

    /**
     * @param $data
     * @return mixed
     */
    public static function getTotalRevenue($data)
    {
        $sql = 'SELECT SUM(price * quantity) as total_revenue FROM '.self::$table;
        $sql.= " LEFT JOIN ".Order::$table." ON ".Order::$table.".id =order_id WHERE (purchase_date BETWEEN '{$data['date_from']}' AND '{$data['date_to']}')";
        $stmt = self::getDB()->query($sql);
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}

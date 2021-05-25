<?php

namespace Sales\Model;

use PDO;

class Order extends Model
{
    /**
     * @var string
     */
    public static $table='b_order';

    /**
     * @param $data
     * @return array
     */
    public static function getTotalCountOfOrders($data)
    {
        $sql = 'SELECT COUNT(id) as orders_count, purchase_date FROM '.self::$table." WHERE (purchase_date BETWEEN '{$data['date_from']}' AND '{$data['date_to']}')";
        $sql .= ' GROUP BY purchase_date';
        $stmt = self::getDB()->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

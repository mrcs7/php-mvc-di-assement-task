<?php

namespace Boozt;

use PDO;

class DBCon
{
    public static function getPDOCon()
    {
        $dsn = 'mysql:host=' . Configuration::DB_HOST . ';dbname=' . Configuration::DB_NAME . ';charset=utf8';
        return new PDO($dsn, Configuration::DB_USER, Configuration::DB_PASS);
    }
}

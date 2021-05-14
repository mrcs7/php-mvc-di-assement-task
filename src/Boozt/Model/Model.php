<?php

namespace Boozt\Model;

use Boozt\DBCon;
use PDO;

abstract class Model
{
    /**
     * @return PDO|null
     */
    protected static function getDB()
    {
        static $db = null;

        if ($db === null) {
            $db = DBCon::getPDOCon();
            // Throw an Exception when an error occurs
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $db;
    }
}

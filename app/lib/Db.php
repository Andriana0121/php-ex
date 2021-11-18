<?php

namespace lib;

use PDO;

class Db
{
    protected $db;
    public function  __construct()
    {
        $dbParams = require ROOT . "/app/config/db.php";
        $this->db = new PDO(
            'mysql:host=' . $dbParams['host'] . ';dbname=' . $dbParams['dbname'],
            $dbParams['user'],
            $dbParams['pass']
        );
    }
    public function dbQuery($sql)
    {
        $query = $this->db->query($sql);
        return $query;
    }
    public function row($sql)
    {
        $result = $this->dbQuery($sql);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    public function column($sql)
    {
        $result = $this->dbQuery($sql);
        return $result->fetchColumn();
    }
}

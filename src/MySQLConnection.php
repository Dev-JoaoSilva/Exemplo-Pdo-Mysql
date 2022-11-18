<?php
namespace ExemploPDOMySQL;

class MySQLConnection extends \PDO {
    public function _construct() {
        parent::_construct('myql:host=localhost;dbname=biblioteca', 'root', '');
    }
}
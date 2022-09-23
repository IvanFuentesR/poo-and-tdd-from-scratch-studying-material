<?php

namespace App;

class Student {
    public function __construct() {
        try {
            $db = new \PDO('mysql:host=localhost;dbname=phpunit', 'root', '');
        } catch (\PDOException $e) {
            die($e->getMessage());
        }
        var_dump('from inside App namespace');
    }
}



?>
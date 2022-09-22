<?php

class PDOClient extends Database {

    protected $dsn;

    public function __construct($driver, string $host, string $db_name, string $db_user, string $db_password) {
        parent::__construct($host, $db_name, $db_user, $db_password);
        $this->dsn = "{$driver}:host=$host;dbname=$db_name";
    }

    public function connect() {
        try {
            $this->_handler = new PDO($this->dsn, $this->db_user, $this->db_password);
        } catch (PDOException $e) {
            die($e->getMessage());
        }

        return $this;
    }

    public function get() {
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }
}

?>
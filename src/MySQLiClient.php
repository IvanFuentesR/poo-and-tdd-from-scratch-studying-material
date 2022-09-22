<?php 

class MySQLiClient extends Database {
    
    public function __construct(string $host, string $db_name, string $db_user, string $db_password) {
        parent::__construct($host, $db_name, $db_user, $db_password);
    }

    public function connect() {
        $this->_handler = new mysqli($this->host, $this->db_user, $this->db_password, $this->db_name);
        if ($this->_handler->connect_error) {
            die($this->_handler->connect_error);
        }

        return $this;
    }

    public function get() {
        return $this->statement->fetch_all(MYSQLI_ASSOC);
        // return json_decode(json_encode());
    }
}

?>
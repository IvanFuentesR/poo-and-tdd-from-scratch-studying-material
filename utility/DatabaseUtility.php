<?php 

class DatabaseUtility {
    static private $pdo;
    static public $operators = ['=', '<>', 'and', 'or', 'like'];
    private $table;

    public static function connect(string $method) {
        static::$pdo = $method;
        return new static;
    }

    public function table (string $name) {
        $this->table = $name;
        return $this;
    }

    public function insert(array $data) {
        var_dump('Connected to the database using' . static::$pdo);
        var_dump("INSERTING INTO { $this->table } VALUES(".json_encode($data).")");
    }

    public static function create(array $data) {
        var_dump('Creating a new database with ' . self::$pdo);
    }

    public function getMethod() {
        return self::$pdo;
    }
}

header('Content-Type: text/plain', true);
var_dump(DatabaseUtility::$operators);
DatabaseUtility::connect('pdo')->table('users')->insert(['name' => 'John Doe']);
DatabaseUtility::create([]);

$db = new DatabaseUtility;
var_dump($db->getMethod());

?>
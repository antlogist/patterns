<?php

require_once('config.php');

class Db
{
    private static $instance;
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    private $connection;
    private $error;
    private $statement;
    private $dbconnected = false;

    private function __construct()
    {

        $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;

        $options = array(
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        );

        try {
            $this->connection = new PDO($dsn, $this->user, $this->pass, $options);
            $this->dbconnected = true;
        } catch (PDOException $e) {
            $this->error = $e->getMessage() . PHP_EOL;
            $this->dbconnected = false;
        }
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function getError()
    {
        return $this->error;
    }

    public function isConnected()
    {
        return $this->dbconnected;
    }

    //Prepare statement with query
    public function query($query)
    {
        $this->statement = $this->connection->prepare($query);
    }

    //Execute the prepared statement
    public function execute()
    {
        return $this->statement->execute();
    }

    //Get reasult and set them as an Array of Objects
    public function resultset()
    {
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    //Get recorded row count
    public function rowCount()
    {
        return $this->statement->rowCount();
    }

    //Get single recodrd as an Object
    public function single()
    {
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_OBJ);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }
        }
        $this->statement->bindValue($param, $value, $type);
    }

    public function __clone()
    {
    }
}

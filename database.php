<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class db_connect{

    private $db_host = "localhost";
    private $db_name = "GDSC";
    private $db_user = "root";
    private $db_password = " ";

    protected $connection = null;

    public function connection(){
        if($this->connection == null){
            try{
                $this->connection = new PDO("mysql;host=$this->db_host;dbname=$this->db_name", $this->db_user, $this->db_password);
            }
            catch(PDOExecution $e){
                die($e->getEssage());
            }
            $this->connection->setAttribute(PDO::ATTR_ERRMODE_EXEPTION);
            return $this->connection;
        }

    }


};

?>
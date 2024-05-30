<?php
class dataBase{
    private $db_host = "localhost";
    private $db_user = "root";
    private $db_pass = "";
    private $db_name = "test";
    private $conn = false;
    private $mysqli = "";
    private $result = array();


    public function __construct()
    {
        if (!$this->conn) {
            $this->mysqli = new mysqli($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
            $this->conn = true;
            if($this->mysqli->connect_error){
             array_push($this->result, $this->mysqli->connect_error);
             return false;
            }
        } else {
            return true;
        }
    }

    public function insert(){

    }
    public function delete(){

    }
    public function update(){
        
    }
    public function select(){

    }
    public function __destruct()
    {
        if($this->conn){
           if($this->mysqli->close()){
            $this->conn = false;
            return true;
           }
        } else{
            return false;
        }
    }
}

?>
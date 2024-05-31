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

    public function insert($table, $parameter=array()){
         if($this->tableExists($table)){
            // print_r($parameter);
            $tableColumns = implode(',', array_keys($parameter));
            $tableValue = implode("', '", $parameter);
            $sql = "INSERT INTO $table ($tableColumns) VALUE ('$tableValue')";
           if($this->mysqli->query($sql)){
            array_push($this->result, $this->mysqli->insert_id);
            return true;
           } else {
            array_push($this->result, $this->mysqli->error);
            return false;
           }
         } else {
            return false;
         }
    }
    public function delete($table, $where = null){
       if($this->tableExists($table)){
        $sql = "Delete FROM $table";
        if($where != null){
            $sql .= " WHERE $where";
        }
        print_r($table);

        if($this->mysqli->query($sql)){
            array_push($this->result, $this->mysqli->affected_rows);
            // return true;
        } else{
            array_push($this->result, $this->mysqli->error);

            return false;
        }

       } else {
        return false;
       }
    }
    public function update($table, $parameter=array(), $where = null){
        if($this->tableExists($table)){
        //   print_r($parameter);
        $arguments = array();
        foreach($parameter as $key => $value){
            $arguments[] = "$key = '$value'";
        }
        // print_r($arguments);
        $sql = "UPDATE $table SET " . implode(', ', $arguments); 
        if($where != null){
            $sql .= " WHERE $where";
        }

        if($this->mysqli->query($sql)){
            array_push($this->result, $this->mysqli->affected_rows);
            // return true;
        } else{
            array_push($this->result, $this->mysqli->error);

            return false;
        }

        } else{
            return false;
        }
    }
    public function select(){

    }
    public function sql($sql){
        $query = $this->mysqli->query(($sql));

        if($query){
            $this->result = $query->fetch_all(MYSQLI_ASSOC);
            return true;
        } else {
           array_push($this->result, $this->mysqli->error);
           return false;
        }
    }
    private function tableExists($table){
       $sql = "SHOW TABLES FROM $this->db_name LIKE '$table'";
       $tableInDb = $this->mysqli->query($sql);
       if($tableInDb){
          if($tableInDb->num_rows == 1){
            return true;
          }
       } else {
        array_push($this->result, $table . "table doesn't exist in the database");
        return false;
       }
    }
    public function getResult(){
        $val = $this->result;
        $this->result = array();
        return $val;
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
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class database 
{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "advocate_db";
    
    public function connect(){
        $connection = mysqli_connect($this->host, $this->username, $this->password, $this->db);
        return $connection;
    }
    
    public function read($query){
        $conn = $this->connect();
        $result = mysqli_query($conn, $query);
        if(!$result){
            return False;
        }
        else{
            $data = array();
            while($row = mysqli_fetch_assoc($result)){
                $data[] = $row;
            }
            return $data;
        }
    }
    
    public function save($query){
        $conn = $this->connect();
        mysqli_query($conn, $query); 
    }
}
?>

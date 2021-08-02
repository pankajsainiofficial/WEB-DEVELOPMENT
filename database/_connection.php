<?php
class Dbcontroller{
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "pricepare";

    // creating connection

    public $conn = null;

    //call constructor

    public function __construct(){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
        if($this->conn->connect_error){
            echo "Fail " . $this->conn->connect_error;
        }
    }
    // closing the connection

    public function __destruct(){
        $this->closeconnection();
    }
    protected function closeconnection(){
        if($this->conn != null){
            $this->conn->close();
            $this->conn = null;
        }
    }
}
?>

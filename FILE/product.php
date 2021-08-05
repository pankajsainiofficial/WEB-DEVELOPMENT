<?php
    class products
    {
        public $db = null;

        public function __construct(Dbcontroller $db){
            if(!isset($db->conn)) return null;
            $this->db = $db;
        }

        public function ProgetData($table = 'productmobile'){
            $result= $this->db->conn->query("SELECT * FROM {$table}");
            $resultarray = array();

            while($items= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $resultarray[]=$items;
            }
            return $resultarray;
        }
    }


?>
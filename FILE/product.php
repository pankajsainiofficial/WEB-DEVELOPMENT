<?php
    class products
    {
        public $db = null;
        public function __construct(Dbcontroller $db){
            if(!isset($db->conn)) return null;
            $this->db = $db;
        }
        public function ProgetData($runquery){
            $result= $this->db->conn->query($runquery);
            $resultarray = array();
            while($items= mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $resultarray[]=$items;
            }
            return $resultarray;
        }
        public function ProgetdetailsData($table='productmobile'){
            $result1= $this->db->conn->query("SELECT * FROM {$table}");
            $resultarray1 = array();
            while($items1= mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                $resultarray1[]=$items1;
            }
            return $resultarray1;
        }
    }
?>

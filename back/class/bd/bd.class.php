<?php
/*error_reporting(E_ALL);
ini_set('display_errors', 'On');
ini_set("display_errors", 1);*/
class bd{

    public $conn;

    public function __construct(){                
        
        //$this->conn = new mysqli("localhost","root","s4ndr0","seguplast");
        $this->conn = new mysqli("192.168.0.200","seguplast","51733Mm6!","seguplast");
        
        if(!$this->conn){
            return false;
        }

        return $this->conn;
    }

    public function ejecutarQuery($sql){
		$vec = array();
		if($resultado = $this->conn->query($sql)){        
			while($row = $resultado->fetch_assoc()){
				array_push($vec,$row);            
			}
    	}
		return $vec;
	}

    public function ejecutarNonQuery($sql){
        $resultado = $this->conn->query($sql);	        
        return $resultado; 
    }

}
?>

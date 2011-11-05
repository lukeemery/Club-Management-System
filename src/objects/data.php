<?php

class Data {
	private $server, $username, $password, $db, $conn, $queries;
	
	public function __construct() {
		$this->queries = 0;
		$this->server = 'localhost';
		$this->db = 'clubmanagement';
		$this->username = 'root';
		$this->password = '';
	}
	
	public function __toString() {
		return $queries;
	}
	
	/****************************
	****  DATA MANIPULATION  ****
	****************************/
	
	public function selectAddress($id) {
		return $this->selectRow("SELECT * FROM address WHERE address_id=$id LIMIT 1");
	}
	
	public function selectPhone($id) {
		return $this->selectRow("SELECT * FROM phone WHERE phone_id=$id LIMIT 1");
	}
	
	public function selectMember($id) {
		return $this->selectRow("SELECT * FROM member WHERE member_id=$id LIMIT 1");
	}
	
	/*************************
	****  BASE FUNCTIONS  ****
	*************************/
	
	private function connect() {
		$this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
	}
	
	private function close() {
		$this->conn->close();
	}
	
	private function selectTable($query)
    {
		$this->connect();
		
		$this->queries++;
		
        $resultSet = $this->conn->query($query);
        
        $data = false;
    
        if ($resultSet) {

            while ($row = $resultSet->fetch_object()) {
                $assocArray[] = $row;
            }
            
        }
        $resultSet->close();
		
		$this->close();
        
        return $data;
    }
	
	private function selectRow($query, $error = "Unable to return row.") {
		$this->connect();
		
		$this->queries++;
		
        $result = $this->conn->query($query);
        
        if($result) {
            $row = $result->fetch_object();
            
            $result->close();
        } else {
            echo $error;
        }
		
		$this->close();
		
        return $row;
    }
	
	private function execute($query) {
		$this->connect();
		
		$this->queries++;

    	$this->conn->query($query);
    	
		$result = $this->conn->query("SELECT LAST_INSERT_ID() AS id");
		
		if($result) $row = $result->fetch_object();
		else $row = null;
		
		$this->close();
		
		return $row;
    }
	
}
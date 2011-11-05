<?php

class Phone {
	private $area_code, $number;
	
	public function __construct($id) {
		$data = new Data;
		$p = $data->selectPhone($id);
		
		$this->area_code = $p->phone_area_code;
		$this->number = $p->phone_number;
	}
	
	public function __toString() {
		return "(".$this->area_code.") " . substr($this->number, -7, 3) . "-" . substr($this->number, -4);
	}
}

class Address {
	private $id, $city, $state, $zip, $firstline, $secondline;
	
	public function __construct($id) {
		$data = new Data;
		$a = $data->selectAddress($id);
		
		$this->id = $a->address_id;
		$this->city = $a->address_city;
		$this->state = $a->address_state;
		$this->zip = $a->address_zip;
		$this->firstline = $a->address_firstline;
		$this->secondline = $a->address_secondline;
	}
	
	public function __toString() {
		return "$this->city, $this->state\n$this->firstline\n$this->secondline\n$this->zip";
	}
}
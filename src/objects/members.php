<?php

class User {
	private $id, $firstname, $lastname, $email, $password, $address, $phone;
	
	public function __construct($id = null)  {
		$data = new Data;
		$m = $data->selectMember($id);
		
		$this->id = $m->member_id;
		$this->firstname = $m->member_firstname;
		$this->lastname = $m->member_lastname;
		$this->email = $m->member_email;
		$this->password = $m->member_password;
		$this->address = new Address($m->address_id);
		$this->phone = new Phone($m->phone_id);
	}
	
	public function __toString() {
		return "";
	}
	
	//public function blah();
}

class Student extends User {
	private $dorm, $room, $student_id;
}

class Advisor extends User {
}

class Membership {
	private $due_paid, $id, $member, $club;
}
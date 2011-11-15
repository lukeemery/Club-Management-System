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
	
	function CreateUser($firstname, $lastname, $email, $password, $address, $phone){
		//create a new club. $id will be dynamically 
		//created by the database
	}
	function GetFname($id){
		//return first name based on $id
	}
	function SetFname($id, $firstname){
		//set the $firstname associated with specified $id
	}
	function GetLname($id){
		//return last name based on $id
	}
	function SetLname($id, $lastname){
		//set the last name assosiated with specified $id
	}
	function GetEmail($id){
		//return email address based on $id
	}
	function SetEmail($id, $email){
		//set the email address associated with a specified $id
	}
	function ResetPassword($id){
		//reset password for specified $id
		//email the user a random string
	}
	function GetAddess($id){
		//return address based on $id
	}
	function SetAddress($id, $address){
		//set address associated with specified $id
	}
	function GetPhone($id){
		//return phone number for specified $id
	}
	function Phone($id, $phone){
		//set the phone number associated with specified $id
	}
	function GetRank($id){
		//return a users rank based on the $id
	}
	function SetRank($id, $rank){
		//modify a users rank based on $id
	}
	function GetDuePaid($id){
		//return the DuePaid flag based on the $id
	}
	function SetDuePaid($id, $duepaid){
		//set the DuePaid ($duepaid) flag (0=false, 1=true)
	}
}

class Student extends User {
	private $dorm, $room, $student_id;
}

class Advisor extends User {
}

class Membership {
	private $due_paid, $id, $member, $club;
}




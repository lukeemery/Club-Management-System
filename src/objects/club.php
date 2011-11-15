<?php

class Club {
	private $id, $name, $members, $due_amount, $about;
	
	function CreateClub($name, $members, $due_amount, $about){
		//create a new club. $id will be dynamically 
		//created by the database
	}
	function SetClubInfo ($id, $name, $about, $due_amount){
		//set information about the club based on $id
		//any field may be ommitted except $id
	}
	function GetAbout ($id){
		//return the about information for a club based on $id
	}
	
	function GetNumMembers($id){
		//return the number of members based on the club $id
	}
	function GetStartDate($id){
		//return the DateTime that a club was created based on $id
	}
}

class Event {
	private $club, $id, $name, $description, $date;
}

class Registration {
	private $member, $event;
}
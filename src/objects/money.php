<?php

class Budget {
	private $id, $club, $date;
}


class Transaction {
	private $id, $budget, $amount, $date, $description;
	
	function GetTransDate($id){
		//return a transaction date based on $id
	}
	function GetCredit($date){
	//return credit transactions for a specified date
	}
	function SetCredit($date){
	//set credit transaction for a specified date
	}
	function GetDebit($date){
	//return debit transactions for a specified date
	}
	function SetDebit($date){
	//set debit transaction for a specified date
	}
}

class Due { 
	private $id, $amount, $club, $member;
}
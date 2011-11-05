<?php

class Budget {
	private $id, $club, $date;
}

class Transaction {
	private $id, $budget, $amount, $date, $description;
}

class Due { 
	private $id, $amount, $club, $member;
}
<?php

class Club {
	private $id, $name, $members, $due_amount;
}

class Event {
	private $club, $id, $name, $description, $date;
}

class Registration {
	private $member, $event;
}
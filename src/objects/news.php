<?php

class News {
	private $id, $body, $title, $author, $date ;
	
	public function __construct() {
	
	}
	function CreatePost($body, $title, $author, $date){
		//create a new post
	}
	function GetPostBody($id) {
		//Return the post body for a specified $id
	}
	function SetPostBody($id, $body){
		//set post body for a specified $id
	}
	function GetPostTitle($id){
		//retrn the post title for a specified $id
	}
	function SetPostTitle($id, $title){
		//set a post title for a specified $id
	}
	function GetPostDate($id){
		//return a post DateTime for a specified $id
		
	}
	function SetPostDate($id, $date){
		//set a post date for a specified $id
	}
	function GetPostAuthor($id){
		//return a post author for a specified $id
		
	}
	function SetPostAuthor($id, $author){
		//set a post author for a specified $id
	}
	function GetNumPosts(){
		//return the total num_rows in the post table
	}
}
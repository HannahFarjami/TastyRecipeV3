<?php

namespace TastyRecipe\Model;

use TastyRecipe\Integration\DBHandler;

class Comments {

	private $DBHandler;

	public function __construct(){
		$this->DBHandler = new DBHandler();
	}

	public function addComment($message,$recipe,$user){
		//$DBHandler = new DBHandler();
		$this->DBHandler->addComment($message,$recipe,$user);
	}

	public function deleteComment($id,$username){
		//$DBHandler = new DBHandler();
		$this->DBHandler->deleteComment($id,$username);
	}

	public function showComments($url){
		//$DBHandler = new DBHandler();
		return $this->DBHandler->getComments($url);
	}
}

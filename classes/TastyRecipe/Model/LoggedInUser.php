<?php

namespace TastyRecipe\Model;

class LoggedInUser{

	private $username;

	public function __construct($username){
		$this->username = $username;
	}

	public function getUsername(){
		return $this->username;
	}
}
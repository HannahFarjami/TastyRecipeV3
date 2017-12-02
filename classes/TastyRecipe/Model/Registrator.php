<?php

namespace TastyRecipe\Model;

use TastyRecipe\Integration\DBHandler;

class Registrator {
	
	private $username;
	private $hashedPassword;
	private $DBHandler;


	public function __construct($username, $password){
		$this->username = $username;
		$this->hashedPassword = password_hash($password, PASSWORD_DEFAULT);
		$this->DBHandler = new DBHandler();
	}

	public function registrate(){
		$bol = $this->checkUsername();
		if($bol){
			$this->DBHandler->register($this->username, $this->hashedPassword);
			return $bol;
		}
		else
		{
		return $bol;
		}
	}

	private function checkUsername(){
		$exists = $this->DBHandler->checkUsername($this->username);
		if($exists > 0){
			return false;
		}
		else
		{
			return true;
		}
	}
}
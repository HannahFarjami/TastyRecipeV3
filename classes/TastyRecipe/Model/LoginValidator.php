<?php

namespace TastyRecipe\Model;

use TastyRecipe\Integration\DBHandler;

class LoginValidator {
	
	private $username;
	private $password;
	private $DBHandler;


	public function __construct($username, $password){
		$this->username = $username;
		$this->password = $password;
		$this->DBHandler = new DBHandler();
	}

	public function checkLogin(){
			
			$result = $this->DBHandler->login($this->username, $this->password);
			$exists = mysqli_num_rows($result);
			if($exists > 0){
				while ($row = mysqli_fetch_assoc($result)) {
					if(password_verify( $this->password, $row['password'])){
						return true;
					}
				}
			}
			return false;


	}
}
<?php

namespace TastyRecipe\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Controller\Controller;

/**
* 
*/
class Register extends AbstractRequestHandler
{
	private $username;
	private $password;

	public function setUsername($username){
		$this->username = htmlentities($username,ENT_QUOTES);
	}	
	public function setPassword($password){
		$this->password = $password;
	}	

	protected function doExecute()
	{
		$contr = $this->session->get('Contr');
		$this->addVariable('username',$contr->getLoggedInUser());
		$bol = $contr->registrate($this->username, $this->password);
		if($bol) {
			return 'login';
		}
		else {
			$this->addVariable('Error','<script>alert("Username taken!");</script>');
			return 'register';
		}
	}

}

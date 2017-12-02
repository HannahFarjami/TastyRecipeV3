<?php

namespace TastyRecipe\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Controller\Controller;

/**
* 
*/
class Login extends AbstractRequestHandler
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
		$bol = $contr->login($this->username, $this->password);
		if($bol) {
			$contr->setLoggedInUser($this->username);
			$this->session->set('Contr', $contr);
			$this->session->set('user',$this->username);
			$this->addVariable('username',$this->session->get('user'));
			return "index";
		}
		else {
			$this->addVariable('username',$contr->getLoggedInUser());
			$this->addVariable('Error','<script>alert("Wrong Username or Password!");</script>');
			return "login";
		}
	}

}

<?php

namespace TastyRecipe\View;

use Id1354fw\View\AbstractRequestHandler;

/**
* 
*/
class LoginPage extends AbstractRequestHandler
{
	
	protected function doExecute()
	{
		$this->addVariable('username',$this->session->get('user'));
		return "login";
	}
}
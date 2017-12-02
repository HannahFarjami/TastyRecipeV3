<?php

namespace TastyRecipe\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Controller\Controller;
/**
* 
*/
class DefaultRequestHandler extends AbstractRequestHandler
{
	
	protected function doExecute()
	{
		$this->session->restart();
		$this->session->set('Contr', new Controller());
		$this->session->set('user', "Login");
		$this->addVariable('username','Login');
		\header ('Location: /TastyRecipe/View/FrontPage');
	}
}

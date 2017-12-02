<?php

namespace TastyRecipe\View;

use Id1354fw\View\AbstractRequestHandler;

/**
* 
*/
class Pancake extends AbstractRequestHandler{
	

	protected function doExecute()
	{
		
		$contr = $this->session->get('Contr');

		$result = $contr->viewComments("/TastyRecipe/View/Pancake");
		$this->addVariable('comments',$result);
		$this->addVariable('username',$contr->getLoggedInUser());
		return "pancakes";
	}
}
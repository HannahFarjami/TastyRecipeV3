<?php

namespace TastyRecipe\View;

use Id1354fw\View\AbstractRequestHandler;

/**
* 
*/
class Calendar extends AbstractRequestHandler
{
	
	protected function doExecute()
	{
		$this->addVariable('username',$this->session->get('user'));
		return "calender";
	}
}
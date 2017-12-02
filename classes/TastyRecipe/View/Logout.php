<?php

namespace TastyRecipe\View;

use Id1354fw\View\AbstractRequestHandler;


class Logout extends AbstractRequestHandler
{

	protected function doExecute()
	{
		$this->session->invalidate();
		\header("Location: TastyRecipe\View\DefaultRequestHandler");
	}
} 

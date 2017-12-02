<?php

namespace TastyRecipe\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Controller\Controller;

class DeleteComment extends AbstractRequestHandler {

	private $id;
	private $url;


	public function setUrl($url){
		$this->url = $url;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function doExecute(){
		$contr = $this->session->get('Contr');
		$contr->deleteComment($this->id);
		$this->addVariable('username',$contr->getLoggedInUser());
		\header("location: ".$this->url);

	}
}
<?php

namespace TastyRecipe\View;

use Id1354fw\View\AbstractRequestHandler;
use TastyRecipe\Controller\Controller;

class SubmitComment extends AbstractRequestHandler {


	private $message;
	private $url;


	public function setUrl($url){
		$this->url = $url;
	}

	public function setMessage($message){

		$this->message = htmlentities($message,ENT_QUOTES);
	}

	public function doExecute(){
		$contr = $this->session->get('Contr');
		$user = $contr->getLoggedInUser();
		$contr->addComment($this->message,$this->url,$user);
		\header("location: ".$this->url);

	}
}
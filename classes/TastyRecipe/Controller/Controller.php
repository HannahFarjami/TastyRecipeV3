<?php



namespace TastyRecipe\Controller;

use TastyRecipe\Model\LoginValidator;
use TastyRecipe\Model\Registrator;
use TastyRecipe\Model\LoggedInUser;
use TastyRecipe\Model\Comments;

class Controller{

	private $loggedInUser;

	public function __construct() {
	}

	public function login($username, $password){
		$loginVal = new LoginValidator($username, $password);
		return $loginVal->checkLogin();
	}

	public function registrate($username, $password){
		$registrator = new Registrator($username, $password);
		return $registrator->registrate();
	}

	public function setLoggedInUser($username){
		$this->loggedInUser = new LoggedInUser($username);
	}

	public function getLoggedInUser(){
		if(!isset($this->loggedInUser)){
			return "Login";
		}
		return $this->loggedInUser->getUsername();
	}

	public function addComment($message,$recipe,$user){
		$comment = new Comments();
		$comment->addComment($message,$recipe,$user);
	}

	public function viewComments($url){
		$comment = new Comments();
		return $comment->showComments($url);
	}

	public function deleteComment($id){
		$comment = new Comments();
		$comment->deleteComment($id,$this->loggedInUser->getUsername());
	}
}
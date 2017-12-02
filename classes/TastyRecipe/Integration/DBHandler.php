<?php

namespace TastyRecipe\Integration;



class DBHandler {

	private $con;

	public function __construct(){

		include("../sqlauth.php");
		$this->con = mysqli_connect("localhost",$sqlusername, $sqlpassword) or die(mysqli_error());
		mysqli_select_db($this->con,"first_db") or die("Cannot connect to database");
	}

	public function login($username,$password){
		$selectStmt = $this->con->prepare("SELECT * from users WHERE username = ?");
		$selectStmt->bind_param('s',$username);
		$selectStmt->execute();
		$result = $selectStmt->get_result();
		$selectStmt->close();
		$this->con->close();
		return $result;
	}

	public function checkUsername($username){
		$selectStmt = $this->con->prepare("SELECT * from users WHERE username = ?");
		$selectStmt->bind_param('s',$username);
		$selectStmt->execute();
		$result = $selectStmt->get_result();
		$selectStmt->close();
		return $result->num_rows;

	}
	public function register($username,$hashedPassword){

		$selectStmt = $this->con->prepare("INSERT INTO users (username, password ) VALUES ( ? , ? )");
		$selectStmt->bind_param("ss", $username, $hashedPassword);
		$selectStmt->execute();
		$selectStmt->close();
		$this->con->close();
	}

	public function addComment($message,$recipe,$username){
		$selectStmt = $this->con->prepare("INSERT INTO comments ( comment, username, recipe ) VALUES ( ? , ? , ? )");
		$selectStmt->bind_param("sss", $message, $username , $recipe);
		$selectStmt->execute();
		$selectStmt->close();
		$this->con->close();
		
	}

	public function getComments($url){
		$selectStmt = $this->con->prepare("SELECT * from comments WHERE recipe = ?");
		$selectStmt->bind_param('s',$url);
		$selectStmt->execute();
		$result = $selectStmt->get_result();
		$selectStmt->close();
		return $result;
	}

	public function deleteComment($id,$username){
		$selectStmt = $this->con->prepare("DELETE from comments WHERE id = ? AND username = ?");
		$selectStmt->bind_param('is',$id, $username);
		$selectStmt->execute();
		$selectStmt->close();
	}
}
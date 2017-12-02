<!-- This is the header and navigation bar(menu) -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
		  <link rel="StyleSheet"
  type="text/css"
  href="/../resources/css/menu.css"/>
</head>

<?php 
	if($username!="Login") {
		$logout = "<a href='Logout'>Logout</a>";
		$user = "<a href='#' id='wel'>Welcome" . " ". $username ."!</a>";
		$regi="";
	}
	else {
		$user = "<a href='LoginPage'>Login</a>";
		$regi = "<a href='RegisterPage'>Sign Up</a>";
		$logout = "";
	}
	
?>

<body>
	<div class="topheader">
		<a href="FrontPage">
			<img src="/../resources/images/fork.png" alt="fork">
			<h1>Tasty Recipes</h1>
		</a>
	</div>
	<div  class="navigation_bar">
		<ul>
			<li><a class="active" href="FrontPage">Home</a></li>
			<li><a href="#">Recipes</a>
				<ul>
					<li></li>
					<li><a href="Meatball">Meatballs</a></li>
					<li><a href="Pancake">Pancakes</a></li>
				</ul>
				<li><a href="Calendar">Calendar</a></li>
				<li id="logout"><?php echo $logout ?></li>
				<li id="login"><?php echo $regi ?></li>
				<li id="login"><?php echo $user?></li>
			</ul>
		</div>
	</body>
	</html>
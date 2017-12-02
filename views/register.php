
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="resources/images/fork.png"/>
	<title>Tasty Recipes | Register</title>
	<link rel="StyleSheet"
	type="text/css"
	href="/../resources/css/login.css"/>
	<link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>
<body>
	<header>
		<?php include "resources/fragments/header.php" ?>
	</header>
	<?php echo $Error ?>
	<div class="row">
		<form action="Register" method="POST">
				<h1 class="regi">Sign Up Here!</h1>
				<div class="container">
					<input type="text" placeholder="Enter Username" name="username" required>
					<input type="password" placeholder="Enter Password" name="password" required>
					<button type="submit">Register</button>
				</div>
		</form>
	</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	if (isset($_GET['error'])) {
		echo $_GET['error'];
	}
	 ?>
	<form method="post" action = "process_signup.php">
		<h1>Creat new account</h1>
		Name
		<input type="text" name="name"> <br>
		Email
		<input type="email" name="email"> <br>
		Password
		<input type="password" name="pass"> <br>
		Phone number
		<input type="text" name="phone"> <br>
		Address
		<input type="text" name="address"> <br>
		<button>Complete</button>
	</form>
</body>
</html>
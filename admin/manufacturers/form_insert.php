<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php 
	require "../menu.php";
	 ?>
	<form action="process_form.php" method="post">
		Ten
		<input type="text" name="name"> <br>
		Dia chi
		<input type="text" name="address"> <br>
		So dien thoai
		<input type="number" name="phone"> <br>
		Anh
		<input type="text" name="picture"> <br>
		<button>Them</button>
	</form>
</body>
</html>
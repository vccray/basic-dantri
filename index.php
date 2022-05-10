<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		#total{
			width: 100%;
			height: 700px;
			background: black;
		}
		#header{
			width: 100%;
			height: 20%;
			background: green;
		}
		#body{
			width: 100%;
			height: 70%;
			background: red;
		}
		#footer{
			width: 100%;
			height: 10%;
			background: yellow;
		}
	</style>
</head>
<body>
	<div id="total">
		<?php require 'header.php' ?>
		<?php require 'body.php' ?>
		<?php require 'footer.php' ?>
	</div>
</body>
</html>
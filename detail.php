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

<?php 
	$id = $_GET['id'];
	require 'admin/connect.php';
	$sql = "select * from products
	where id = '$id'";
	$result = mysqli_query($connect,$sql);
	$each = mysqli_fetch_array($result);
 ?>
<?php require 'header.php' ?>

<div id="body" align="center">
			<h1>
				<?php echo $each['name'] ?>
			</h1>
			<img src="admin/products/photo/<?php echo $each['picture'] ?>" height=100px> 
			<p><?php echo $each['price'] ?> millions</p>
			<p><?php echo $each['description'] ?></p>
</div>

<?php require 'footer.php' ?>
<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
	}
	.each_product{
		width: 33%;
		border: 1px solid black;
		height: 243px;
		float: left;
	}
</style>

<?php 
	require 'admin/connect.php';
	$sql = "select * from products";
	$result = mysqli_query($connect,$sql);
 ?>

<div id="body">
	<?php foreach ($result as $each): ?>
		<div class="each_product">
			<h3>
				<?php echo $each['name'] ?>
			</h3>
			<img src="admin/products/photo/<?php echo $each['picture'] ?>" height=100px>
			<p><?php echo $each['price'] ?> millions</p>
			<a href="detail.php?id=<?php echo $each['id'] ?>">More Detail</a>
		</div>
	<?php endforeach ?>
</div>
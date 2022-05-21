
<?php 

session_start();
//unset($_SESSION['cart']);

$id=$_GET['id'];
$type=$_GET['type'];
	if ($type === 'sub') {
			if ($_SESSION['cart'][$id]['quantity'] > 1) {
				$_SESSION['cart'][$id]['quantity']--;
			} else {
				unset($_SESSION['cart'][$id]); }
		} else {
			$_SESSION['cart'][$id]['quantity']++;
		}

//print_r($_SESSION['cart']);

//echo json_encode($_SESSION['cart']);
header('location:cart.php');
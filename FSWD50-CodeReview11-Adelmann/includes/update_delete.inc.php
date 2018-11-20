<?php 
	include_once "dbh.inc.php";

	// initialize variables
	$name = "";
	$image = "";
	$tel = "";
	$type = "";
	$description = "";
	$webadress = "";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$name = $_POST['name'];
		$image = $_POST['image'];
		$tel = $_POST['tel'];
		$type = $_POST['type'];
		$description = $_POST['description'];
		$webadress = $_POST['webadress'];

		mysqli_query($conn, "INSERT INTO restaurants (restaurant_name, restaurant_image,restaurant_telephone_num,restaurant_type,restaurant_description,restaurant_webadress) VALUES ('$name', '$image','$tel','$type','$description','$webadress')"); 
		$_SESSION['message'] = "Address saved"; 
		header('location: ../update.php');
	}

	if (isset($_POST['update'])) {
	$id = $_POST['id'];
	$name = $_POST['name'];
	$image = $_POST['image'];
	$tel = $_POST['tel'];
	$type = $_POST['type'];
	$description = $_POST['description'];
	$webadress = $_POST['webadress'];

	mysqli_query($conn, "UPDATE restaurants SET restaurant_name='$name', restaurant_image='$image' , restaurant_telephone_num='$tel',restaurant_type='$type',restaurant_description ='$description',restaurant_webadress='$webadress'  WHERE restaurant_id=$id");
	$_SESSION['message'] = "Address updated!"; 
	header('location: ../update.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM restaurants WHERE restaurant_id=$id");
	$_SESSION['message'] = "Address deleted!"; 
	header('location: update.php');
}
?>
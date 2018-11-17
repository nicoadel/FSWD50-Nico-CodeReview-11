<?php 
	include_once "dbh.inc.php";
	
	// initialize variables
	$name = "";
	$email = "";
	$admin = "";

if (isset($_POST['update'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$admin = $_POST['admin'];
	$id = $_POST['id'];
	mysqli_query($conn, "UPDATE users SET uidUsers='$name', emailUsers='$email' , admin='$admin' WHERE idUsers='$id'");
	$_SESSION['message'] = "User updated!"; 
	header('location: ../adminpanel.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM users WHERE idUsers=$id");
	$_SESSION['message'] = "User deleted!"; 
	header('location: adminpanel.php');
}
?>
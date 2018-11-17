<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="content">
		<?php 
	include_once "navbar.php";
	include_once "includes/dbh.inc.php";
	include_once "includes/update_users.inc.php";
	include_once "includes/display_message.inc.php";
	?>
	<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$record = mysqli_query($conn, "SELECT * FROM users WHERE idUsers=$id");
		if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['uidUsers'];
			$email = $n['emailUsers'];
			$admin = $n['admin'];
		}
	}
?>
	<?php $results = mysqli_query($conn, "SELECT * FROM users"); ?>
	<div class="card card_adminpanel">
		<div class="card-body">
			
		<table class="table bordered">
	<thead>
		<tr>
			<th>Username</th>
			<th>E-Mail</th>
			<th>Admin (1 = yes // 0 = no)</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['uidUsers']; ?></td>
			<td><?php echo $row['emailUsers']; ?></td>
			<td><?php echo $row['admin']; ?></td>
			<?php if (isset($_SESSION['userId']))
			{
			echo '<td>
				<a href="adminpanel.php?edit='. $row['idUsers']. '" class="btn btn-info" >Edit</a>
			</td>
			<td>
				<a href="adminpanel.php?del='.$row['idUsers'].'" class="btn btn-danger">Delete</a>
			</td>';
			}
			?>
			</tr>
	<?php } ?>
</table>


		<div class="inputform">
			<form method="post" action="includes/update_users.inc.php" >
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="input-group form-group">
					<label class="col">Username: </label>
					<input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">E-Mail: </label>
					<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">Admin: </label>
					<input class="form-control" type="text" name="admin" value="<?php echo $admin; ?>">
				</div>
				<button class="btn btn-center" type="submit" name="update"  >update</button>
			</form>
		</div>
<?php
	if (isset($_SESSION['message']))
	{
	display_message($_SESSION['message']);
	}
	 ?>
	</div>
	</div>
	</div>
	<?php require 'footer.php' ?>
</body>
</html>
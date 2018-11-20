<!DOCTYPE HTML>
<html>
<head>
	<title>EDIT / DELETE</title>
</head>
<body>
	<div class="content">
		<?php 
	include_once "includes/update_delete.inc.php";	
	include_once "navbar.php";
	include_once "includes/dbh.inc.php";
	?>
	<?php 
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($conn, "SELECT * FROM restaurants WHERE restaurant_id=$id");

		if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['restaurant_name'];
			$image = $n['restaurant_image'];
			$tel = $n['restaurant_telephone_num'];
			$type = $n['restaurant_type'];
			$description = $n['restaurant_description'];
			$address = $n['restaurant_webadress'];
		}
	}
?>
	<?php $results = mysqli_query($conn, "SELECT * FROM restaurants"); ?>
<div class="card card_adminpanel">
	<div class="card-body">
		<table class="table bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Image</th>
			<th>Tel</th>
			<th>Type</th>
			<th>Description</th>
			<th>Address</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr class="table_update">
			<td><?php echo $row['restaurant_name']; ?></td>
			<td><?php echo $row['restaurant_image']; ?></td>
			<td><?php echo $row['restaurant_telephone_num']; ?></td>
			<td><?php echo $row['restaurant_type']; ?></td>
			<td><?php echo $row['restaurant_description']; ?></td>
			<td><?php echo $row['restaurant_webadress']; ?></td>
			<?php if (isset($_SESSION['userId']))
			{
			echo '<td>
				<a href="update.php?edit='. $row['restaurant_id']. '" class="btn btn-info" >Edit</a>
			</td>
			<td>
				<a href="update.php?del='.$row['restaurant_id'].'" class="btn btn-danger">Delete</a>
			</td>';
			}
			?>
			</tr>
	<?php } ?>
</table>


<div class="inputform">
	<form method="post" action="includes/update_delete.inc.php" >
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group form-group">
			<label class="col">Name: </label>
			<input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
		</div>
		<div class="input-group form-group">
			<label class="col">Image: </label>
			<input class="form-control" type="text" name="image" value="<?php echo $image; ?>">
		</div>
		<div class="input-group form-group">
			<label class="col">Tel: </label>
			<input class="form-control" type="text" name="tel" value="<?php echo $tel; ?>">
		</div>
		<div class="input-group form-group">
			<label class="col">Type: </label>
			<input class="form-control" type="text" name="type" value="<?php echo $type; ?>">
		</div>
		<div class="input-group form-group">
			<label class="col">Description: </label>
			<input class="form-control" type="text" name="description" value="<?php echo $description; ?>">
		</div>
		<div class="input-group form-group">
			<label class="col">Adress: </label>
			<input class="form-control" type="text" name="webadress" value="<?php echo $webadress; ?>">
		</div>
		<div class="input-group form-group inputform">
			<?php if ($update == true): ?>
	<button class="btn" type="submit" name="update" style="background: #556B2F;" >update</button>
<?php else: ?>
	<button class="btn" type="submit" name="save" >Save</button>
<?php endif ?>
		</div>
	</form>
</div>
	</div>
	
	</div>
	
</div>
<?php require "footer.php"; ?>
<script src="javascript/search.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>
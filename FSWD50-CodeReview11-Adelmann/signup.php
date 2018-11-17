<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<?php include_once "navbar.php"; ?>
<div class="content">
	<main class="login_main upload_form card">
	<div class="wrapper-main card-body">
		<section class="section-default">
			<h3 class="card-title">Signup</h3>
			<br>
			<form action="includes/signup.inc.php" method="post">
				<input class="form-control" type="text" name="uid" placeholder="Username">
				<br>
				<input class="form-control" type="text" name="mail" placeholder="E-Mail">
				<br>
				<input class="form-control" type="password" name="pwd" placeholder="Password">
				<br>
				<input class="form-control" type="password" name="pwd-repeat" placeholder="Repeat Password">
				<br>
				<button class="btn btn-info" type="submit" name="signup-submit">Signup</button>
			</form>
		</section>
	</div>
	</main>

</div>


<?php require "footer.php"; ?>
</body>
</html>
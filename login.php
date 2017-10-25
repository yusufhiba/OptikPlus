<?php 
include('server.php');
require_once "function.php";

if(isset($_SESSION['username'])){
	if(cek_status($_SESSION['username'])=="Admin"){
		header('location: indexAdmin.php');
	}
	else if(cek_status($_SESSION['username'])=="Cashier"){
		header('location: indexCashier.php');
	}
} else{
?>

<!DOCTYPE html>
<html>
<head>
	<title>OPTIK PLUS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
	</form>


</body>
</html>

<?php
}
?>
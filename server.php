<?php 
	session_start();

	// variable declaration
	$name    = "";
	$username = "";
	$status = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'login');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$status= $_POST["status"];

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($name)) { array_push($errors, "Name is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (name, username, password, status) 
					  VALUES('$name', '$username', '$password', '$status')";
			mysqli_query($db, $query);

			//$_SESSION['username'] = $username;
			//$_SESSION['success'] = "New Account has been Created";
			?> <script type="text/javascript">alert("New Account has been Successfully Created");</script>
			<?php
			header('location: index.php');

		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
			if(!$results) {
				die("Query error: " .mysql_errno($db)." - ".mysql_error());
			}

			$data=mysqli_fetch_assoc($results);

			//if($data=mysqli_fetch_assoc($results)) {
				if($username==$data['username'] && $password==$data['password']) {
					$_SESSION['username']=$username;
					if($data['status']=="Admin") {
						header("location: indexAdmin.php");
					}
					else {
						header("location: indexCashier.php");
					}
				}
			//}
			if (mysqli_num_rows($results) == 1) {
				/*$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');*/
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}
?>
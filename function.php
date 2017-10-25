<?php

$db= mysqli_connect('localhost', 'root', '', 'login');

function cek_status($username){

	$query="SELECT status FROM users WHERE username='$username'";
	global $db;
	if($results=mysqli_query($db, $query)){
		while($data=mysqli_fetch_assoc($results)) {
			$status=$data['status'];
		}

		return $status;
	}
}

?>
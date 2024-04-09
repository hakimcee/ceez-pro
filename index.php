<!DOCTYPE html>
<html>
<head>
	<title>website</title>
	<link rel="stylesheet">
</head>
</head>
<body>

<form action="" method="POST">
	<CENTER>
<h2>LOGIN FORM</h2>
<label>Username</label>
<input type="text" name="username" placeholder="User Name"><br><br>
<label>Password</label>
<input type="password" name="password" placeholder="Password"><br>
<button type="submit" name="save">Submit</button>
</form>
<a href="account.php">SIGN UP</a>
</CENTER>
<?php

include "connection.php";
if (isset($_POST['save'])) {
	$User_Name= $_POST['username'];
	$Password= $_POST['password'];

	$select= "SELECT * FROM employee WHERE username='$User_Name' AND password='$Password'"; 
	$query= mysqli_query($con,$select);

	if ($rows= mysqli_fetch_array($query)) {
		header("location:welcome.php");
	}
	else{
		echo "<a href='index.php'>  Incorrect Username or Password</a>";
    }

	}
	

?>
 
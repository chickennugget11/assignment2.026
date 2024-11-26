<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Web Application">
	<meta name="keywords" content="Assignment 1">
	<meta name="author" content="Group 4">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Font styles-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Protest+Strike&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
	<!--Link the CSS file-->
	<link href="styles/index.css" rel="stylesheet">
	<!--Title-->
	<title>Group 4's Company</title>
</head>

<body>
	<?php
	require_once("settings.php");
	if ($_SERVER["REQUEST_METHOD"] === "POST") {
		$fullname = isset($_POST['fullname']) ? trim($_POST['fullname']) : "";
		$phone = isset($_POST['phone']) ? trim($_POST['phone']) : "";
		$username = isset($_POST['username']) ? trim($_POST['username']) : "";
		$password = isset($_POST['password']) ? trim($_POST['password']) : "";
		$retype = isset($_POST['retype']) ? trim($_POST['retype']) : "";

		// if pass dont match w the retype tho
		if ($password !== $retype) {
			echo "<p>Error: Passwords do not match.</p>";
		} else if (!empty($fullname) && !empty($phone) && !empty($username) && !empty($password)) {



			$query = "INSERT INTO hr_users (fullname, phone, username, password) VALUES ('$fullname', '$phone', '$username', '$password')";
			$result = mysqli_query($conn, $query);

			if ($result) {
				echo "<p>Registration successful. You can now <a href='login.php'>log in</a>.</p>";
			} else {
				echo "<p>Error: " . mysqli_error($conn) . "</p>";
			}
		} else {
			echo "<p>Please fill in all fields.</p>";
		}
	}
	?>
	<?php
	include("header.inc");
	?>
	<h1>Register</h1>
	<!--Register form-->
	<form action="register.php" method="post" class="register">
		<label for="fullname">Full Name:</label>
		<input type="text" id="fullname" name="fullname" required placeholder="Your full name">
		<br>

		<label for="phone">Phone Number:</label>
		<input type="text" id="phone" name="phone" pattern="\d{8,12}" required placeholder="123456789">
		<br>

		<label for="username">Username:</label>
		<input type="text" id="username" name="username" required placeholder="Choose a username">
		<br>

		<label for="password">Password:</label>
		<input type="password" id="password" name="password" required placeholder="Choose a password">
		<br>

		<label for="retype">Retype Password:</label>
		<input type="password" id="retype" name="retype" required placeholder="Retype your password">
		<br>

		<button type="submit">Register</button>
	</form>

</body>

</html>
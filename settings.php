<?php
// mercury
$host = "feenix-mariadb.swin.edu.au";
$user = "s104773652";
$pwd = "hth233kiet";
$sql_db = "s104773652_db";



// test
$test_local = true;

if ($test_local) {
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$sql_db = "test";
}


$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
	echo "<p>Connection Failed, please return!</p>";
} else {
	$tableQuery = "SHOW TABLES LIKE 'accounts'";
	$tablecheck = mysqli_query($conn, $tableQuery);

	if (mysqli_num_rows($tablecheck) == 0) {
		// Table does not exist, create it
		$createTableQuery = "CREATE TABLE `accounts` (
                `id` INT(255) AUTO_INCREMENT PRIMARY KEY,
                `username` VARCHAR(255) NOT NULL,
                `password` VARCHAR(255) NOT NULL
            )";
		mysqli_query($conn, $createTableQuery);

		// Insert sample data
		$insertQuery = "INSERT INTO `accounts` (`id`, `username`, `password`) VALUES ('0', 'admin', '$hashedPassword')";
		mysqli_query($conn, $insertQuery);
	}
}

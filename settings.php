<?php
// mercury
$host = "feenix-mariadb.swin.edu.au";
$user = "s104189712"; // your user name
$pwd = "301104"; // your password (date of birth ddmmyy unless changed)
$sql_db = "s104189712_db"; // your database


$table_name = "`eoi`";

// test
$test_local = true;

if ($test_local) {
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$sql_db = "test";
}

$conn = @mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
	echo "<p>Connection Failed, please return!</p>";
} else {
	// Create table 
	$createTableQuery = "CREATE TABLE IF NOT EXISTS `eoi` ( 
		`eoinumber` int(11) NOT NULL AUTO_INCREMENT,
		`job_ref` char(5) NOT NULL,
		`fname` varchar(20) NOT NULL,
		`lname` varchar(20) NOT NULL,
		`street` varchar(40) NOT NULL,
		`suburbtown` varchar(40) NOT NULL,
		`state` enum('VIC','NSW','QLD','NT','WA','SA','TAS','ACT') NOT NULL,
		`post` char(4) NOT NULL,
		`email` varchar(255) NOT NULL,
		`num` varchar(12) NOT NULL,
		`html` tinyint(1) NOT NULL,
		`css` tinyint(1) NOT NULL,
		`js` tinyint(1) NOT NULL,
		`php` tinyint(1) NOT NULL,
		`mysql` tinyint(1) NOT NULL,
		`other_skills` mediumtext NOT NULL,
		`status` enum('New', 'Current', 'Final') NOT NULL,
		PRIMARY KEY (eoinumber)
	) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;";
	mysqli_query($conn, $createTableQuery);
	// fix table
	mysqli_query(
		$conn,
		"ALTER TABLE `eoi` AUTO_INCREMENT = 0;"
	);
}

if (!$conn) {
	echo "<p>Connection Failed, please return!</p>";
} else {
	$admin = "admin";
	$admin_password = "admin101";


	$createTableQuery = "CREATE TABLE IF NOT EXISTS `hr_user` (
			`username` VARCHAR(255) NOT NULL,
			`password` VARCHAR(255) NOT NULL
		)";
	mysqli_query($conn, $createTableQuery);

	// check empty table
	$results = mysqli_query($conn, "SELECT * FROM `hr_user`");
	// Insert sample data
	if (mysqli_num_rows($results) == 0) {
		$insertQuery = "INSERT INTO `hr_user` (`username`, `password`) VALUES ('$admin', '$admin_password')";
		mysqli_query($conn, $insertQuery);
	}

	// $insertQuery is not defined(?) idk tbh pls look into this lol
}

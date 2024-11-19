<?php
// mercury
$host = "feenix-mariadb.swin.edu.au";
$user = "s104773652";
$pwd = "hth233kiet";
$sql_db = "s104773652_db";
$table_name = "`eoi`";

// test
$test_local = true;

if ($test_local) {
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$sql_db = "test";
	$table_name = "`eoi`";
}

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
	echo "<p>Connection Failed, please return!</p>";
} else {
	// Create table 
	$createTableQuery = "CREATE TABLE IF NOT EXISTS `eoi`  (
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
}

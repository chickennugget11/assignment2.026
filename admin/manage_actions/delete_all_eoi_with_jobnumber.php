<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EOI Delete</title>
</head>

<body>
	<?php
	require_once("./manage_functions.php");
	// $POST the goat
	if (isset($_POST["job_delete"])) {
		$job_delete = trim_string($_POST["job_delete"]);
		// delete query
		mysqli_query(
			$conn,
			"DELETE FROM `eoi` WHERE `job_ref` = \"$job_delete\";"
		);
		// fix eoi number ordering
		mysqli_query(
			$conn,
			"ALTER TABLE `eoi` AUTO_INCREMENT = 0;"
		);
		echo "<p>All EOIs with number " . strtoupper($job_delete) . " has been deleted.</p>";
	}


	?>
	<?php
	include("./post_query.inc");
	?>


</html>
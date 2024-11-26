<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EOI Name Search</title>
</head>

<body>
	<?php

	require_once("./manage_functions.php");

	$job_fname = trim_string($_POST["job_fname"]);
	$job_lname = trim_string($_POST["job_lname"]);

	echo "<p>Table of all EOIs with names as requested:</p>";
	$query = "SELECT * FROM `eoi` 
	WHERE `fname` LIKE \"$job_fname%\" 
	AND `lname` LIKE \"$job_lname%\"
	";
	//  echo "<p>$query</p>";
	display_table($query);
	?>
	<?php
	include("./post_query.inc");
	?>

</body>

</html>
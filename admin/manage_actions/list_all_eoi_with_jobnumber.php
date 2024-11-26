<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EOI Number Search</title>
</head>

<body>
	<?php
	require_once("./manage_functions.php");
	// $POST the goat
	if (isset($_POST["jobnum"])) {
		$jobnum = trim_string($_POST["jobnum"]);
		echo "<p>Here are all EOIs for job number $jobnum</p>";
		display_table(query: "SELECT * FROM `eoi` WHERE job_ref = \"$jobnum\" ");
	}
	?>
	<?php
	include("./post_query.inc");
	?>


</html>
<?php

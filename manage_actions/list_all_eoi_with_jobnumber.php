<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
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
	<button><a href="../manage.php">Go back to Admin panel</a></button>

</html>
<?php

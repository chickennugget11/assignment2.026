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
	if (isset($_POST["job_delete"])) {
		$job_delete = trim_string($_POST["jobnum"]);
		mysqli_query($conn, "DELETE * FROM `eoi` WHERE `job_ref` = $job_delete");
		echo "<p>All EOIs with number $job_delete has been deleted.</p>";
	}
	?>
	<button><a href="../manage.php">Go back to Admin panel</a></button>

</html>
<?php

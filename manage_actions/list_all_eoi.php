<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EOI List</title>
</head>

<body>
	<?php

	require_once("./manage_functions.php");
	echo "<p>Table of all EOIs:</p>";
	$query = "SELECT * FROM `eoi`";
	display_table($query);
	?>
	<button><a href="../manage.php">Go back to Admin panel</a></button>
</body>

</html>
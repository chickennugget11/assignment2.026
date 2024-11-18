<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php

	require_once("./settings.php");
	require_once("../manage.php");

	$query = "SELECT * FROM `eoi`";
	display_table($query);
	?>
	<button><a href="../manage.php">Go back to Admin panel</a></button>
</body>

</html>
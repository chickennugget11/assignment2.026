<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Change EOI status</title>
</head>

<body>
	<?php
	require_once("./manage_functions.php");
	// $POST the goat
	if (isset_all(["update_number", "new_status"])) {
		$update_number = $_POST["update_number"];
		$new_status = $_POST["new_status"];

		$query = "UPDATE `eoi`
		SET `status` = \"$new_status\"
		WHERE `eoinumber` = $update_number";
		mysqli_query($conn, $query);
		echo "<p>EOI updated</p>";
	}

	?>
	<?php
	include("./post_query.inc");
	?>

</html>
<?php

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<!-- this file has a body for all the wrong reasons... -->
	<?php

	require_once("./settings.php");
	require_once("./processEOI.php");

	// taken from assignment 10, used for display queries
	function display_table($query)
	{
		$conn = $GLOBALS["conn"];

		// used to create table
		$form_info = $GLOBALS["form_info"];
		$form_checkboxes = $GLOBALS["form_checkboxes"];
		$columns = array_merge(
			$form_info,
			$form_checkboxes
		);

		if (!$conn) {
			echo "<p>MySQL connection failure";
			return;
		}
		$sql_table = $GLOBALS["sql_db"];
		$result = mysqli_query(
			$conn,
			$query
		);
		if (!$result) {
			echo "<p>Something is wrong with $query</p>";
			return;
		}
		// Display the retrieved records
		echo "<table border=\"1\">\n";
		// $table_head = "<tr>\n "
		// 	. "<th scope=\"col\">Make</th>\n "
		// 	. "<th scope=\"col\">Model</th>\n "
		// 	. "<th scope=\"col\">Price</th>\n "
		// 	. "</tr>\n ";
		$table_head = "<tr>\n";
		foreach ($columns as $col) {
			echo "<th scope=\"col\">$col</th>\n";
		}

		// retrieve current record pointed by the result pointer
		while ($row = mysqli_fetch_assoc($result)) {
			echo "<tr>\n ";
			// echo "<td>", $row["make"], "</td>\n ";
			// echo "<td>", $row["model"], "</td>\n ";
			// echo "<td>", $row["price"], "</td>\n ";
			foreach ($columns as $col) {
				echo "<td>$row[$col]</td>\n";
			}
			echo "</tr>\n ";
		}
		echo "</table>\n ";
		mysqli_free_result($result);
	}

	?>

	<h1>Admin Panel</h1>

	// list all eoi
	<fieldset>
		<legend>List all EOI</legend>
		<form action="./manage_actions/list_all_eoi.php">
			<input type="submit" value="List all EOI">
		</form>
	</fieldset>
	<fieldset>
		<form action="./manage_actions/list_all_eoi_with_jobnumber.php">
			<label for="jobnum"></label>
			<input type="text" name="jobnum"
				id="jobnum" pattern="[a-zA-Z0-9]{5}"
				placeholder="JOB00" required>
			<input type="submit" value="Search for EOI">
		</form>
	</fieldset>
</body>

</html>
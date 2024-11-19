<?php

require_once("../settings.php");

$form_info = [
	"job_ref",
	"fname",
	"lname",
	"street",
	"suburbtown",
	"state",
	"post",
	"email",
	"num",
];

// programming languages in checkboxes, require special handling

$form_checkboxes = [
	"html",
	"css",
	"js",
	"php",
	"mysql"
];

// require seperate handling
$other_skills = "other_skills";
$status = "status";


function display_table($query)
{
	$conn = $GLOBALS["conn"];

	// used to create table
	$form_info = $GLOBALS["form_info"];
	$form_checkboxes = $GLOBALS["form_checkboxes"];
	$other_skills = "other_skills";
	$status = "status";

	$columns = array_merge(
		$form_info,
		$form_checkboxes,
		[$other_skills, $status]

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
		echo "
<p>Something is wrong with $query</p>";
		return;
	}
	// Display the retrieved records
	echo "<table border=\"1\">\n";
	$table_head = "<tr>\n";
	foreach ($columns as $col) {
		echo "<th scope=\"col\">$col</th>\n";
	}

	// retrieve current record pointed by the result pointer
	while ($row = mysqli_fetch_assoc($result)) {
		echo "
	<tr>\n ";
		// echo "<td>", $row["make"], "</td>\n ";
		// echo "<td>", $row["model"], "</td>\n ";
		// echo "<td>", $row["price"], "</td>\n ";
		foreach ($columns as $col) {
			echo "<td>$row[$col]</td>\n";
		}
		echo "</tr>\n ";
	}
	echo "
</table>\n ";
	mysqli_free_result($result);
}

// other functions mainly used to process queries
function trim_string(string $str): string
{
	// YEAH BABY
	$str = ucwords($str);

	// remove additional spaces
	$str = trim($str);

	// and backslahes
	$str = str_replace("\\", "", $str);

	// remove special chars? 
	return htmlspecialchars($str);
}

function checkbox_to_bool($value): bool
{
	// Safely check if the checkbox is set and if it's checked
	return isset($_POST[$value]) && $_POST[$value] === 'on';
}

function isset_all(array $attributes): bool
{
	// check if all attributes is set. Although it should not be possible
	foreach ($attributes as $attribute) {
		if (!isset($_POST[$attribute]))
			return false;
	}
	return true;
}

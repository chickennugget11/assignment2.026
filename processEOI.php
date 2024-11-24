<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php

	include("header.inc");

	require_once("./settings.php");

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

	if (isset_all($form_info)) {
		$table = "`eoi`";
		// other skills must be handled distictly

		$column_names = join(
			", ",
			array_merge(
				$form_info,
				$form_checkboxes,
				[$other_skills, $status]
			)
		);

		// Khanh and Kiệt, I am very sorry, but since PHP is fucked up,
		// we used a HASHMAP as an array
		// this language is fucking insane
		$record = [];
		foreach ($form_info as $attribute) {
			// oh boy
			$record[$attribute] = trim_string($_POST[$attribute]);
		}

		// Now we can handle language checkboxes independently,
		// but we have to ensure that the other elements are there
		// which is why it's in this block

		foreach ($form_checkboxes as $checkbox_value) {
			$record[$checkbox_value] = isset($_POST[$checkbox_value]) ?
				checkbox_to_bool($_POST[$checkbox_value]) : false;
		}

		//other skills and status column handled seperately
		$record[$other_skills] = trim_string($_POST["other_skills"]);
		$record[$status] = "New";


		// iterate by reference
		foreach ($record as &$i) {
			$i = "\"" . $i . "\"";
			// echo $i;
		}

		// add value to table
		$value = join(", ", $record); // for status
		$insert_query = "INSERT INTO $table ($column_names) VALUES ($value)";
		echo "<p>$insert_query</p>";
		$conn->query($insert_query);
	} else {
		echo "<p>Form values are not all set. Exiting...</p>";
	}

	?>
</body>

</html>
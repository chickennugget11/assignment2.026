<?php

require_once("./settings.php");

function trim_string(string $str): string
{
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
		if (!isset($_POST[$attribute])) return false;
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

if (isset_all($form_info)) {
	$table = "`eoi`";
	$column_names = join(
		", ",
		array_merge($form_info, $form_checkboxes)
	);

	// Khanh and Kiệt, I am very sorry, but since PHP is fucked up,
	// we used a HASHMAP as an array
	// this language is fucking insane
	$record = [];
	foreach ($form_info as $attribute) {
		// oh boy
		$record[$attribute] = $_POST[$attribute];
	}

	// Now we can handle language checkboxes independently,
	// but we have to ensure that the other elements are there
	// which is why it's in this block

	foreach ($form_checkboxes as $checkbox_value) {
		$record[$checkbox_value] = isset($_POST[$checkbox_value]) ?
			checkbox_to_bool($_POST[$checkbox_value]) : false;
	}
	// iterate by reference
	foreach ($record as &$i) {
		$i = "\"" . $i . "\"";
		// echo $i;
	}

	// add value to table
	$value = join(", ", $record) . " \"New\" "; // for status
	$insert_query = "INSERT INTO $table ($column_names) VALUES ($value)";
	echo "<p>$insert_query</p>";
	$conn->query($insert_query);
} else {
	echo "<p>Form values are not all set. Exiting...</p>";
}

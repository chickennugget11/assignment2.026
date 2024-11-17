<?php

function trim_string(string $str)
{
	// remove additional spaces
	$str = trim($str);
	// and backslahes
	$str = str_replace("\\", "", $str);

	// remove special chars? 
	return htmlspecialchars($str);
}

function isset_all(array $attributes)
{
	// check if all attributes is set. Although it should not be possible
	foreach ($attributes as $attribute) {
		if (!isset($_POST[$attribute])) return false;
	}
	return true;
}

$form_attributes = array(
	"job_ref",
	"fname",
	"lname",
	"dob",
	"gender",
	"address",
	"sub",
	"state",
	"post",
	"email",
	"num"
);

if (isset_all($form_attributes)) {
	foreach ($form_attributes as $attribute){
		eval("$$attribute = trim_string($_POST[\"$attribute\"])");
	}
} else {
	echo "<p>Form values are not all set. Exiting...</p>";
}

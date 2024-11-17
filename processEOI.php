<?php

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
} else {
	echo "";
}

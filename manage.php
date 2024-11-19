<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	<link rel="stylesheet" href="./styles/manage.css">
</head>

<body>
	<!-- this file has a body for all the wrong reasons... -->
	<h1>Admin Panel</h1>

	<!-- list all eoi -->
	<fieldset>
		<legend>List all EOI</legend>
		<form action="./manage_actions/list_all_eoi.php" method="post">
			<input type="submit" value="List all EOI">
		</form>
	</fieldset>
	<br>
	<!-- list EOI with job number -->
	<fieldset>
		<legend>Search for EOIs with job number</legend>
		<form action="./manage_actions/list_all_eoi_with_jobnumber.php" method="post">

			<label for="jobnum"></label>
			<input type="text" name="jobnum" id="jobnum"
				pattern="[a-zA-Z0-9]{5}" placeholder="JOB00" required>
			<input type="submit" value="Search for EOI">
		</form>
	</fieldset>
	<br>
	<!-- list all EOI given first/last name -->
	<fieldset>
		<legend>Search for EOIs with names</legend>
		<form action="./manage_actions/list_all_eoi_with_name.php" method="post">

			<label for="job_fname">First name (if applicable): </label>
			<input type="text" name="job_fname" id="job_fname"><br>
			<label for="job_lname">Last name (if applicable): </label>
			<input type="text" name="job_lname" id="job_lname"><br>
			<input type="submit" value="Find EOI">
		</form>
	</fieldset>

</body>

</html>
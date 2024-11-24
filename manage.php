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
	<fieldset>
		<legend>
			<!-- list all eoi -->
			<fieldset>
				<legend>List all EOI</legend>
				<form action="./manage_actions/list_all_eoi.php" method="post">
					<input type="submit" value="List all EOI">
				</form>
			</fieldset>

			<!-- list EOI with job number -->
			<br>
			<fieldset>
				<legend>Search for EOIs with job number</legend>
				<form action="./manage_actions/list_all_eoi_with_jobnumber.php" method="post">

					<label for="jobnum"></label>
					<input type="text" name="jobnum" id="jobnum"
						pattern="[a-zA-Z0-9]{5}" placeholder="JOB00" required>
					<input type="submit" value="Search for EOI">
				</form>
			</fieldset>

			<!-- list all EOI given first/last name -->
			<br>
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

			<!-- Delete all EOIs with job reference number -->
			<br>
			<fieldset>
				<legend>Delete all EOIs with job reference number</legend>
				<form action="./manage_actions/delete_all_eoi_with_jobnumber.php" method="post">
					<label for="job_delete">Job number to delete:</label>
					<input type="text" name="job_delete" id="job_delete"
						pattern="[a-zA-Z0-9]{5}" placeholder="JOB00" required>
					<input type="submit" value="DELETE EOI (CAN'T BE REVERSED!)">
				</form>
			</fieldset>

			<!-- TODO: Update EOI  -->
			<br>
			<fieldset>
				<legend>Update EOI Information</legend>
				<form action="./manage_actions/update_eoi.php" method="post"></form>
			</fieldset>

			<!-- Change Status of EOI -->
			<br>
			<fieldset>
				<legend>update </legend>
				<form action="./manage_actions/change_eoi_status.php" method="post">
					<label for="update_number">EOI Number:</label>
					<input type="text" name="update_number"
						id="update_number" pattern="\d{0, 100}" required><br>
					<label for="new_status">Update to: </label>
					<select name="new_status" id="new_status">
						<option value="New">New</option>
						<option value="Current">Current</option>
						<option value="Final">Final</option>
					</select>
					<input type="submit" value="Update EOI">
				</form>
			</fieldset>
		</legend>
	</fieldset>
</body>

</html>
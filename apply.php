<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="description" content="Web Application">
	<meta name="keywords" content="Assignment 1">
	<meta name="author" content="Group 4">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--Font styles-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Afacad+Flux:wght@100..1000&family=Protest+Strike&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
	<!--Link the CSS file-->
	<link href="styles/index.css" rel="stylesheet">
	<!--Title-->
	<title>Group 4's Company</title>
</head>

<body class="page3">
	<!--Navigation bar trong header-->
	<?php
	include("header.inc");
	?>

	<h1 class="bg">Application Form</h1>

	<main class="form">
		<!-- form -->
		<form action="./processEOI.php" method="post" novalidate="novalidate">
			<!-- Reference number, name, date of birth -->
			<label for="job_ref">Job Reference Number: </label>
			<input type="text" name="job_ref" id="job_ref" pattern="[a-zA-Z0-9]{5}" required placeholder="JOB00"><br>
			<br>
			<label for="fname">First Name: </label>
			<input type="text" name="fname" id="fname" pattern="[a-zA-Z]{1,20}" required placeholder="John"><br>
			<br>
			<label for="lname">Last Name: </label>
			<input type="text" name="lname" id="lname" pattern="[a-zA-Z]{1,20}" required placeholder="Doe"><br>
			<br>
			<label for="dob">Date of Birth: </label>
			<input type="text" name="dob" id="dob" pattern="\d{2}/\d{2}/\d{4}" required placeholder="01/01/1970"><br>
			<!-- gender -->
			<br>
			<fieldset>
				<legend>Gender: </legend>
				<input type="radio" name="gender" value="male" id="male" checked>
				<label for="male"> Male</label><br>
				<input type="radio" name="gender" value="female" id="fmale">
				<label for="fmale"> Female</label><br>
				<input type="radio" name="gender" value="other" id="other">
				<label for="other"> Other</label><br>
			</fieldset>
			<br>
			<!-- address, suburb/town, state, postcode -->
			<label for="address">Street Address: </label>
			<input type="text" name="address" id="address" pattern="[a-zA-Z0-9]{0, 40}" required
				placeholder="00 Random Street"><br>
			<br>
			<label for="sub">Suburb/Town: </label>
			<input type="text" name="sub" id="sub" pattern="[a-zA-Z0-9]{0, 40}" required
				placeholder="00 Random Street"><br>
			<br>
			<label for="state">State: </label>
			<select title="state" name="state" id="state">
				<option value="VIC">VIC</option>
				<option value="NSW">NSW</option>
				<option value="QLD">QLD</option>
				<option value="NT">NT</option>
				<option value="WA">WA</option>
				<option value="SA">SA</option>
				<option value="TAS">TAS</option>
				<option value="ACT">ACT</option>
			</select>
			<br>
			<br>
			<label for="post">Postcode: </label>
			<input type="text" name="post" id="post" pattern="\d{4}" required placeholder="0000"><br>
			<!-- email, phone -->
			<br>
			<label for="email">Email address: </label>
			<input type="email" name="email" id="email" required placeholder="john@example.com"><br>

			<br>
			<label for="num">Phone Number: </label>
			<input type="text" name="num" id="num" pattern="\d{8, 12}" required placeholder="00000000"><br>
			<br>
			<!-- skills -->
			<label>Skill Lists: </label><br>
			<br>
			<input type="checkbox" name="HTML" id="html" checked><label for="html"> HTML</label><br>
			<input type="checkbox" name="CSS" id="css"><label for="css"> CSS</label><br>
			<input type="checkbox" name="JavaScript" id="js"><label for="js"> JavaScript</label><br>
			<input type="checkbox" name="PHP" id="php"><label for="php"> PHP</label><br>
			<input type="checkbox" name="MySQL" id="mysql"><label for="mysql"> MySQL</label><br>
			<input type="checkbox" name="OtherSkills" id="other_skill"><label for="other_skill">Other skills</label><br>
			<br>
			<label for="other_skills_textarea">if you have other skills, fill them here: </label><br>
			<textarea name="other_skills" id="other_skills_textarea" placeholder="Your other skills..."> </textarea><br>
			<br>
			<!-- submit -->

			<input type="submit" value="Apply" class="apply">
		</form>
		<br>

	</main>


	<!--Class "return": ấn vào sẽ quay lại Job Description-->
	<aside class="return">
		<a href="jobs.php"><img src="images/aside.png"></a>
		<br>
		<figcaption>Click this image to return to the Job Description</figcaption>
	</aside>

	<!--Footer-->
	<?php
	include("footer.inc");
	?>

</body>

</html>
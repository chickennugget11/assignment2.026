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

<body class="page4">
	<!--Navigation bar trong header-->
	<?php
	include("header.inc");
	?>

	<h1 class="bg">About Us</h1>
	<main class="abus">
		<aside>
			<img src="images/p4.png" alt="computer">
		</aside>
		<ul>
			<li><strong>Group name:</strong> Group 4</li>
			<li><strong>Group ID:</strong> 12345678</li>
			<li><strong>Tutor's name:</strong> Dennis Nguyen</li>
			<li><strong>Course:</strong> COS10026</li>
		</ul>
	</main>
	<br><br>
	<!-- about members -->
	<table>
		<tr>
			<th colspan="5" id="tbhd">Group Members</th>
		</tr>
		<tr>
			<th>Name</th>
			<th>Image</th>
			<th>DOB</th>
			<th>Hometown</th>
			<th>Hobbies</th>
		</tr>
		<tr>
			<td>Nguyễn Quý Khanh</td>
			<td><img src="images/khanh.jpg" alt="khanh"></td>
			<td>30/11</td>
			<td>Hà Nội</td>
			<td>Eat, sleep...</td>
		</tr>
		<tr>
			<td>Hoàng Minh Đức</td>
			<td><img src="images/duc.jpg" alt="duc"></td>
			<td>03/08</td>
			<td>Hà Nội</td>
			<td>Mathematics, Gaming, Music, Anime, ...</td>
		</tr>
		<tr>
			<td>Nguyễn Hoàng Tuấn Kiệt</td>
			<td></td>
			<td>24/09</td>
			<td>Hà Nội</td>
			<td>Games, Music</td>
		</tr>
	</table>

	<!-- timetable -->
	<table>
		<tr>
			<th colspan="7">Our time table</th>
		</tr>
		<tr>
			<th> Mon</th>
			<th> Tue</th>
			<th> Wed</th>
			<th> Thurs</th>
			<th> Fri</th>
			<th>Sat</th>
			<th>Sun</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td rowspan="2" class="inquiry"><a
					href="https://swinburne.instructure.com/courses/63125">COS10026(8a.m-12p.m)</a></td>
			<td></td>
			<td></td>
			<td></td>
			<td rowspan="2">Assignment (Lab) of all these lecture</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>

		</tr>
		<tr>
			<th colspan="7">Break time with lunch</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td class="comsys"><a href="https://swinburne.instructure.com/courses/63123">COS10004 (1p.m-5p.m)</a></td>
			<td class="webdev"><a href="https://swinburne.instructure.com/courses/63021">COS10005 (1p.m-5p.m)</a></td>
			<td></td>
			<td>Assignment (Lab) of all these lecture</td>
		</tr>
		<tr>
			<th colspan="7">Dinner, Relax</th>
		</tr>
	</table>
	<br><br>


	<?php
	include("footer.inc");
	?>
</body>

</html>
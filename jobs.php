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

<body class="page2">
    <!--Navigation bar trong header-->
    <?php
    include("header.inc");
    ?>

    <br><br>
    <!--Header-->
    <h1 class="bg">Job Description</h1>

    <br>
    <!--Project Manager-->
    <section id="job2">
        <h2>Project Manager</h2>

        <img class="project" src="./images/projectmana.png" alt="projectmana " />

        <p>Coordinate and manage projects from planning to execution, ensuring timely completion within budget; requires
            <strong>3-5 years of project management experience,</strong> having successfully led <strong>at least 3 major projects, improved processes, and minimized risks.</strong>
        </p>
        <ul>
            <li>Job reference number: PM001</li>
            <li>Position title: Project Manager</li>
            <li>Salary: $100000+ / year</li>
            <li>Successful applicants are reported to CTO.</li>
        </ul>

        <p>Your key responsibilities:</p>

        <ol>
            <li>Making sure products are delivered in time with decent quality</li>
            <li>Reporting on problems and resource requirements, if any</li>
        </ol>
    </section>

    <!--Data Scientist-->
    <section id="job3">
        <h2>Data Scientist</h2>

        <img class="data" src="./images/data.png" alt="data science" />

        <p>Analyze and process data to provide insights for strategic decision-making, build machine learning models to
            forecast and optimize processes; requires <strong>2-4 years of experience</strong>, having successfully
            deployed <strong>at least 2 effective machine learning models and improved system performance by at least 20%.</strong>
        </p>

        <ul>
            <li>Job reference number: DS002</li>
            <li>Position title: Data Scientist</li>
            <li>Salary: $80000+ / year</li>
            <li>Successful applicants are reported to CTO.</li>
        </ul>

        <p>Your key responsibilities:</p>

        <ol>
            <li>Perform data analysis on company data</li>
            <li>Build Machine Learning models for customer requirements</li>
        </ol>
    </section>

    <br><br>

    <!--Apply button-->
    <div>
        <a href="apply.php">Apply now</a>
    </div>


    <br><br>

    <!--Footer-->
    <?php
    include("footer.inc");
    ?>
</body>

</html>
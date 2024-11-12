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
<!--Để class page_1 cho tiền làm css-->

<body class="page_1">
    <!--Navigation bar-->
    <?php
    include("header.inc");
    ?>
    <br><br>

    <!--Phần main ở bên trái với background trong-->
    <main>
        <h1>We need you</h1>
        <p>Founded years ago, our company has grown to be the best IT company in the industry. Our team of experienced
            recruiters and industry experts work tirelessly to understand the unique needs of both candidates and
            employers, ensuring the best possible fit for every position.</p>
        <h2>Why choose our company? </h2>
        <p>We as a company, is known for being a leader in our industry and is making exciting strides in innovation
            often attracts talent who want to work with the best and contribute to impactful projects</p>
        <br>
        <!--Nút Apply ấn vào page 3-->
        <a href="apply.php" class="apply">
            Apply Now
        </a>
    </main>
    <!--Footer-->
    <?php
    include("footer.inc");
    ?>
</body>

</html>
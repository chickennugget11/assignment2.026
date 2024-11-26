<!DOCTYPE html>
<html lang="en">

<head>
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
    <link href="../styles/index.css" rel="stylesheet">
</head>

<body>
    <?php
    session_start();
    require_once("../settings.php");
    require_once("./manage_actions/manage_functions.php");

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $username = isset($_POST['username']) ? strtolower(trim_string($_POST['username'])) : "";
        $password = isset($_POST['password']) ? strtolower(trim_string($_POST['password'])) : "";

        $query = "SELECT * FROM `hr_user` WHERE username = '$username' AND password = '$password'";
        echo "<p>$query</p>";
        $result = mysqli_query($conn, $query);

        if ($result) {
            $user = mysqli_fetch_assoc($result);
            if (mysqli_num_rows($result) == 0) echo "Invalid username or password.";
            else {
                header("Location: ./manage.php");
            }
        } else {
            echo "Something went wrong";
        }
    }
    ?>
    <?php
    include("./admin_header.inc");
    ?>
    <!-- Form -->
    <h1>Log In</h1>
    <?php if (isset($error_message)) echo "<p>$error_message</p>"; ?>

    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required placeholder="Enter your username">
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required placeholder="Enter your password">
        <br>
        <button type="submit">Log In</button>

    </form>

    <!-- <p>Don't have an account? <a href="register.php">Register here</a>.</p> -->

</body>

</html>
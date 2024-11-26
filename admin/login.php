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
    <link href="styles/index.css" rel="stylesheet">
</head>

<body>
    <?php
    session_start();
    require_once("settings.php");

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $username = isset($_POST['username']) ? trim($_POST['username']) : "";
        $password = isset($_POST['password']) ? trim($_POST['password']) : "";


        $query = "SELECT * FROM hr_users WHERE username = '$username' AND password = ''";
        $result = mysqli_query($conn, $query);

        if ($result && mysqli_num_rows($result) === 1) {
            $user = mysqli_fetch_assoc($result);

            // compare password tho
            if ($password === $user['password']) {
                // Đăng nhập thành công
                $_SESSION['logged_in'] = true; // this user logged in
                $_SESSION['username'] = $username; // saved the username
                $_SESSION['fullname'] = $user['fullname']; // saved the full name

                header("Location: manage.php");
                //header("Location: manage.php");// Lets goooooooooo, tbh i dont think it s neccessary but if u ưant so ok 
                exit();
            } else {
                $error_message = "Invalid username or password.";
            }
        } else {
            $error_message = "Invalid username or password.";
        }
    }
    ?>
    <?php
    include("header.inc");
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

    <p>Don't have an account? <a href="register.php">Register here</a>.</p>

</body>

</html>
<?php 
session_start();
include_once("settings.php");

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    header('Location: manage.php');
    exit();
} else {
    
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/registration.css">
    <title>Login</title>
</head>
<body>
    

    <main>
        <div>
        <?php if (isset($_GET['errormsg'])) { ?>
            <p id="errormsg"><?php echo $_GET['errormsg']; ?></p>
        </div>
        <?php } ?>
        <div id="main">
            <h2>LOGIN</h2>
            <form action="submission.php" method="post">


                <label for="uname">
                    Username:
                    <input type="text" id="uname" name="uname" placeholder="Username" autocomplete="off">
                </label>


                <label for="pass">
                    Password:
                    <input type="password" id="pass" name="pass" placeholder="Password" autocomplete="off">
                </label>


                <div id="submit">
                    <button type="submit">Login</button>
                </div>


            </form>
        </div>
    </main>
    <a href="index.php"><img src="images/original.png" alt="origin" id="origin"></a>
</body>
</html>
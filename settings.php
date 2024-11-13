<?php 
    $dbserve = 'feenix-mariadb.swin.edu.au'; //connect với cái như đề bài 
    $dbuser = 's104189712';
    $dbpassword = 'Nqk.301104';
    $dbname = 'database_name';

    $test_local = true;

    if ($test_localtest_local) {
        $dbserve = 'feenix-mariadb.swin.edu.au'; //connect với cái như đề bài 
        $dbuser = 'username';
        $dbpassword = 'pass';
        $dbname = 'database_name';
    }
    

    $conn = new mysqli($dbserve, $dbuser, $dbpassword, $dbname);
    
    if (!$conn) {
        echo "<p>Connection Failed, please return!</p>";
    } else {
        $tableQuery = "SHOW TABLES LIKE 'accounts'";
        $tablecheck = mysqli_query($conn, $tableQuery);

        if (mysqli_num_rows($tablecheck) == 0) { 
            // Table does not exist, create it
            $createTableQuery = "CREATE TABLE `accounts` (
                `id` INT(255) AUTO_INCREMENT PRIMARY KEY,
                `username` VARCHAR(255) NOT NULL,
                `password` VARCHAR(255) NOT NULL
            )";
            mysqli_query($conn, $createTableQuery);

            // Insert sample data
            $insertQuery = "INSERT INTO `accounts` (`id`, `username`, `password`) VALUES ('0', 'admin', '1559b39320fe87b85c5cf1025ed92c85')";
            mysqli_query($conn, $insertQuery);
            
            
        } 
    }
?>
?>
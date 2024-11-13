<?php 
    $dbserve = 'feenix-mariadb.swin.edu.au'; //connect với cái như đề bài 
    $dbuser = 'username';
    $dbpassword = 'pass';
    $dbname = 'database_name';

    $conn = new mysqli($dbserve, $dbuser, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die('Connect unsuccessfully!'. $conn->connect_error);
    }
?>
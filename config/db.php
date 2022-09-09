<?php
    $servername = "localhost";
    $username = "u503914755_admin";
    $password = "YUIygvijn458";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=u503914755_sumtamsang", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch(PDOException $e) {
         echo "Connection failed: " . $e->getMessage();
    }

    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
?>
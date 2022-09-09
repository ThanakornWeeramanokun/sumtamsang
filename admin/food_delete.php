<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ระบบสุ่มอาหารกลางวัน</title>
    <link rel="stylesheet" href="../bootstrap5-templete/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap5-templete/css/product.css">
    <!-- sweet alert  -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/food-icon.ico" />
</head>
<body>
    
</body>
</html>

<?php

    include_once('../config/functions.php');
    date_default_timezone_set("Asia/Bangkok"); // การ Set เวลาให้เป็นบัจจุบันของประเทศ

    if (isset($_GET['del'])) {
        $foodid = $_GET['del'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete_food($foodid);

        if ($sql) {
            echo '<script>
            setTimeout(function() {
                swal({
                    title: "ลบรายการอาหารสำเร็จ",
                    type: "success"
                }, function() {
                    window.location = "admin.php#foodlists"; //หน้าที่ต้องการให้กระโดดไป
                });
            }, 1000);
        </script>';
        } else {
            echo '<script>
            setTimeout(function() {
                swal({
                    title: "มีบางอย่างผิดปกติ โปรดลองใหม่อีกครั้ง",
                    type: "error"
                }, function() {
                    window.location = "admin.php#foodlists"; //หน้าที่ต้องการให้กระโดดไป
                });
            }, 1000);
        </script>';
        }
    }

?>
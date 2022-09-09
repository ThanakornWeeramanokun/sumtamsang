<?php

    session_start();
    require_once 'config/db.php';
    
    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap5-templete/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap5-templete/css/product.css">
    <title>SumTamSang</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/All/food-icon.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="#page-top">

    <!-- NavBar -->
    <?php
      require_once ("navbar.php"); // เรียกใช้ไฟล์ navbar.php
    ?><br><br><br>
    <!-- End NavBar -->
    
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <h3 class="mt-4">สมัครสมาชิก</h3>
                <hr>
                <form action="signup_db.php" method="post">
                    <?php if(isset($_SESSION['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            ?>
                        </div>
                    <?php } ?>
                    <?php if(isset($_SESSION['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success']);
                            ?>
                        </div>
                    <?php } ?>
                    <?php if(isset($_SESSION['warning'])) { ?>
                        <div class="alert alert-warning" role="alert">
                            <?php
                                echo $_SESSION['warning'];
                                unset($_SESSION['warning']);
                            ?>
                        </div>
                    <?php } ?>

                    <div class="mb-3">
                        <label for="firstname" class="form-label">First name</label>
                        <input type="text" class="form-control" name="firstname" aria-describedby="firstname">
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last name</label>
                        <input type="text" class="form-control" name="lastname" aria-describedby="lastname">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" aria-describedby="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                        <label>หมายเหตุ: รหัสผ่านต้องมีความยาวตั้งแต่ 5 ถึง 20 ตัวอักษร</label>
                    </div>
                    <div class="mb-3">
                        <label for="confirm password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" name="c_password">
                    </div>
                    <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
                </form>
                <hr>
                <p>เป็นสมาชิกแล้วใช่ไหม คลิ๊กที่นี่เพื่อ<a href="signin.php">เข้าสู่ระบบ</a></p>
            </div>
        </div>    
    </div>

    <!-- Show popup Login -->
    <?php
        require_once('showpopuplogin.php');
    ?>

</body>
</html>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
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
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="#page-top">

    <!-- NavBar -->
    <?php
      require_once ("navbar.php"); // เรียกใช้ไฟล์ navbar.php
      
        //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
        date_default_timezone_set('Asia/Bangkok');
    ?><br><br><br>
    <!-- End NavBar -->

    <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-10">
            <h3 class="mt-4">เข้าสู่ระบบ</h3>
            <hr>
            <form action="signin_db.php" method="post">
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
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" aria-describedby="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <button type="submit" name="signin" class="btn btn-primary">Sign In</button>
            </form>
            <hr>
            <p>ยังไม่เป็นสมาชิกใช่ไหม คลิ๊กที่นี่เพื่อ<a href="register.php">สมัครสมาชิก</a></p>
            </div>
        </div>
    </div>

</body>
</html>
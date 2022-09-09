<?php
    include_once('../config/functions.php');

    $insertdata = new DB_con();

    if (isset($_POST['insert'])) {
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $urole = $_POST['urole'];

        $sql = $insertdata->insert_member($fname, $lname, $email, $password, $urole);

        if ($sql) {
            echo '<script>
                setTimeout(function() {
                    swal({
                        title: "บันทึกข้อมูลสำเร็จ",
                        type: "success"
                    }, function() {
                        window.location = "admin.php#memberlists"; //หน้าที่ต้องการให้กระโดดไป
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
                        window.location = "admin.php#memberlists"; //หน้าที่ต้องการให้กระโดดไป
                    });
                }, 1000);
            </script>';
        }
    }
?>

<?php

    session_start();
    require_once '../config/db.php'; // เรียกใช้ไฟล์ db.php เพื่อเชื่อมต่อฐานข้อมูล
    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: ../signin.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>SumTamSang</title>
    <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../bootstrap5-templete/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap5-templete/css/product.css">
        <!-- sweet alert  -->
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../assets/food-icon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
	    <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

</head>

<body style="background-color: #F5F5F5">
    <?php
        require_once ("navbar_admin.php"); // เรียกใช้ไฟล์ navbar.php
    ?>

    <section class="page-section">
        <body class="font-mali">
            <div class="container">
                <div class="row mt-3">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header bg-dark text-white d-flex justify-content-between"><h4>แบบฟอร์มเพิ่มรายชื่อสมาชิก</h4>
                                <a href="admin.php#memberlists" class="btn btn-light">ย้อนกลับ</a>
                            </div>
                                    
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="firstname">ชื่อจริง</label>
                                        <input type="text" name="firstname" id="firstname" class="form-control" required>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="lastname">นามสกุล</label>
                                        <input type="text" name="lastname" id="lastname" class="form-control" required>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="email">อีเมล</label>
                                        <input type="email" name="email" id="email" class="form-control" required>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="password">รหัสผ่าน</label>
                                        <input type="text" name="password" id="password" class="form-control" required>
                                        <label>หมายเหตุ: รหัสผ่านต้องมีความยาวตั้งแต่ 5 ถึง 20 ตัวอักษร</label>
                                    </div><br>
                                    <div class="form-group">
                                        <label for="urole">สิทธิ์การใช้งาน</label>
                                        <select name="urole" id="urole" class="form-control" required>
                                            <option value="">-- เลือกสิทธิ์การใช้งาาน --</option>
                                            <option value="user">ผู้ใช้งาน</option>
                                            <option value="admin">ผู้ดูแลระบบ</option>
                                        </select>
                                    </div><br>
                                    <button type="submit" name="insert" class="btn btn-success" >บันทึก</button>
                                </form>
                            </div>
    </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
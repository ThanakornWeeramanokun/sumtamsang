<?php

    session_start();
    include_once('../config/functions.php');
    require_once '../config/db.php'; // เรียกใช้ไฟล์ db.php เพื่อเชื่อมต่อฐานข้อมูล
    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: ../signin.php');
    }

    $updatedata = new DB_con();

    if (isset($_POST['update'])) {
        $memberid = $_GET['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $email = $_POST['email'];
        $urole = $_POST['urole'];

        $sql = $updatedata->update_member($fname, $lname, $email, $urole, $memberid);

        if ($sql) {
            echo '<script>
            setTimeout(function() {
                swal({
                    title: "อัพเดตข้อมูลสมาชิกสำเร็จ",
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

        $sql = "
        SELECT
            users.id,
            users.firstname,
            users.lastname,
            users.email,
            users.urole
        FROM 
            users
        ";
    try {
        $stmt=$conn->prepare($sql);
        $stmt->execute();
        $results=$stmt->fetchAll();
    }
    catch (Exception $ex) {
        echo ($ex -> getMessage());
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
                        <div class="card-header bg-dark text-white d-flex justify-content-between"><h4>แบบฟอร์มแก้ไขรายชื่อสมาชิก</h4>
                            <a href="admin.php#memberlists" class="btn btn-light">ย้อนกลับ</a>
                        </div>
    
                        <?php

                            $memberid = $_GET['id'];
                            $editmember = new DB_con();
                            $sql = $editmember->fetchonerecord_member($memberid);
                            while($row = mysqli_fetch_array($sql)){
                        ?>

                        <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="firstname">ชื่อจริง</label>
                                <input type="text" name="firstname" id="firstname" class="form-control" 
                                    value="<?php echo $row['firstname']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="lastname">นามสกุล</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" 
                                    value="<?php echo $row['lastname']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="email">อีเมล</label>
                                <input type="email" name="email" id="email" class="form-control" 
                                    value="<?php echo $row['email']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="urole">สิทธิ์การใช้งาน</label>
                                <select type="urole" name="urole" id="urole" class="form-control"
                                    value="<?php echo $row['urole']; ?>" required>
                                    <option value="">-- เลือกสิทธิ์การใช้งาน --</option>
                                    <option value="user">ผู้ใช้งาน</option>
                                    <option value="admin">ผู้ดูแลระบบ</option>
                                </select>
                            </div><br>
                            <?php } ?>
                            <button type="submit" name="update" class="btn btn-success" >บันทึก</button>
                        </form>        
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
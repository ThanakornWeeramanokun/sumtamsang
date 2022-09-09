<?php
    include_once('../config/functions.php');
    date_default_timezone_set("Asia/Bangkok"); // การ Set เวลาให้เป็นบัจจุบันของประเทศไทย

    $insertdata = new DB_con();

if (isset($_POST['insert'])) {
    $fname = $_POST['foodname'];
    $ftype = $_POST['foodtype'];
    $calorie = $_POST['calorie'];

    $dir = "../upload/";
    $t=time();
    $img = $_FILES['file']['name'];
    $name_tmp = $t."_".$img;

    if ($img) {
        move_uploaded_file($_FILES["file"]["tmp_name"], $dir.$name_tmp);
    } else {
        echo '<script>
                setTimeout(function() {
                    swal({
                        title: "ไม่ใช่ไฟล์รูปภาพ โปรดอัพโหลดไฟล์รูปภาพเท่านั้น!!",
                        type: "error"
                    }, function() {
                        window.location = "admin.php#foodlists"; //หน้าที่ต้องการให้กระโดดไป
                    });
                }, 1000);
            </script>';
    }

    $sql = $insertdata->insert_food($fname, $ftype, $calorie, $name_tmp);

    if ($sql) {
        echo '<script>
                setTimeout(function() {
                    swal({
                        title: "บันทึกข้อมูลสำเร็จ",
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

<?php

    session_start();
    require_once '../config/db.php'; // เรียกใช้ไฟล์ db.php เพื่อเชื่อมต่อฐานข้อมูล
    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: ../signin.php');
    }

    $sql = "
        SELECT
            food_types.id,
            food_types.typename,
            food_types.category_id,
            food_types.created_at
        FROM 
            food_types
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
    <!-- Data talbes -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" class="">
    <!-- sweet alert  -->
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
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
                        <div class="card-header bg-dark text-white d-flex justify-content-between"><h4>แบบฟอร์มเพิ่มรายการอาหาร</h4>
                            <a href="admin.php#foodlists" class="btn btn-light">ย้อนกลับ</a>
                        </div>

                        <div class="card-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="foodname">ชื่ออาหาร</label>
                                    <input type="text" name="foodname" id="foodname" class="form-control" required>
                                </div><br>
                                <div class="form-group">
                                    <label for="foodtype">ประเภทอาหาร</label>
                                    <select name="foodtype" class="form-control" required>
                                        <option value="">-- เลือกประเภทอาหาร --</option>
                                            <?php
                                                foreach ($results as $output) {?>
                                            <option><?php
                                                echo $output["typename"];
                                                    ?></option>
                                            <?php }?>
                                    </select>
                                </div><br>
                                <div class="form-group">
                                    <label for="calorie">จำนวนแคลอรี่อาหาร</label>
                                    <input type="number" name="calorie" id="calorie" class="form-control" required>
                                </div><br>
                                <div class="form-group">
                                    <label for="img">รูปภาพอาหาร</label>
                                    <input type="file" name="file" id="file" required class="form-control" accept="image/jpeg, image/png, image/jpg">
                                    <font color="red">*อัพโหลดได้เฉพาะ .jpeg , .jpg , .png </font>
                                </div><br>
                                <button type="submit" name="insert" class="btn btn-success" value="insert">บันทึก</button>
                            </form>
                        </div>
            </section>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
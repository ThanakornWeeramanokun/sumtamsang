<?php

    session_start();
    include_once('../config/functions.php');
    require_once '../config/db.php'; // เรียกใช้ไฟล์ db.php เพื่อเชื่อมต่อฐานข้อมูล
    date_default_timezone_set("Asia/Bangkok"); // การ Set เวลาให้เป็นบัจจุบันของประเทศ
    
    if (!isset($_SESSION['admin_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: ../signin.php');
    }

    $updatedata = new DB_con();

if (isset($_POST['update'])) {
    $foodid = $_GET['id'];
    $fname = $_POST['foodname'];
    $ftype = $_POST['foodtype'];
    $calorie = $_POST['calorie'];

    $dir = "../upload/";
    $t = time();
    $img = $_FILES['file']['name'];
    $name_tmp = $t . "_" . $img;

    if ($fname && $ftype && $calorie) {
        if($img){
            move_uploaded_file($_FILES["file"]["tmp_name"], $dir . $name_tmp);
        }
        
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


    if (!$img) {
       $sql1 = $updatedata->update_food_noimg($fname, $ftype, $calorie, $foodid);
       if ($sql1) {
        echo '<script>
            setTimeout(function() {
                swal({
                    title: "อัพเดตข้อมูลอาหารสำเร็จ",
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
    }else{
        $sql = $updatedata->update_food($fname, $ftype, $calorie, $name_tmp, $foodid);
        if ($sql) {
            echo '<script>
                setTimeout(function() {
                    swal({
                        title: "อัพเดตข้อมูลอาหารสำเร็จ",
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
                        <div class="card-header bg-dark text-white d-flex justify-content-between"><h4>แบบฟอร์มแก้ไขรายการอาหาร</h4>
                            <a href="admin.php#foodlists" class="btn btn-light">ย้อนกลับ</a>
                        </div>
    
                        <?php

                            $foodid = $_GET['id'];
                            $editfood = new DB_con();
                            $sql = $editfood->fetchonerecord_food($foodid);
                            while($row = mysqli_fetch_array($sql)){
                        ?>

                        <div class="card-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="foodname">ชื่ออาหาร</label>
                                <input type="text" name="foodname" id="foodname" class="form-control"
                                    value="<?php echo $row['foodname']; ?>">
                            </div><br>
                            <div class="form-group">
                                <label for="foodtype">ประเภทอาหาร</label>
                                <select name="foodtype" id="foodtype" class="form-control"
                                    value="<?php echo $row['foodtype']; ?>">
                                        <option value="" disabled>-- เลือกประเภทอาหาร --</option>
                                        <?php foreach ($results as $output) {?>
                                        <option value="<?php echo $output['typename']; ?>" <?php if ($row['foodtype'] == $output['typename']) echo ' selected="selected"'; ?>>
                                            <?php echo$output["typename"]; ?>
                                        </option>
                                    <?php }?>
                                </select>
                            </div><br>
                            <div class="form-group">
                                <label for="calorie">จำนวนแคลอรี่อาหาร</label>
                                <input type="value" name="calorie" id="calorie" class="form-control"
                                    value="<?php echo $row['calorie']; ?>">
                            </div><br>
                            <div class="form-group">
                                <label for="img">รูปภาพอาหาร</label><br>
                                <img src="../upload/<?php echo $row['img']; ?>" width="200px">
                                    <input value="<?php echo $row['img']; ?>" type="file" name="file" id="file" class="form-control" accept="image/jpeg, image/png, image/jpg">
                                    <font color="red">*อัพโหลดได้เฉพาะ .jpeg , .jpg , .png </font>
                            </div><br>
                            <?php }?>
                            <button type="submit" name="update" class="btn btn-success" >บันทึก</button>
                        </form>       
    </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
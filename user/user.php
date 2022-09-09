<?php

    session_start();
    require_once '../config/db.php'; // เรียกใช้ไฟล์ db.php เพื่อเชื่อมต่อฐานข้อมูล
    
    //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
    date_default_timezone_set('Asia/Bangkok');
    
    if (!isset($_SESSION['user_login'])) {
        $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ!';
        header('location: ../signin.php');
    }

    // สำหรับใช้ในการดึงฐานข้อมูลรายการอาหารทั้งหมด
    $sql = "SELECT food_lists.id FROM food_lists";
    $stmt = $conn->query($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $results)

    // สำหรับใช้ในการสุ่มรายการเมนูอาหาร
    $sqlR = "SELECT * FROM food_lists ORDER BY RAND() LIMIT 1";
    $stmtR = $conn->query($sqlR);
    $stmtR->execute();
    $resultR = $stmtR->fetchAll(PDO::FETCH_ASSOC);

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

</head>
<body id="page-top">

    <?php
      require_once ("navbar_user.php"); // เรียกใช้ไฟล์ navbar.php
    ?>
        <?php

            if (isset($_SESSION['user_login'])) {
                $user_id = $_SESSION['user_login'];
                $stmt = $conn->query("SELECT * FROM users WHERE id = $user_id");
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
            }
        ?>

    <section class="page-section" id="random">
      <div class="container">
            <h3 class="mt-4">ยินดีต้อนรับ, <?php echo $row['firstname'] . ' ' . $row['lastname']?></h3><hr>
              <div class="text-center">
                <h2 class="section-heading text-uppercase">เริ่มสุ่มอาหารกันเลย!</h2>
                <h3 class="section-subheading text-muted">เที่ยงนี้ กินอะไรดีนะ!?</h3>
              </div>
                <?php
                    foreach($resultR as $val) {
                ?>
                
                <div class="portfolio-modal modal fade" id="modalCart<?php echo $val['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" role="dialog" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="close-modal" value="Refresh" onClick="javascript:location.reload();" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                          <div class="container">
                              <div class="row justify-content-center">
                                  <div class="col-lg-8">
                                      <div class="modal-body">
                                          <!-- Project details-->
                                          <h2 class="text-uppercase"><?php echo $val['foodname']?></h2>
                                          <p class="item-intro text-muted">ประเภทอาหาร: <?php echo $val['foodtype']?></p>
                                          <img class="img-fluid d-block mx-auto" <img src="../upload/<?php echo $val['img']; ?>" alt="..." />
                                          <ul class="list-inline">
                                            <li>
                                              <strong>Calories:</strong>
                                              <?php echo $val['calorie']?> Kcal
                                            </li>
                                          </ul>
                                          <button class="btn btn-primary btn-xl text-uppercase" value="Refresh" onClick="javascript:location.reload();" data-bs-dismiss="modal" type="button">
                                              <i class="fas fa-xmark me-1"></i>
                                              Close
                                          </button>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>
                <?php } ?>
                <center><img src="../upload/start-button (1).png" width="280px" style="cursor:pointer;" data-bs-toggle="modal" data-bs-target="#modalCart<?php echo $val['id']?>"></i></center><br><hr>
                <div class="modal-body">
                <ul class="list-inline">
                  <p class="text-muted">หมายเหตุ: ตามข้อแนะนำของ Thai Recommended Daily Intakes (Thai RDI) ปริมาณแคลอรี่ที่ได้รับจากการบริโภคอาหารและเครื่องดื่ม ควรมาจากสารอาหารแต่ละประเภทอย่างเหมาะสม  ที่ปรากฏในฉลากโภชนาการนั้น เมื่อเทียบกับผู้ที่ต้องการพลังงานวันละประมาณ 2,000 แคลอรี ควรได้รับสารอาหาร 3 อย่างคือ คาร์โบไฮเดรต 300 แคลอรี่ โปรตีน 50 แคลอรี่ และ ไขมัน 66.66 แคลอรี่ (ปริมาณไขมันดังกล่าวควรเป็นกรดไขมันอิ่มตัว (saturated fatty acid) ไม่เกิน ร้อยละ 10 ด้วย) ซึ่งหากใครต้องการพลังงานมากหรือน้อยกว่านี้ ให้ปรับกินเพิ่ม หรือ ลดลงแต่ละส่วนได้ ตามความเหมาะสม</p>
                </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <section class="page-section bg-light" id="foodlists">
      <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">รายการเมนูอาหาร</h2>
            <h3 class="section-subheading text-muted">รายการเมนูอาหารไทยทั้งหมดที่ถูกจัดเก็บไว้ในฐานข้อมูล!!</h3>
        </div>
      </div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10 mt-3">
            <div class="card mb-3">
              <div class="card-header bg-dark text-white d-flex justify-content-between"><h3>รายการเมนูอาหารทั้งหมด</h3>
              </div>
                <div class="card-body">
                  <table id=foodTable class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th><h5>ลำดับ</h5></th>
                        <th><h5>ชื่ออาหาร</h5></th>
                        <th><h5>ประเภท</h5></th>
                        <th><h5>แคลอรี่</h5></th>
                        <th><h5>รูปภาพ</h5></th>
                      </tr>
                    </thead>

                    <tbody>
                      <?php
                          include_once('../config/functions.php');
                          $fetchdata = new DB_con();
                          $sql = $fetchdata->fetchdata_food();
                          while($row = mysqli_fetch_array($sql)) {
                      ?>

                          <tr>
                              <td><h6><?php echo $row['id']?></h6></td>
                              <td><h6><?php echo $row['foodname']?></h6></td>
                              <td><h6><?php echo $row['foodtype']?></h6></td>
                              <td><h6><?php echo $row['calorie']?></h6></td>
                              <td><img src="../upload/<?php echo $row['img']; ?>" width="60px" required></td>
                          </tr>
                      <?php
                          }
                      ?>
                    </tbody>
                  </table>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Datatable Jquery-->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <!-- Jquery-->
    <script scr="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
      $(document).ready( function () {
        $('#foodTable').DataTable();
      } );
    </script>
</body>
</html>
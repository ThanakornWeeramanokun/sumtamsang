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
    <body id="page-top">

    <!-- NavBar -->
    <?php
       require_once ("navbar_admin.php"); // เรียกใช้ไฟล์ navbar.
       
        //Set ว/ด/ป เวลา ให้เป็นของประเทศไทย
        date_default_timezone_set('Asia/Bangkok')
    ?>

    <!-- End NavBar -->
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">ยินดีต้อนรับสู่ ระบบสุ่มอาหาร!</div>
                <div class="masthead-heading text-uppercase">เที่ยงนี้ กินอะไรดีนะ!?</div>
                <a class="btn btn-warning btn-xl text-uppercase" href="#functions">START</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="functions">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">ฟังก์ชันการใช้งาน</h2>
                    <h3 class="section-subheading text-muted">ฟังก์ชันการใช้งานของเว็บไซต์นี้</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <img class="rounded-circle img-fluid" src="../assets/img/Icons/shuffle.png" width="80%"></img>
                        </span>
                        <h4 class="my-3">Random</h4>
                        <p class="text-muted">เป็นการสุ่มอาหารไทยทั้งหมดจากในฐานข้อมูลที่เราได้ทำการเก็บรวบรวมมากว่า 80+ เมนู!!</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <img class="rounded-circle img-fluid" src="../assets/img/Icons/burn.png" width="80%"></img>
                        </span>
                        <h4 class="my-3">Calories</h4>
                        <p class="text-muted">ทุกเมนูอาหารจะบ่งบอกจำนวน แคลอรี่ เพื่อให้คุณสามารถคำนวณแคลลอรี่ของการกินในแต่ละวันได้!!</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <img class="rounded-circle img-fluid" src="../assets/img/Icons/relief.png" width="90%"></img>
                        </span>
                        <h4 class="my-3">Relax</h4>
                        <p class="text-muted">ทำให้สมองคุณในแต่ละวัน มีความผ่อนคลายไม่เครียดจากการทำงาน เนื่องจากไม่ต้องมานั่งคิดเมนูอาหารที่จะต้องกินเที่ยงนี้!!</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- food Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">ตัวอย่างเมนูอาหาร</h2>
                    <h3 class="section-subheading text-muted">รวมเมนูอาหารไทยหลากหลายประเภท</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- food item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#foodModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../upload/ยำปลากระป๋อง.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ยำปลากระป๋อง</div>
                                <div class="portfolio-caption-subheading text-muted">Canned fish salad</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Food item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#foodModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../upload/ผัดผักรวมหมูกรอบ.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ผัดผักรวมหมูกรอบ</div>
                                <div class="portfolio-caption-subheading text-muted">Stir Fried Mixed Vegetables with Pork</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Food item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#foodModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../upload/ผัดถั่วลันเตากุ้ง.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ผัดถั่วลันเตากุ้ง</div>
                                <div class="portfolio-caption-subheading text-muted">Stir Fried Green Peas with Shrimp</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#foodModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../upload/ปลาหมึกผัดไข่เค็ม.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ปลาหมึกผัดไข่เค็ม</div>
                                <div class="portfolio-caption-subheading text-muted">Stir Fried Squid with Salted Egg</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#foodModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../upload/ก๋วยเตี๋ยวคั่วไก่.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ก๋วยเตี๋ยวคั่วไก่</div>
                                <div class="portfolio-caption-subheading text-muted">Roasted Chicken Noodles</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#foodModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="../upload/ไข่เจียวกุ้งสับ.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ไข่เจียวกุ้งสับ</div>
                                <div class="portfolio-caption-subheading text-muted">Minced Shrimp Omelette</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="story">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">จุดเริ่มต้น</h2>
                    <h3 class="section-subheading text-muted">จุดเริ่มต้นของเว็บไซต์สุ่มตามมอาหารนี้!</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img/about/Intel_Logo.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>21 กรกฏาคม 2022</h4>
                                <h4 class="subheading">Intel ประกาศจัดกิจกรรม</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Intel ได้ประกาศจัดกิจกรรมบนหน้าเพจ facebook ของตนเอง ศึกของคนรักงานเริ่มขึ้นแล้ว โดยจะแบ่งเป็นสายต่างๆ ใครชอบหรือถนัดแบบไหน ก็ให้เข้าร่วมกิจกรรมจากเพจนั้นๆ<br><b>ต้องขอขอบคุณทาง Intel ด้วยจริงๆ ที่จัดกิจกรรมดีๆ สนุกๆ และยังได้ของรางวัลอีกด้วย!!</b></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img/about/borntodev_logo.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>21 กรกฏาคม 2022</h4>
                                <h4 class="subheading">BorntoDev ประกาศเชิญร่วมสนุกกิจกรรม</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">ร่วมสนุกกับกิจกรรม Intel Evo Challenge “ศึกดวล Dev ไวเหนือแสง ไม่แฮงค์แน่นอน” ซึ่งเป็นการสร้างเว็บไซต์ หรือเว็บแอปอะไรก็ได้ ที่ทำให้ชีวิตดีกว่าเดิม ไม่จำกัดภาษาและโปรแกรมที่ใช้<br><b>ซึ่งครั้งแรกที่ผมได้เห็นนั้นก็ตาลุกวาวเลย! เราจะได้มีโอกาศมีโน๊ตบุ๊คดีๆใช้กับเค้าซักที</b></p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img/about/null.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h5>22 กรกฏาคม - 27 สิงหาคม 2022</h5>
                                <h4 class="subheading">ไม่มีความคืบหน้า</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">ไม่มีความคืบหน้าใดๆ<br><b>เนื่องจากผมติดภารกิจหลายอย่าง รวมถึงตัวผมเองไม่มีโน๊ตบุ๊คส่วนตัวด้วย ต้องยืมของบริษัทและของแฟนมาร่วมกิจกรรมเลยทีเดียว!</b></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img/about/idea.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>28 สิงหาคม 2022</h4>
                                <h4 class="subheading">ไฟในการทำงานเริ่มมา!!</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><b>เป็นวันแรกที่ได้เริ่มคิดไอเดีย และพัฒนาลงมือเขียนเว็บ</b> ซึ่งจากประสบการณ์ตรง เวลาจะสั่งอาหารทีไร คิดไม่ออกสักทีว่าจะกินอะไรดี เพราะส่วนตัวผมเองนั้นเป็นคนไม่กินเผ็ด ทำให้ตัวเลือกถูกตัดลดลงมาพอสมควร (ก็ประเทศไทยอะเนอะ มีแต่ของเผ็ดๆทั้งน้านน) เลยอยากเริ่มลองเขียนเว็บโปรเจคสุ่มอาหารดูสักครั้งนึง</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="../assets/img/about/success.png" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>09 กันยายน 2022</h4>
                                <h4 class="subheading">ในที่สุดวันนี้ก็มาถึง!</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><b>เป็นวันที่ทุกอย่างที่ทำมาทั้งหมด เริ่มจะเห็นผลชัดเจนแล้ว</b> จึงได้เริ่มนำอัพโหลดขึ้นเซิฟเวอร์ เพื่อให้สามารถมองเห็นแบบออนไลน์ได้ จนถึงตอนนี้เพื่อนๆพี่ๆ ก็คงเห็นเว็บไซต์นี้แล้ว หวังว่าจะเป็นประโยชน์กับทุกคนครับ</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                เรื่องราว
                                <br />
                                ทั้งหมด
                                <br />
                                ของเว็บไซต์นี้!
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- About Us-->
        <section class="page-section bg-light" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">เกี่ยวกับผมเอง</h2>
                    <h3 class="section-subheading text-muted">ขอบคุณอย่างซึ้งใจที่เลื่อนมาถึงตรงนี้</h3>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="../assets/img/team/Boss.jpg" alt="..." />
                            <h4>Thanakorn Weeramanokun</h4>
                            <p class="text-muted">CEO</p>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/thanakorn_ssod/" target ="_blank" ria-label="Thanakorn Weeramanokun Instagram Profile"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/thanakornweeramanokun/" target ="_blank" aria-label="Thanakorn Weeramanokun Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@thanakorn_b055/" target ="_blank" aria-label="Thanakorn Weeramanokun TikTok Profile"><i class="fab fa-tiktok"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/c/PianoThanakorn/" target ="_blank" aria-label="Thanakorn Weeramanokun Youtube Profile"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/user/RabbitComeGamer/" target ="_blank" aria-label="Thanakorn Weeramanokun Youtube Profile"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">ขอแนะนำตัวนะครับ ผมชื่อ นาย ธนกร วีระมโนกุล (บอส) ตอนนี้อายุ 23 ปีแล้ว รู้สึกเริ่มจะแก่ขึ้น 5555
                    ต้องขอบอกเลยว่าเว็บไซต์นี้เป็นเว็บไซต์แรกเลยที่ผมได้เริ่มลงมือทำแบบจริงๆจังๆ เพราะส่วนตัวอยากเริ่มฝึกพัฒนาเขียนเว็บอยู่แล้วด้วย พอเลื่อนฟีดมาเจอกิจกรรม Intel x BorntoDev แหม พลาดไม่ได้แล้วเรา อยากได้โน๊ตบุ๊คด้วยไงประเด็น 555 แต่ถึงยังไงก็ต้องขอขอบคุณที่จัดกิจกรรมร่วมสนุกดีๆแบบนี้นะครับ ถือว่าเป็นจุดเริ่มต้นสำหรับการฝึกฝนพัฒนาด้านการเขียนเว็บของผมเลยครับ<br>
                        <br>หากมีคนอ่านมาจนถึงบรรทัดนี้ หวังว่าท่านจะได้ทดลองใช้ระบบสุ่มอาหารที่ผมได้ทำการพัฒนาขึ้นมา และขอให้เป็นประโยชน์ต่อการดำเนินในชีวิตประจำวันนะครับผม และแน่นอนว่าถ้ามีโอกาส! ผมจะเอามาพัฒนาต่อยอดเป็นเว็บไซต์ที่ให้มีคนใช้งานจริงให้ได้เลยครับ!!<br><br>
                        ปล. หากผมได้รางวัล สัญญาว่าจะกลับมาทำช่อง Youtube ของตัวเองครับ เพราะตอนนี้ไม่มีคอม 555</p></div>
                </div>
            </div>
        </section>
        <!-- Clients-->
        <div class="py-5">
            <div class="container">
                <center>Sponsored by</center>
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-6 my-3">
                        <a href="https://facebook.com/IntelThailand/" target="_blank"><img class="img-fluid img-brand d-block mx-auto" src="../assets/img/logos/Intel_logo_text.png" alt="..." aria-label="Intel Logo" /></a>
                    </div>
                    <div class="col-md-4 col-sm-6 my-3">
                        <a href="https://facebook.com/IntelThailand/" target="_blank"><img class="img-fluid img-brand d-block mx-auto" src="../assets/img/logos/EVO-PL_1_color.png" alt="..." aria-label="Intel EVO Logo" /></a>
                    </div>
                    <div class="col-md-4 col-sm-6 my-3">
                        <a href="https://facebook.com/borntodev/" target="_blank"><img class="img-fluid img-brand d-block mx-auto" src="../assets/img/logos/borntodev_logo_text.png" alt="..." aria-label="BorntoDev Logo" /></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">ติดต่อเรา</h2>
                    <h3 class="section-subheading text-muted">เผื่อมีสปอนเซอร์อยากจะเข้าอะนะ</h3>
                </div>
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">จำเป็นต้องกรอกชื่อ</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">จำเป็นต้องกรอกอีเมล</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">รูปแบบอีเมลไม่ถูกต้อง</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">จำเป็นต้องกรอกเบอร์โทรศัพท์</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">จำเป็นต้องกรอกข้อความ</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">ส่งแบบฟอร์มสำเร็จ!</div>
                            <br />
                            <a href="https://facebook.com/thanakornweeramanokun/" target="_blank">https://facebook.com/thanakornweeramanokun</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">ส่งข้อความไม่สำเร็จ!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">ส่งข้อความ</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Sum Tam Sung 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/thanakorn_ssod/" target ="_blank" ria-label="Thanakorn Weeramanokun Instagram Profile"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/thanakornweeramanokun/" target ="_blank" aria-label="Thanakorn Weeramanokun Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.tiktok.com/@thanakorn_b055/" target ="_blank" aria-label="Thanakorn Weeramanokun TikTok Profile"><i class="fab fa-tiktok"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/c/PianoThanakorn/" target ="_blank" aria-label="Thanakorn Weeramanokun Youtube Profile"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/user/RabbitComeGamer/" target ="_blank" aria-label="Thanakorn Weeramanokun Youtube Profile"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Food Modals-->
        <!-- Food item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="foodModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ยำปลากระป๋อง</h2>
                                    <p class="item-intro text-muted">Canned fish salad</p>
                                    <img class="img-fluid d-block mx-auto" src="../upload/ยำปลากระป๋อง.jpg" alt="..." />
                                    <p>เมนูสุดคลาสสิคอย่าง ยำปลากระป๋อง ที่ช่วยชีวิตเราได้หลายครั้งหลายครา ในยามที่ไม่มีอะไรกิน เงินเดือนหมด และต้องประหยัด ก็ต้องพึ่งยำปลากระป๋องอยู่บ่อยครั้ง แต่ถึงอย่างไร ยำปลากระป๋องก็สามารถกินได้ทุกโอกาส ไม่ต้องประหยัดก็กินได้เพราะความแซ่บความอร่อยที่หยุดไม่อยู่</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Type of food:</strong>
                                            Mix
                                        </li>
                                        <li>
                                            <strong>Credit article:</strong>
                                            food.mthai.com/author/jirapa9140
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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
        <!-- Food item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="foodModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ผัดผักรวมหมูกรอบ</h2>
                                    <p class="item-intro text-muted">Stir Fried Mixed Vegetables with Pork</p>
                                    <img class="img-fluid d-block mx-auto" src="../upload/ผัดผักรวมหมูกรอบ.jpg" alt="..." />
                                    <p>เป็นเมนูอาหารไทยสำหรับกินกับข้าวที่อร่อยมาก โดยเมนูนี้จะมีส่วนผสมหลักๆแค่ผักรวมต่างๆ มีหมูกรอบ มีน้ำมันสำหรับผัดและมีส่วนผสมเครื่องปรุงต่างๆที่ทำให้ผัดผักรวมใส่หมูกรอบของเรามีรสชาติอร่อย ถ้าใครกำลังมองหาเมนูอาหารไทย แนะนำให้ลองสั่งผัดผักรวมใส่หมูกรอบ รับรองว่าจะต้องติดใจอย่างแน่นอน</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Type of food:</strong>
                                            Fried
                                        </li>
                                        <li>
                                            <strong>Credit article:</strong>
                                            blog.samanthasmommy.com
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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
        <!-- Food item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="foodModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ผัดถั่วลันเตากุ้ง</h2>
                                    <p class="item-intro text-muted">Stir Fried Green Peas with Shrimp</p>
                                    <img class="img-fluid d-block mx-auto" src="../upload/ผัดถั่วลันเตากุ้ง.jpg" alt="..." />
                                    <p>ถั่วลันเตา..เป็นผักที่หาซื้อง่ายและยังมากด้วยคุณประโยชน์มากมาย เมื่อนำมาทำเมนูอาหารต่างๆ ให้รสชาติอร่อยกรุบกรอบ และด้วยเพราะมันเป็นผักหวานกรุบใครกินแล้วจึงค่อนข้างติดอกติดใจ</p>
                                    <ul class="list-inline">
                                        <li>
                                        <strong>Type of food:</strong>
                                            Fried
                                        </li>
                                        <li>
                                            <strong>Credit article:</strong>
                                            เมนูอาหาร.com
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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
        <!-- Food item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="foodModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ปลาหมึกผัดไข่เค็ม</h2>
                                    <p class="item-intro text-muted">Stir Fried Squid with Salted Egg</p>
                                    <img class="img-fluid d-block mx-auto" src="../upload/ปลาหมึกผัดไข่เค็ม.jpg" alt="..." />
                                    <p>เรียกได้ว่าเป็นเมนูที่นิยมไม่มีตกจริง ๆ กับ “ปลาหมึกผัดไข่เค็ม” ปลาหมึกเนื้อเหนียวนุ่ม คลุกเคล้าไข่แดงเค็มมัน ๆ หอม ๆ จนกลายเป็นซอสเข้มข้น คลุกกับข้าวสวยร้อน ๆ เอาอะไรมาแลกก็ไม่ยอม! อยากกินกันแล้วใช่ไหมล่ะ เรารีบไปสั่งกันเลยดีกว่า!</p>
                                    <ul class="list-inline">
                                    <li>
                                        <strong>Type of food:</strong>
                                            Fried
                                        </li>
                                        <li>
                                            <strong>Credit article:</strong>
                                            wongnai.com โดย อดีตพนักงานวงในทั่นหนึ่ง
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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
        <!-- Food item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="foodModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ก๋วยเตี๋ยวคั่วไก่</h2>
                                    <p class="item-intro text-muted">Roasted Chicken Noodles</p>
                                    <img class="img-fluid d-block mx-auto" src="../upload/ก๋วยเตี๋ยวคั่วไก่.jpg" alt="..." />
                                    <p>ก๋วยเตี๋ยวคั่วไก่ เมนูเบสิคแสนอร่อยในตำนาน ก็เรียกได้ว่าเป็นเมนูที่ เด็กกินได้ ผู้ใหญ่กินอร่อย หอมกะทะนิด ๆ เส้นเกรียมหน่อย ๆ เมนูนี้เอาใจสายเส้นกันไปเลยเต็ม ๆ !</p>
                                    <ul class="list-inline">
                                        <li>
                                        <strong>Type of food:</strong>
                                            Noodles
                                        </li>
                                        <li>
                                            <strong>Credit article:</strong>
                                            eatandsleep.blog
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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
        <!-- Food item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="foodModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="../assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">ไข่เจียวกุ้งสับ</h2>
                                    <p class="item-intro text-muted">Minced Shrimp Omelette</p>
                                    <img class="img-fluid d-block mx-auto" src="../upload/ไข่เจียวกุ้งสับ.jpg" alt="..." />
                                    <p>ไข่เจียวกุ้งสับ เมนูอาหารยอดนิยม ที่หลายท่านชื่นชอบ รสชาติกลมกล่อมหอมอร่อย กรอบนอกนุ่มใน ไข่เจียวหอมๆ กับกุ้งนุ่มๆ สีเหลืองสวยงาม หอมอร่อยเข้ากัน เป็นอีกหนึ่งเมนูที่อยากแนะนำ ให้ทุกท่านลองทำรับประทานกัน</p>
                                    <ul class="list-inline">
                                    <li>
                                        <strong>Type of food:</strong>
                                            Fried
                                        </li>
                                        <li>
                                            <strong>Credit article:</strong>
                                            thai-thaifood.com
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
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

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

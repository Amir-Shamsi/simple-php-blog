<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fa" >

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Post blog</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="../assets/img/logo/icon.png">
    <link href="../assets/blog-img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="../assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="../css/blog-style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Tempo - v2.1.0
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
            background: #ffffff;
        }
        /* Track */
        ::-webkit-scrollbar-track {
            /*box-shadow: inset 0 0 5px black;*/
            border-radius: 10px;
        }
        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #e8d385;
            border-radius: 10px;
        }
        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #716440;
        }
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">


        <img src="../assets/img/logo/icon.png" onclick="goToMain()" style="width: 50px; cursor: pointer" href="../" class=" logo mr-auto comment-img  float-left" alt="">
        <script> function goToMain() {
               window.location.href = "../index.php";
            } </script>
      <nav class="nav-menu d-none d-lg-block">
        <ul>

            <? if(isset($_SESSION['userName'])){ profileMenu(); }
            else{?>
            <li class="drop-down fa-font" ><a style="cursor: pointer">ثبت نام/ ورود</a>
                <ul>

                    <li><a href="../signup&login/signup.php"  >ثبت نام</a></li>
                    <li><a href="../signup&login/login.php">ورود</a></li>
                </ul>
            </li>
            <?}?>


            <li><a href="../#contact">ارتباط با ما</a></li>
            <li ><a href="../search/search.php">جستجو</a></li>
            <li><a href="../#about">درباره</a></li>
            <li><a href="../">خانه</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container" dir="rtl">

        <ol>
          <li><a href="../index.php">خانه</a></li>
          <li><a href="../search/search.php">جستجوی مقاله</a></li>
        </ol>
        <h2 style="margin-left: 90%">مقاله ها</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog" >
      <div class="container">

        <div class="row">

          <div class="col-lg-4 entries">

              <div class="sidebar">
                  <h3 style="text-align: right" class="sidebar-title">جستجو</h3>
                  <div class="sidebar-item search-form" dir="rtl">
                      <form  method="post">
                          <input type="text" dir="rtl" name="searchKey" required>
                          <button name="btnSearch" type="submit"><i class="icofont-search"></i></button>
                      </form>
                        <? if(isset($_POST['btnSearch'])){ ?>
                          <script> window.location.href = ("../search/search.php?key=<? echo $_POST['searchKey'] ?>#portfolio") </script>
                        <?}?>
                  </div><!-- End sidebar search formn-->
<!--
                  <h3 style="margin-left: 80%" class="sidebar-title">Categories</h3>
                  <div class="sidebar-item categories">
                      <ul>
                          <li ><a href="#">General <span>(25)</span></a></li>
                          <li><a href="#">Lifestyle <span>(12)</span></a></li>
                          <li><a href="#">Travel <span>(5)</span></a></li>
                          <li><a href="#">Design <span>(22)</span></a></li>
                          <li><a href="#">Creative <span>(8)</span></a></li>
                          <li><a href="#">Educaion <span>(14)</span></a></li>
                      </ul>

                  </div>
-->
                  <h3 style="text-align: right; margin-bottom: 10%; margin-top: 15%;" dir="rtl"   class="sidebar-title">آخرین مطالب</h3>
                  <div class="sidebar-item recent-posts" dir="rtl">
                      <? showRecentArticles(); ?>

                  </div><!-- End sidebar recent posts-->

                  <h3 style="text-align: right" class="sidebar-title">تگ ها</h3>
                  <div class="sidebar-item tags" style="text-align: center" dir="rtl">
                      <ul>
                              <li><a href="#">App</a></li>
                          <li><a href="#">IT</a></li>
                          <li><a href="#">Business</a></li>
                          <li><a href="#">Business</a></li>
                          <li><a href="#">Mac</a></li>
                          <li><a href="#">Design</a></li>
                          <li><a href="#">Office</a></li>
                          <li><a href="#">Creative</a></li>
                          <li><a href="#">Studio</a></li>
                          <li><a href="#">Smart</a></li>
                          <li><a href="#">Tips</a></li>
                          <li><a href="#">Marketing</a></li>
                      </ul>

                  </div><!-- End sidebar tags-->

              </div><!-- End sidebar -->

          </div><!-- End blog entries list -->

          <div class="col-lg-8" style="text-align: right" >

              <? article(); ?>
              <!-- End blog entry -->



              <div class="blog-comments">
                  <? comments();

                  if(isset($_SESSION['userName'])){
                      leaveComment();}
                  ?>

              </div><!-- End blog comments -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" >

    <div class="footer-top" style="height: 150px;">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
              <img src="../assets/img/logo/icon.png" style="width: 100px" class="comment-img  float-left" alt="">


          </div>


            <div class="col-lg-2 col-md-6 footer-links" dir="rtl" style="margin-left: 20%">
                <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="#">طریقه استفاده</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="#">قوانین و مقررات</a></li>
            </ul>
            </div>
            <div class="col-lg-3 col-md-6 footer-links" dir="rtl">
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="../">خانه</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="../#about">درباره</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="../#contact">ارتباط با ما</a></li>

                </ul>
            </div>
            <!--
                      <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                          <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                      </div>
            -->
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>AmirShamsi</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/astro_emir" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://github.com/emirshamsi" class="github"><i class="bx bxl-github"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/jquery/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/venobox/venobox.min.js"></script>
  <script src="../assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="../js/blog-main.js"></script>

</body>

</html>

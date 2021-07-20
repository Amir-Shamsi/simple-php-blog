<html>


<html lang="fa">
<head>
    <link rel="icon" href="assets/img/logo/icon.png">
    <title>Home</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
          type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css"/>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet"/>
    <link href="css/sign-style.css" rel="stylesheet"/>


    <!-- Scroll Bar! -->
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
            background: black;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            /*box-shadow: inset 0 0 5px black;*/
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #b80000;
            border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #720000;
        }
    </style>

<body id="page-top">


<script>
    function goLogin() {
        window.location.href = "/signup&login/login.php";
    }
</script>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="  navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/logo/logo.png" alt=""/></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <?
                session_start();
                if ($_SESSION['userName']) {
                    profileTab();
                } else {
                    signLog();
                }
                ?>
                <li class="nav-item"><a style="width: 100px" class="nav-link js-scroll-trigger" href="#contact">تماس با ما</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">درباره</a></li>
                <li class="nav-item"><a style="width: 100px" class="nav-link js-scroll-trigger" href="#portfolio">مقاله ها</a></li>

            </ul>
        </div>
    </div>
</nav>

<!--***************************************ADD ARTICLE**************************************-->

<div class="portfolio-modal modal fade" id="addArc" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content" style="background-color: #fff6da">
            <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal"/></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">داشبورد</h2>
                            <img class="img-fluid d-block mx-auto" src="" alt=""/>
                            <!---->
                            <form method="post" enctype="multipart/form-data">
                                <div class="container mt-3">
                                        <div class="input-group flex-nowrap">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                      style="background-color: #c4b15d; color: #ffffff" id="addon-wrapping">Title</span>
                                            </div>
                                            <input type="text" class="form-control" name="title"
                                                   aria-describedby="addon-wrapping">
                                        </div>

                                        <div class="input-group" style="margin-bottom: 30px; margin-top: 30px">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"
                                                      style="background-color: #c4b15d; color: #ffffff"><h6>Description Area</h6></span>
                                            </div>
                                            <textarea name="fullText" style="height: 300px; background-color: #ffffff; "
                                                      class="form-control" aria-label="With textarea"></textarea>
                                        </div>
                                        <h6>Full picture:</h6>
                                        <div class="custom-file mb-3">
                                            <input type="file" style="background-color: #c4b15d;" accept="image/*"
                                                   id="customFile" name="fullPic">
                                        </div>

                                </div>
                                <!---->
                                <button name="btnAr" class="btn btn-primary" style="background-color: #3434bb" type="submit">
                                    <i class="fas fa-check mr-1"></i>
                                    Save it
                                </button>
                                <button class="btn btn-primary" style="background-color: #bb3434" data-dismiss="modal"
                                        type="button">
                                    <i class="fas fa-times mr-1"></i>
                                    Cancel
                                </button>

                                <? if (isset($_POST['btnAr']))
                                    uploadArticle(); ?>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--*****************************************************************************************-->
<!-- Masthead-->
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">به این وبسایت خوش آمدید</div>
        <div class="masthead-heading text-uppercase">هیچ وقت برای یادگیری دیر نیست</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio">بیشتر</a>
    </div>
</header>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 style="font-family: Shabnam" class="section-heading text-uppercase">آخرین مقاله ها</h2>
        </div>
        <div class="row">
            <?php infoArticles(); ?>
        </div>
        <form action="search/search.php" method="POST">
            <div class="text-center">
                <button type="submit" name="btnCalc" class="btn btn-primary btn-xl text-uppercase">جستوجو در مقاله ها</button>
            </div>
        </form>
    </div>
</section>
<!-- About-->
<section class="page-section bg-light" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">درباره</h2>

        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">

                    <h4></h4>
                    <p class="text-muted"></p>

                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="assets/img/team/1.jpg" alt=""/>
                    <h4>امیر شمسی</h4>
                    <p class="text-muted">دانشجوی مهندسی کامپیوتر</p>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">
                    در حال حاضر ترم چهار رشته ی مهندسی کامپیوتر در دانشگاه شیراز میباشم. این سایت به صورت آزمایشی میباشد و در حال پیشرفت است.
                </p></div>
        </div>
    </div>
</section>
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">ارتباط با ما</h2>
            <h1 class="section-heading text-uppercase"><br></h1>
        </div>
        <form id="contactForm" name="sentMessage" novalidate="novalidate" method="POST" dir="rtl">
            <div class="row align-items-stretch mb-5" style="font-family: Shabnam">
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="name" type="text" placeholder="* نام و نام خانوادگی" required="required"
                               data-validation-required-message="Please enter your name."/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="email" type="email" placeholder="* ایمیل"
                               required="required" data-validation-required-message="Please enter your email address."/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group mb-md-0">
                        <input class="form-control" id="phone" type="tel" placeholder="شماره تلفن"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <textarea class="form-control" id="message" placeholder="* لطفا پیغام خود را اینجا وارد فرمایید" required="required"
                                  data-validation-required-message="Please enter a message."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                </div>
            </div>


            <div class="text-center">
                <div id="success"></div>
                <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit">
                    ارسال
                </button>
            </div>


        </form>
    </div>
</section>
<!-- Footer -->
<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left">Made by AmirShamsi</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right" style="font-family: Shabnam;">
                <a class="mr-3" style="color: #9c8d01" href="#!">قوانین سایت</a>
                <a href="#!" style="margin-right: 10%; color: #9c8d01">طریقه استفاده از سایت</a>
            </div>
        </div>
    </div>
</footer>
<!-- Article Modals-->
<?php full_ArticleDesc(); ?>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="assets/mail/jqBootstrapValidation.js"></script>
<script src="assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>

</html>

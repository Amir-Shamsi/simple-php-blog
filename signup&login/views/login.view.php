<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="../css/sign-style.css" rel="stylesheet" />
    <link rel="icon" href="../assets/img/logo/icon.png">
    <title>Login</title>
    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 0;
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
</head>
<body>
<form id="allElem" method="post" onsubmit="return checkInput()">
    <div class="container register" >
        <div class="row">
            <div class="col-md-3 register-left">
                <img style="cursor: pointer" onclick="goToMain()" src="../assets/img/logo/logo.png" alt="">
                <script> function goToMain() {
                        this.open("../index.php");
                    } </script>
                <h3 style="color: whitesmoke">ورود به حساب کاربری</h3>
                <p style="color: whitesmoke">اگر حساب کاربری ندارید میتوانید در قسمت پایین ثبت نام کنید.</p>
                <input type="button" onclick="goToSignUp()" value="ثبت نام"><br>
            </div>
            <script>
                function goToSignUp() {
                    window.location.href = "signup.php";
                }
            </script>
            <div class="col-md-9 register-right"  style="background-color: #ececec; margin-top: -4%">

                <div class="tab-content" id="myTabContent">

                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <h3 class="register-heading">برای ورود نام کاربری و رمز خود را وارد کنید</h3>
                        <div class="row register-form" style="margin-left: 25%;" >
                            <div class="col-md-6" >
                                <div class="form-group">
                                    <input type="text" name="userName" dir="rtl" style="background-color: #f8f8f8;" class="form-control" placeholder="نام کاربری" required >
                                </div>
                                <div class="form-group">
                                    <input type="password" name="passWord" dir="rtl" style="background-color: #f5f5f5; " class="form-control" placeholder="رمز عبور"  required >
                                </div>
                            </div>
                            <script>
                                input.addEventListener("passWord", function(event) {
                                    // Number 13 is the "Enter" key on the keyboard
                                    if (event.keyCode === 13) {
                                        // Cancel the default action, if needed
                                        event.preventDefault();
                                        // Trigger the button element with a click
                                        document.getElementById("btnLogin").click();
                                    }
                                });
                            </script>

                            <input name="btnLogin" type="submit"  style="margin-top: 10%;float: right;
                                                                        border: none;
                                                                        border-radius: 1.5rem;
                                                                        padding: 2%;
                                                                        background: #651d00;
                                                                        color: #ffffff;
                                                                        font-weight: 600;
                                                                        margin-right: 50%;
                                                                        width: 50%;
                                                                        cursor: pointer;" value="ثبت و ورود">

                            <? if($_POST['btnLogin']){
                                checkUser();
                            } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?
            if ($_POST['btnUser']) {
                signUp('user');
            } else if ($_POST['btnAdmin']) {
                signUp('admin');
            }
            ?>

        </div>

    </div>
</form>

<div class="container" style="margin-top: -3%">
    <div class="row align-items-center">
        <a class="col-lg-4 text-lg-left" href="../index.php" style="color: wheat; font-size: 10pt">برو به خانه</a>
        <div class="col-lg-4 my-3 my-lg-0">

        </div>
        <div class="col-lg-4 text-lg-right">

            <a style="color: grey; " >Made by AmirShamsi</a>
        </div>
    </div>
</div>

<script type="text/javascript"></script>
</body>
</html>


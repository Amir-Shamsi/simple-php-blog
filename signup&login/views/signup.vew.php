<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="../css/sign-style.css" rel="stylesheet" />
    <link rel="icon" href="../assets/img/logo/icon.png">
    <title>Sign Up</title>

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
            <h3 style="color: whitesmoke">ثبت نام</h3>
            <p style="color: whitesmoke">اگر قبلا ثبت نام کرده اید میتوانید با کلیک روی ورود، وارد شوید.</p>
            <input type="button" name="" onclick="goToLogin()" value="ورود"><br>
        </div>
        <script>
            function goToLogin() {
                window.location.href = "login.php";
            }
        </script>

        <div class="col-md-9 register-right"  style="background-color: #ececec; ">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist" >
                <li class="nav-item">
                    <a class="nav-link active" onclick="setMode(0)" id="home-tab" data-toggle="tab" href="#home" style="color: whitesmoke" role="tab" aria-controls="home" aria-selected="true">کاربر</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" onclick="setMode(1)" id="profile-tab" data-toggle="tab" href="#profile" style="color: whitesmoke" role="tab" aria-controls="profile" aria-selected="false">ادمین</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    <h3 class="register-heading">ثبت نام کاربر</h3>
                    <div class="row register-form" >
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" dir="rtl" name="sfirstN" style="background-color: #f8f8f8;" class="form-control" placeholder="* نام" >
                            </div>
                            <div class="form-group">
                                <input type="text" dir="rtl" name="slastN" style="background-color: #f5f5f5" class="form-control" placeholder="* نام خانوادگی"  >
                            </div>
                            <div class="form-group">
                                <input type="text" dir="rtl" name="suserN" style="background-color: #f8f8f8;" class="form-control" placeholder="* نام کاربری" >
                            </div>
                            <div class="form-group">
                                <input type="password" dir="rtl" name="spwd" style="background-color: #f8f8f8" class="form-control" placeholder="* رمز عبور" >
                            </div>

                            <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline">
                                        <input id="smale" type="radio" name="gender" value="male" checked="">
                                        <span> مرد </span>
                                    </label>
                                    <label class="radio inline">
                                        <input id="sfemale" type="radio" name="gender" value="female">
                                        <span> زن </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="password" name="spwdR"  dir="rtl" style="background-color: #f8f8f8;" class="form-control" placeholder="* تکرار رمز عبور" >
                            </div>
                            <div class="form-group">
                                <input type="email" name="semail" dir="rtl" id="semail"  style="background-color: #f8f8f8" class="form-control" placeholder="* ایمیل" >
                            </div>
                            <div class="form-group" >
                                <input type="text" name="sphone" dir="rtl" style="background-color: #f8f8f8" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="شماره تماس">
                            </div>

                            <script>
                                function checkInput() {
                                    if(!document.getElementById("sfirstN").value){
                                        alert("please fill out all fields");
                                        return false;
                                    }
                                    return true;
                                }
                                checkInput();
                            </script>


                            <input name="btnUser" type="submit"  style="margin-top: 27.5%;" class="btnRegister" value="ثبت اطلاعات">

                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">ثبت نام ادمین</h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="afirstN" dir="rtl" type="text" style="background-color: #f8f8f8" class="form-control" placeholder="* نام" >
                            </div>
                            <div class="form-group">
                                <input name="alastN" dir="rtl" type="text" style="background-color: #f8f8f8" class="form-control" placeholder="* نام خانوادگی" >
                            </div>

                            <div class="form-group">
                                <input name="auserN" dir="rtl" type="text" style="background-color: #f8f8f8;" class="form-control" placeholder="* نام کاربری" >
                            </div>
                            <div class="form-group">
                                <input name="apwd" dir="rtl" type="password" style="background-color: #f8f8f8" class="form-control" placeholder="* رمز عبور"  >
                            </div>



                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="apwdR" dir="rtl"  type="password" style="background-color: #f8f8f8" class="form-control" placeholder="* تکرار رمز عبور" >
                            </div>
                            <div class="form-group">
                                <input  name="aphone" dir="rtl"  type="text" style="background-color: #f8f8f8" maxlength="10" minlength="10" class="form-control" placeholder="* شماره تماس" >
                            </div>

                            <div class="form-group">
                                <input  name="aemail" dir="rtl"  type="email" style="background-color: #f8f8f8" class="form-control" placeholder="* ایمیل" >
                            </div>

                            <input name="btnAdmin" type="submit" id="admin" style="margin-top: 27.5%" class="btnRegister" value="ثبت اطلاعات">
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


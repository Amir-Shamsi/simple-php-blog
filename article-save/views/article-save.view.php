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
<form id="allElem" method="post" >
    <div class="container register" >
        <div class="row">
            <div class="col-md-3 register-left">
                <img style="cursor: pointer" onclick="goToMain()" src="../assets/img/logo/logo.png" alt="">
                <script> function goToMain() {
                        this.open("../index.php");
                    } </script>
            </div>
            <h2>The Article Information</h2>
            <div class="col-md-9"  style="border-top-left-radius: 10% 50%;border-bottom-left-radius: 10% 50%;margin-top: -8%;" ">
            <?php newArticleInfo(); ?>
                <div class="form-group">
                    <input style=" width: 100px; background-color: #786900;
                     text-align: center; margin-left: 50%; cursor: pointer; color: whitesmoke;
                        border: none; border-radius: 1.5rem; padding: 2%;" onclick="loadHome()" name="" value="Home"><br>
                    <script>
                        function loadHome() {
                            window.location.href = "../";
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="container" style="margin-top: -3%">
    <div class="row align-items-center">
        <a class="col-lg-4 text-lg-left" href="../index.php" style="color: wheat; font-size: 10pt">Home</a>
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


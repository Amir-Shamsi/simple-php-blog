<?php
session_start();

function profileTab(){
    ?>
    <div class="btn-group" style="margin-right: 5%">
        <button type="button" class="  btn dropdown-toggle dropdown-toggle-split" style="background-color: rgba(28,116,48,0.75); color: #f5f5f5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <? echo $_SESSION['fullName'] ?>
        </button>
        <div class="dropdown-menu" dir="rtl" style="text-align: right">
            <? if($_SESSION['isAdmin']){ ?>
                <a class="dropdown-item" onclick="goDashboard(1);" data-toggle="modal" href="signup&login/dashboard">داشبورد</a>
            <? }else{ ?>
                <a class="dropdown-item" onclick="goDashboard(0);" data-toggle="modal" href="signup&login/dashboard">داشبورد</a>
            <? } ?>
            <div class="dropdown-divider"></div>
            <form action="signup&login/logout/?recent= " method="POST">
                <button type="submit" name="logout" class="dropdown-item" >خروج از حساب</button>
            </form>
            <script>
                function goDashboard(num) {
                    if(num > 0){
                        window.location.href = "signup&login/dashboard/admin";
                    }
                    else {
                        window.location.href = "signup&login/dashboard/user";
                    }
                }
            </script>
        </div>
    </div>
    <?
}


function signLog(){?>
        <a class="btn btn-primary  text-uppercase js-scroll-trigger" href="signup&login/signup.php" style="font-size: 10pt;
         text-align: center ; width: 80px;border: none ;background-color: rgba(0,0,0,0.0); color: whitesmoke">ثبت نام</a>
    <a class="btn btn-primary  text-uppercase js-scroll-trigger" href="signup&login/login.php" style="font-size: 10pt ;
     text-align: center; margin-right: 5%; width: 80px; border: none ; background-color: rgba(0,0,0,0.0);
     color: whitesmoke">ورود</a>
<?
}

function infoArticles(){
    $servername = "localhost";
    $user = "test";
    $pass = "";
    try{ // articles
        $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user,$pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql_cmd = "SELECT * FROM Articles";
        $articles = $connection->query($sql_cmd);
        $counter = 0;
        $len = 0;
        $counts = $connection->query($sql_cmd);
        foreach ($counts as $item){
            $len++;
        }
        foreach ($articles as $article){
            if ($counter >= $len-3){
                $id = "?id=".($counter*87687);
                ?>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-toggle="modal" onclick="openWind(<?echo $counter*87687?>)"
                           href=blogs/blogTemp.php<?php echo $id?>>
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content" ><i class="fas fa-plus fa-3x"></i></div>
                                <script>
                                    function openWind(num) {
                                        window.open("blogs/blogTemp.php?id=" + num);
                                    }
                                </script>
                            </div>
                            <img class="img-fluid" src=<?php echo $article['pic_link'] ?> alt="" />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading" dir="rtl"><?php echo $article['description'] ?></div>
                        </div>
                    </div>
                </div>

            <?}
            $counter++;
        }
    }
    catch (PDOException $err){
        echo $err->getMessage();
    }
    $connection = null;
}



function contactMe_db(){
    include "assets/mail/contact_me.php";
    $servername = "localhost";
    $user = "test";
    $pass = "";
    try { // articles
        $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $data = db_data();
        $sql_cmd = "INSERT INTO contactme (fname, email, phone, message) VALUES ($data);";
        $connection->exec($sql_cmd);
    }
    catch (PDOException $err){}
    $connection = null;
}

require "views/index.view.php";

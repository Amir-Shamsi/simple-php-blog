<?php
require "views/blog-single.view.php";

session_start();



function profileMenu(){
    ?>

    <li class="drop-down fa-font" ><a style="cursor: pointer"><? echo $_SESSION['fullName'] ?></a>
        <ul dir="rtl" style="text-align: right">
                <li><a href="../signup&login/dashboard/"  >داشبورد</a></li>


                <form action="../signup&login/logout/?recent=blogs/blogTemp.php?id=<?echo $_GET['id'] ?>" method="POST">
                    <button style="font-size: 10pt" type="submit" name="logout" class="dropdown-item" >خروج از حساب</button>
                </form>
        </ul>
    </li>


    <?
}

function article()
{
    $servername = "localhost";
    $user = "test";
    $pass = "";
    try { // articles
        $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql_cmd = "SELECT * FROM Articles";
        $articles = $connection->query($sql_cmd);
    }
    catch (Exception $e){
        echo $e;
    }
    $index = 0;
    foreach ($articles as $article) {
        if (87687*($index) == $_GET['id']){

            ?>
            <article class="entry entry-single">

            <div class="entry-img">
            <img src="../<?php echo $article['pic_link'] ?>" alt=""  class="img-fluid">
        </div>

        <h2 class="entry-title">
            <a dir="rtl"><?php echo $article['description'] ?></a>
        </h2>

        <div class="entry-meta">
            <ul>

                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a ><? echo $article['author'] ?></a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a>
                        <time datetime="<? echo $article['aDate'] ?>"><? echo $article['aDate'] ?></time>
                    </a></li>


            </ul>

        </div>

        <div class="entry-content" dir="rtl">
            <p >

                <?php echo $article['full_text'] ?>
            </p>
        </div>

        <div class="entry-footer clearfix">
            <div class="float-left">


            </div>

            <div class="float-right share">
                <a href="" title="Share on Twitter"><i class="icofont-twitter"></i></a>
                <a href="" title="Share on Facebook"><i class="icofont-facebook"></i></a>
                <a href="" title="Share on Instagram"><i class="icofont-instagram"></i></a>
            </div>

        </div>

        </article>
            <div class="blog-author clearfix"  dir="rtl">
                <img src="../assets/blog-img/person.png" class="rounded-circle float-right" alt="">
                <h4 style="margin-left: 60%"><? echo $article['author'] ?></h4>
                <div class="social-links">
                    <a href="https://twitters.com/#"><i class="icofont-twitter"></i></a>
                    <a href="https://facebook.com/#"><i class="icofont-facebook"></i></a>
                    <a href="https://instagram.com/#"><i class="icofont-instagram"></i></a>
                </div>
                <p> سلام دوستان امیدوترم این متن براتون مفید واقع شده باشه این متن توسط
                    <? echo $article['author'] ?> نوشته شده </p>
            </div><!-- End blog author bio -->
            <?
            break;
        }
        $index++;
    }
}

function comments(){
    $servername = "localhost";
    $user = "test";
    $pass = "";
    try { // articles
        $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql_cmd = "SELECT * FROM comment";
        $commentsList = $connection->query($sql_cmd);
        $counter = 0;
        $index = 0;
        $forCount = $connection->query($sql_cmd);
        foreach ($forCount as $comment){
            if($comment['PostID'] == $_GET['id']){
                $counter++;
            }
        }
         if($counter > 1){
          ?>  <h4 class="comments-count" style="text-align: right" dir="rtl"><? echo $counter ?> کامنت</h4>
        <? }else {?>
            <h4 class="comments-count" style="text-align: right" dir="rtl"><? echo $counter ?> کامنت</h4>

        <? }
        foreach ($commentsList as $comment) {
            if($comment['PostID'] == $_GET['id']){
                ?>
                <div id="comment-<? echo $index ?>" class="comment clearfix">
                    <img src="../assets/blog-img/person.png"  class="comment-img  float-right" alt="" style="margin-left: 3%">
                    <h5 style="text-align: right" dir="rtl"><a href=""><? echo $comment['fName'] ?></a></h5>
                    <time style="text-align: right" dir="rtl" datetime="<? echo $comment['fDate'] ?>"><? echo $comment['fDate'] ?></time>
                    <p style="text-align: right"> <? echo $comment['Content'] ?> </p>

                </div>

                <?
                $index++;
            }
        }
    }
    catch (Exception $e){
            echo $e;
    }
}
function leaveComment(){
//**********************************************************
    ?>
    <div class="reply-form">
        <h4>کامنت بگذارید</h4>
        <form method="post" dir="rtl">
            <div class="row">
                <div class="col-md-6 form-group" >
                    <input name="name" type="text" class="form-control" value=" نام شما : <? echo $_SESSION['fullName'] ?>" disabled placeholder="Your Name">
                </div>
            </div>
            <div class="row">
            </div>
            <div class="row">
                <div class="col form-group">
                    <textarea name="theComment" class="form-control" placeholder="* متن کامنت را وارد کنید" required></textarea>
                </div>
            </div>
            <button type="submit" name="btnLeaveComm" class="btn btn-primary">Post Comment</button>

            <? if(isset($_POST['btnLeaveComm'])){
                uploadComment();
            }?>
        </form>

    </div>
    <?
}

function uploadComment(){
    $servername = "localhost";
    $user = "test";
    $pass = "";
    try { // articles
        $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $nowDate = date("Y-m-d");

        $sql_cmd = "INSERT INTO comment (PostID, fName, Content, fDate)
                                  VALUES ('{$_GET['id']}', '{$_SESSION['fullName']}', '{$_POST['theComment']}',
                                   '$nowDate');";

        $connection->query($sql_cmd);
        ?><script>window.location.href = "../blogs/blogTemp.php?id=<? echo $_GET['id'] ?>";</script><?
    }
    catch (Exception $e){
        echo $e;
    }
}

function showRecentArticles(){

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
                <div class="post-item clearfix" style="margin-bottom: 20%">
                    <img onclick="openWind(<? echo ($counter)*87687?>)" style="cursor: pointer" src="../<?php echo $article['pic_link'] ?>" alt="">
                    <h4 dir= "rtl"><a dir="rtl" href="../blogs/blogTemp.php?id= <? echo $id ?>" onclick="openWind(<? echo ($counter)*87687?>)">
                            <?php echo $article['description'] ?>
                        </a></h4>

                    <script>
                        function openWind(num) {
                            window.open("../blogs/blogTemp.php?id=" + num);
                        }
                    </script>
                    <time ><? echo $article['aDate'] ?></time>
                </div>
                <?
            }
            $counter++;
        }
    }
    catch (Exception $e){
        echo $e;
    }
}

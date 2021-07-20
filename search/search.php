<?php
require "views/article-search.view.php";
function article_search($key = ""){
    $servername = "localhost";
    $user = "test";
    $pass = "";
    try{ // articles
        $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user,$pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql_cmd = "SELECT * FROM articles WHERE description LIKE '%{$_GET['key']}%';";
        $articles = $connection->query($sql_cmd);
        $counter = 0;
        $count = 0;
        $forCount = $connection->query($sql_cmd);
        foreach ($forCount as $i){ $count++;}

            ?>
            <section class="page-section bg-light" id="portfolio"  >
                <div class="container">
                    <div class="text-center" dir="rtl">
                        <h2 class="section-heading text-uppercase"> <?php echo $count ?> نتیجه برای کلمه "<a style="color: red"><?php echo $_GET['key']?></a>" پیدا شد</h2>

                    </div>
                <div class="row">

                    <?
        foreach ($articles as $article){
            $counter++;
            $id = "?id=".(($counter-1)*87687); ?>
           <div class="col-lg-4 col-sm-6 mb-4">
            <div class="portfolio-item">
                <a class="portfolio-link" data-toggle="modal"
                   href=../blogs/blogTemp.php<?php echo $id?> onclick="openWind(<? echo ($counter-1)*87687?>)">
                    <script>
                        function openWind(num) {
                            window.open("../blogs/blogTemp.php?id=" + num);
                        }
                    </script>
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src=../<?php echo $article['pic_link'] ?> alt="" />
                </a>
                <div class="portfolio-caption">
                    <div class="portfolio-caption-heading" dir="rtl"><?php echo $article['description'] ?></div>
                </div>
            </div>
        </div>
        <? } ?>
                    </div>
                </div>
            </section>
        <?

        scroll();
    }
    catch (PDOException $err){
        echo $err->getMessage();
    }
    $connection = null;
}


function footer(){?>
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-left">Made by AmirShamsi</div>
                <div class="col-lg-4 my-3 my-lg-0">
                </div>
                <div class="col-lg-4 text-lg-right" style="font-family: 'Shabnam';">
                    <a class="mr-3" style="color: #9c8d01" href="#!">قوانین سایت</a>
                    <a href="#!" style="margin-right: 10%; color: #9c8d01">طریقه استفاده از سایت</a>
                </div>
            </div>
        </div>
    </footer><?
}
<?php
session_start();

$servername = "localhost";
$user = "test";
$pass = "";
try {
    $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user,$pass);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql_cmd = "SELECT * FROM users";
    $users = $connection->query($sql_cmd);
    $token = $_SESSION['token'];
    $login_status = false;
    foreach ($users as $user){
        if(password_verify($user['userName'].$user['password'], $token) && $_SESSION['isAdmin']){
            $login_status = true;
            break;
        }
    }
    if(!$login_status){
        ?> <script> window.location.href = "../../../" </script> <?
    }
}
catch (Exception $e){
    echo $e;
}

function countTime($key){
    $servername = "localhost";
    $user = "test";
    $pass = "";
    try {
        $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user,$pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql_cmd = "SELECT * FROM users";
        $users = $connection->query($sql_cmd);
        foreach ($users as $user){
            if($user['userName'] == $_SESSION['userName']){
                switch ($key){
                    case "day":
                        return $user['day-time'];
                        break;
                    case "month":
                        return $user['month-time'];
                }
                break;
            }
        }
    }
    catch (Exception $e) {
        echo $e;
    }
}

function countData($key, $fullName){
    $servername = "localhost";
    $user = "test";
    $pass = "";
    $len = 0;
    try {
        $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($fullName == null) {
            switch ($key) {
                case "article":
                    $sql_cmd = "SELECT * FROM Articles";
                    break;
                case "user":
                    $sql_cmd = "SELECT * FROM users";
            }
            $len = 0;
            $counts = $connection->query($sql_cmd);
            foreach ($counts as $item) {
                $len++;
            }
        }
        else{
            $sql_cmd = "SELECT * FROM Articles";
            $articles = $connection->query($sql_cmd);
            foreach ($articles as $article){
                if($article['author'] == $fullName){
                    $len++;
                }
            }
        }
        return $len;
    }
    catch (Exception $e) {
        echo $e;
    }
}

function lastPost(){
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
            if ($counter >= $len-1){
                ?>
                <div class="card-body" style="text-align: right" dir="rtl">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;"
                             src=../../../<?php echo $article['pic_link'] ?>  alt="">
                    </div>
                    <p> <?php echo $article['description'] ?></p>
                    <a target="_blank" rel="nofollow" href="../../../blogs/blogTemp.php?id=<?echo $counter*87687?>">← رفتن به صفحه پست</a>
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

function showPieChart(){
    $time = countTime('month');
    ?>
        <script src="js/demo/chart-pie-demo.js"></script>
        f(65);
    <?

}
require "index.view.php";
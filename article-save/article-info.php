<?php
session_start();


function newArticleInfo(){
    $servername = "localhost";
    $user = "test";
    $pass = "";
    try{ // articles
        $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user,$pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql_cmd = "SELECT * FROM Articles";
        $articles = $connection->query($sql_cmd);
        foreach ($articles as $article){
            $picPath = $article['pic_link'];
            $hash = $_GET['id'];
            if(password_verify($picPath, $hash)){
                ?>
                    <img src="<? echo $picPath ?>">
                    <p><h6><? echo $article['description'] ?></h6></p>
                    <p> <? echo $article['full_text'] ?> </p>
                <?
            }
        }
    }
    catch (Exception $e){
        echo $e;
    }
}
require "views/article-save.view.php";

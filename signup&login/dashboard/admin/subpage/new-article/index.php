<?php

function uploadArticle(){
    $servername = "localhost";
    $user = "test";
    $pass = "";
    try { // articles
        $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $title = (string)$_POST['title'];
        $fullText = (string)$_POST['fullText'];
        $folder = "assets/img/articles/";

        $filename = $_FILES['fullPic']['name'];
        $filetmpname = $_FILES['fullPic']['tmp_name'];
        move_uploaded_file($filetmpname, $folder . $filename);
        $filePath = $folder . $filename;

        $sql_cmd = "INSERT INTO articles (description, full_text, pic_link, author)
                                  VALUES ('$title', '$fullText', '$filePath', '{$_SESSION['fullName']}');";

        $connection->query($sql_cmd);

        ?> <script>
            alert("پست جدید بر روی سایت قرار گرفت");
            window.location.href = "../../" </script> <?

    }
    catch (Exception $e){
        echo $e;
    }
}
session_start();
require "new-article.view.php";
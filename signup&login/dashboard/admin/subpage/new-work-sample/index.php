<?php
session_start();



function uploadWorkSample(){
    $servername = "localhost";
    $user = "test";
    $pass = "";
    try {
        $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $title = (string)$_POST['title'];
        $fullText = (string)$_POST['fullText'];
        $folder = "assets/img/work-sample/";

        $filename1 = $_FILES['fullPic1']['name'];
        $filetmpname1 = $_FILES['fullPic1']['tmp_name'];
        move_uploaded_file($filetmpname1, $folder . $filename1);
        $filePath1 = $folder . $filename1;

        $filename2 = $_FILES['fullPic2']['name'];
        $filetmpname2 = $_FILES['fullPic2']['tmp_name'];
        move_uploaded_file($filetmpname2, $folder . $filename2);
        $filePath2 = $folder . $filename2;

        $filename3 = $_FILES['fullPic3']['name'];
        $filetmpname3 = $_FILES['fullPic3']['tmp_name'];
        move_uploaded_file($filetmpname3, $folder . $filename3);
        $filePath3 = $folder . $filename3;

        $sql_cmd = "INSERT INTO worksample (userName, title, description, image1, image2, image3)
                              VALUES ('{$_SESSION['userName']}' ,'$title', '$fullText', '$filePath1', '$filePath2', '$filePath3');";

        $connection->query($sql_cmd);

        ?> <script>
            alert("نمونه کار اضافه شد.");
            window.location.href = "../../" </script> <?

    }
    catch (Exception $e){
        echo $e;
    }

}
require "new-work-sample.view.php";
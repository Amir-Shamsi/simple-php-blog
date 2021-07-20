<?php
session_start();



function signUp($mode){
    $servername = "localhost";
    $user = "test";
    $pass = "";
    try {
        $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql_cmd = "SELECT * FROM Users";
        switch ($mode) {
            case 'user':
                $firstName = $_POST['sfirstN'];
                $lastName = $_POST['slastN'];
                $userName = $_POST['suserN'];
                $password = $_POST['spwd'];
                $email = $_POST['semail'];
                $phone = $_POST['sphone'];
                $gender = $_POST['gender'];
                $_SESSION['userName'] = $userName;
                $_SESSION['fullName'] = $firstName.' '.$lastName;
                $_SESSION['isAdmin'] = false;

                $sql_cmd = "INSERT INTO users (firstName, lastName, userName, password, email, 
                            phone, isAdmin, gender, allowed) VALUES ('$firstName', '$lastName', '$userName', '$password', '$email',
                            '$phone', 0, '$gender', 1);";
                break;
            case 'admin':
                var_dump($_POST);
                $firstName = $_POST['afirstN'];
                $lastName = $_POST['alastN'];
                $userName = $_POST['auserN'];
                $password = $_POST['apwd'];
                $email = $_POST['aemail'];
                $phone = $_POST['aphone'];
                $_SESSION['fullName'] = $firstName.' '.$lastName;
                $_SESSION['isAdmin'] = true;

                $sql_cmd = "INSERT INTO users (firstName, lastName, userName, password, email, 
                            phone, isAdmin, allowed) VALUES ('$firstName', '$lastName', '$userName', '$password', '$email',
                            '$phone', 1, 0);";

        }
        $connection->exec($sql_cmd);
        successful();
    }
    catch (Exception $e){
        echo $e;
    }
}
function successful(){
    unset($_POST);
    ?>
    <script>
        window.location.href = "succeed";
    </script>
    <?
}

require "views/signup.vew.php";
?>
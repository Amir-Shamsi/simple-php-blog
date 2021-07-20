<?php

session_start();

function checkUser(){
    $servername = "localhost";
    $user = "test";
    $pass = "";
    $error = "";
    try { // articles
        $connection = new PDO ("mysql:host=$servername;dbname=mydb", $user, $pass);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql_cmd = "SELECT * FROM users";
        $users = $connection->query($sql_cmd);

        foreach ($users as $us){
            if($us['userName'] == $_POST['userName']){
                if($us['password'] == $_POST['passWord']){
                    if($us['allowed']) {
                        $_SESSION['fullName'] = $us['firstName'] . ' ' . $us['lastName'];
                        $_SESSION['userName'] = $us['userName'];
                        $_SESSION['isAdmin'] = $us['isAdmin'];
                        $_SESSION['token'] = password_hash($us['userName'].$us['password'],
                            PASSWORD_DEFAULT);
                        $error = "";
                        break;
                    }
                    else{
                        $error = "Sorry; you're not allowed to login!";
                        break;
                    }
                }
            }
            $error = "Password or Username or both are invalid!";
        }
        if($error != "" && $_POST['userName']){
            echo '<script>';
            echo 'alert("'.$error.'")';
            echo '</script>';
        }
        else if ($error == ""){
            ?><script>window.location.href = "../";</script><?
        };
    }
    catch (Exception $e){
        echo $e;
    }
}

require "views/login.view.php";

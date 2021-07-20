<?php
session_start();
function congrats()
{
    if ($_SESSION['isAdmin']) {
        ?><h2 style="margin-top: 25%; margin-left: 10%; color: antiquewhite; text-align: center;"> Thank you, your
        request has been sent, we'll respond ASAP <? echo $_SESSION['fullName'] ?> :)</h2>
        <?
    } else {
        ?><h2 style="margin-top: 25%; margin-left: 10%; color: antiquewhite; text-align: center;"> Congratulation, Your
        Signed Up Successfully <? echo $_SESSION['fullName'] ?> :)</h2>
        <?
    }
}

require "views/suc.view.php";

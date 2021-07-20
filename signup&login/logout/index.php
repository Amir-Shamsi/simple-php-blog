<?php
session_start();
$address = $_GET['recent'];
session_destroy();
Header("Location:../../$address");

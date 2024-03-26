<?php
$sever = "localhost";
$user = "root";
$password = "";
$dbname = "mnm";
$link = mysqli_connect($sever, $user, $password, $dbname) or die('Kết nối không thành công ' . mysqli_error($link));
if ($link)
    $link->query("SET character_set_results=utf8");
$link->query("SET NAMES 'utf8'");

<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <title>Du Lịch Việt Nam</title>
    <link rel="stylesheet" type="text/css" href="css/bodystyles.css" />
    <link rel="stylesheet" type="text/css" href="css/menuleft.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/menuright.css" />
    <link rel="stylesheet" type="text/css" href="/css/header.css">
    <link rel="shortcut icon" href="anh/liva_theme_hipc_favicon.ico" type="image/x-icon" />
</head>


<body background="/anh/1demo.jpg">

    <table class="bgtable" width="1200" border="0" align="center">
        <tr>
            <td height="142" colspan="3"><?php include "header.php"; ?></td>
        </tr>
        <tr>
            <td height="40" colspan="4"><?php include "top.php"; ?></td>
        </tr>
        <tr>
            <td width="200" valign="top"><?php include "left.php"; ?></td>
            <td width="600" valign="top"><?php include "center.php"; ?></td>
            <td width="400" valign="top"><?php include "right.php"; ?></td>
        </tr>
        <tr>
            <td height="72" colspan="3"><?php include "footer.php"; ?></td>
        </tr>
    </table>
</body>

</html>
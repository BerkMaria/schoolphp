<?php
require_once (ROOT. '/year.php');
?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<div>-->
<!--    <p>Hi, dear Maria.</p>-->
<!--    <p>In the Earth is --><?php //echo $year;?><!-- year.</p>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->
<?php

function newLine()
{
    echo "\n";
}

function isTrue($var)
{
    if ($var) {
        echo "true";
    } else {
        echo "false";
    }
    newLine();

}
isTrue($var);

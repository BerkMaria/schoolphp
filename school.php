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
//$weather = ['sun', 'cloudy', 'rain',  'snow'];
//function resolveActivity(string $weather)
//{
//    if ($weather === 'sun'){
//        echo "beach";
//        newLine();
//    } else {
//        echo "It is not";
//        newLine();
//        if ($weather === "snow") {
//            echo "snowboard";
//            newLine();
//        }
//    }
//    if ($weather !== "rain") {
//        echo "no rain";
//        newLine();
//    }
//}

//resolveActivity($weather[1]);




//
//function isTrue($var)
//{
//    if ($var) {
//        return "true";
//    } else {
//        return "false";
//    }
//}
//$var = true;
//
//$res = isTrue($var);
//var_dump($res);
//
//$res = $var ? "true" : "false"; //аналогичная запись функции
//var_dump($res);

function ifNull($var)
{
    if ($var === null){
        return "is null";
    } else {
        return $var;
    }
}
$var = "something";

$res = ifNull($var);
var_dump($res);

$res = $var ?? "is null";
var_dump($res);
$var = null;

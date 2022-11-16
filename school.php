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

function myFun($a)
{
    echo $a + 1;
    newLine();

}

//myFun(3);
//myFun(4);
/**
 * @param int $a
 * @param int $b
 * @param string $operation
 * @return int
 */
function calculator(int $a, int $b, string $operation = "plus"): int
{
    if ($operation === 'plus') {
        return $a + $b;
    }
    if ($operation === 'minus') {
        return $a - $b;
    }
    return 0;
}

echo calculator(1, 2, 'minus');
newLine();
echo calculator(1, 2, 'plus');
newLine();
echo calculator(1, 2);
newLine();
echo calculator(1, 2.5, 'minus');
newLine();
echo calculator(1, 'text');
newLine();
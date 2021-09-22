<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
mb_internal_encoding("UTF-8");
$first = ' Text '; 
$second = &$first;
$first = ' New text ';
echo "Переменная с именем first равна $first <br>";
echo "Переменная с именем second равна $second";
?>
</body>
</html>
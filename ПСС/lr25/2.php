<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php //эта программа напечатает все четные цифры 
$i = 1; 
while ($i < 10) 
{ // печатаем цифру, если она четная 
if ($i % 2 == 0) echo "$i <br>"; 
// увеличиваем $i на единицу 
$i++; 
} 
?>
</body>
</html>
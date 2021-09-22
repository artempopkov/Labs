<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php /* эта программа напечатает число 12, 
 несмотря на то, что условие цикла не выполнено */

$i = 12; 
do 
{ // если число четное, то печатаем его 
if ($i % 2 == 0) print $i; 
// увеличиваем число на единицу 
$i++; 
} while ($i<10) 
?>
</body>
</html>
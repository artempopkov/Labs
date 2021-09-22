<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
    <body>
        <div class="task">
        С помощью арифметических действий из переменных, объявленных в задании 1, получить переменную типа double.
        </div>
        <?php

            $first =  5; 
            $second = 10;  
            $rez = $first / $second;
            echo gettype($rez)." ";
            echo $rez;
        ?>
    </body>
</html>
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
        Объявить переменную типа Integer, присвоить ей значение 10. Написать программу, проверяющую следующие условия:
        если переменная == 10 вывести OK
        если переменная > 10 вывести “Больше”
        во всех других случаях вывести “Меньше”

        </div>
        <?php
            $a = (int) 15; 
            if($a==10)
            {
                echo"Ok";
            }
            elseif($a>10)
            {
                echo"Больше";
            }
            else
            {
                echo"Меньше";
            }
        ?>
    </body>
</html>
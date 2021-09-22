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
        Объявить переменную типа Integer, присвоить ей значение 10. Написать программу, проверяющую следующие условия с помощью switch:
        1 - Переменная равна 10
        2 - Переменная равна 20
        3 - Переменная равна 30
        4 - ни одно из перечисленных 
  
        </div>
        <?php 
            $x=10;
            switch($x)
            {
                case ($x=10):
                    echo "Переменная равна 10";
                    break;
                case ($x=10):
                    echo "Переменная равна 20"; 
                    break;
                case ($x=10):
                    echo "Переменная равна 30";
                    break;
                default:
                    echo "ни одно из перечисленных выше условий не выполнилось";
            }
        ?>
    </body>
</html>
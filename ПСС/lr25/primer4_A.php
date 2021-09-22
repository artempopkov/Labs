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
echo "Меня зовут Вася";
//Это однострочный комментарий
//в стиле С++
echo "Фамилия моя Петров";
/* Это многострочный комментарий. Здесь можно написать несколько строк. При исполнении программы все,
что находится здесь (закомментировано), будет игнорировано. */
echo "Я изучаю PHP";
#Это комментарий в стиле
#оболочки Unix
?>
</body>
</html>
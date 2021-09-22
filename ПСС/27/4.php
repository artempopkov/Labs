<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../style.css">
  </head>
  <body>

  <div class="task">
     Передача аргументов по Значению
  </div>
     <?php
     function funct($string)
     {
          echo "<h3>Параметр = $string </h3>";
     }

     $str = 777;
     funct(777);
     funct($str);    
     ?>



    
  </body>
</html>



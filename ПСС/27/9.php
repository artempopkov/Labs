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
    Cтатические переменные
  </div>

      <?php
      function funct()
      {
         static $a;
         $a++;
         echo "$a";
      }
      for ($i = 0; $i++<10;) funct();
   ?>



  </body>
</html>

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
    2. Локальные переменные 
  </div>

  <?php 
        $a = 100;
        function funct() {
        $a = 70;
        echo "<h4>$a</h4>";
        }
        funct();
        echo "<h2>$a</h2>";
    ?>
  </body>
</html>

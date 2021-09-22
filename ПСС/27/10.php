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
    Четное число или нет
  </div>

        <?php
    function isEven($a)
    {
        return $a % 2 == 0;
    }
    echo isEven(8) ? "true" : "false";
    ?>
  </body>
</html>

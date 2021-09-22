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
      1.	Невозможность объявления локальных функций
    </div>

    <?php
    function first_function() {
      echo "<h4>Первая пользовательская функция</h4>";
        function second_function() {
        echo "<h5>Вторая пользовательская функция</h5>";
        }
    }
    first_function();
    second_function();
    ?>
  </body>
</html>

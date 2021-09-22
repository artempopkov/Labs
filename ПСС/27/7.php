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
    PHP также позволяет использовать массивы и специальный тип NULL в качестве значений по умолчанию.
  </div>
    <?php  
    function makecup($types = array("Кофе"), $Maker = NULL)  
    {  
        $device = is_null($Maker) ? "сахаром" : $Maker;  
        return "Сделайте чашечку ".join(", ", $types)." с $device.\n";  
    }  
    echo makecup();  
    echo makecup(array("Кофе", "Чая"), "сливками");  
    ?>


    
  </body>
</html>


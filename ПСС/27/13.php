<?php
// число
function f()
{
    $number = strval($_GET["number1"]);
    for ($i = 1; $i <= 9; $i++) {
        echo $i * $number;
        echo "<br>";
    }
}
echo "Умножение i:";
echo "<br>";
f();

function f2()
{
    $number = strval($_GET["number2"]);
    for ($i = 1; $i <= 9; $i++) {
        echo $i * $number;
        echo "<br>";
    }
}
echo "Умножение j:";
echo "<br>";
f2();

?>
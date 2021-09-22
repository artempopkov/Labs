<?php
// число
function f()
{
    $sum = 0;
    $number = strval($_GET["number"]);
    for ($i = 0; $i < strlen($number); $i++) {
        $sum += intval($number[$i]);
    }
    return $sum;
}
echo "Сумма введенных чисел:";
echo f();

?>
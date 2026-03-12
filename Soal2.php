<?php

$desimal = 255;
$hexChars = "0123456789ABCDEF";
$hex = "";
$n = $desimal; 

while($n > 0){

    $sisa = $n % 16;
    $hex = $hexChars[$sisa] . $hex;
    $n = intdiv($n, 16);

}

echo "Desimal : ".$desimal."<br>";
echo "Hexadecimal : ".$hex;

?>
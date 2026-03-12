<?php

$n = isset($_GET['n']) ? intval($_GET['n']) : 18; 

function isPrime($x){
    if($x < 2) return false;

    for($i = 2; $i * $i <= $x; $i++){
        if($x % $i == 0){
            return false;
        }
    }

    return true;
}

function countDivisor($num){
    $count = 0;

    for($i = 1; $i <= $num; $i++){
        if($num % $i == 0){
            $count++;
        }
    }

    return $count;
}

$bestPrime = 0;
$maxDivisor = 0;

for($p = 2; $p <= $n; $p++){

    if(isPrime($p) && $n % $p == 0){

        $totalEgg = $n * $p;
        $divisor = countDivisor($totalEgg);

        if($divisor > $maxDivisor){
            $maxDivisor = $divisor;
            $bestPrime = $p;
        }
    }
}

echo "Input Masukan : ".$n."<br>";
echo "Tipe telur terbaik : ".$bestPrime;

?>
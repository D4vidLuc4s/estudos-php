<?php
function maior($numbers){
    $num_array = explode(" ", $numbers);
    $maior = max($num_array);
    return $maior;
}

function menor($numbers){
    $num_array = explode(" ", $numbers);
    $menor = min($num_array);
    return $menor;
}

function porcen($numbers){
    $num_array = explode(" ", $numbers);
    $nums = 0;
    foreach($num_array as $num){
        if ($num % 2 == 0){
            $par[] = $num;
        }
    }
    $quant = count($par);
    $porcen = $quant * 5;
    return $porcen;
}

function media($numbers){
    $num_array = explode(" ", $numbers);
    $tot = array_sum($num_array);
    $med = $tot / 20;
    return $med;
}

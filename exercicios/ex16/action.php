<?php
function par($numbers){
    $num_array = explode(" ", $numbers);

    foreach($num_array as $num){
        if ($num % 2 == 0){
            $par[] = $num;
        }
    }
    $n1 = implode(" ", $par);
    return $n1;
}

function impar($numbers){
    $num_array = explode(" ", $numbers);

    foreach($num_array as $num){
        if ($num % 2 != 0){
            $impar[] = $num;
        }
    }
    $n2 = implode(" ", $impar);
    return $n2;
}
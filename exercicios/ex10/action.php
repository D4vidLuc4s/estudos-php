<?php

function sumPos($numbers) {
    $num_array = explode(" ", $numbers);

    foreach($num_array as $num){
        if ($num > 0){
            $pos[] = $num;
        }
    }
    $sumPos = array_sum($pos);
    return $sumPos;
}

function countNeg($numbers) {
    $num_array = explode(" ", $numbers);

    foreach($num_array as $num){
        if($num < 0){
            $neg[] = $num;
        }
    }
    return count($neg) - 1;
}

function countTot($numbers){
    $num_array = explode(" ", $numbers);

    return count($num_array) - 1;
}

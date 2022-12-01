<?php

function verifyNumbers($numbers){
    $num_array = explode(" ", $numbers);

    foreach($num_array as $num) {
        if ($num > 100 && $num < 200){
            $quantNum[] = $num;
        }
    }
    return count($quantNum);
}
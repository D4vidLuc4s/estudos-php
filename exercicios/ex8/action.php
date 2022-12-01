<?php

function sequenceNumber($n1) {
    for ($i = 1; $i <= $n1; $i++) {
        $num = $i;
        $sequence[] = "$num ";
    }
    return $sequence;
}

function productNumber($n1){
    $i = 1;
    $prod = 1;

    while($i <= $n1) {
        $prod = $prod * $i;
        $i = $i + 1;
    }
    return $prod;
}
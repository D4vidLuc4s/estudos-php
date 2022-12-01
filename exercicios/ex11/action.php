<?php

function multiplicableTable($n1){
    for ($i = 0; $i <= 10; $i++) {
        $num = $n1 * $i;
        $result[] = "$n1 X $i = $num" . "<br>";
    }
    return $result;
}
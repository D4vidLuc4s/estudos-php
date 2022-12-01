<?php
function matriz($nums){
    $num_array = explode(" ", $nums);

    $split = 5;

    $arrayMatriz = array_chunk($num_array, $split);

    $n1 = $arrayMatriz[0][0];
    $n2 = $arrayMatriz[1][1];
    $n3 = $arrayMatriz[2][2];
    $n4 = $arrayMatriz[3][3];
    $n5 = $arrayMatriz[4][4];

    $jun = "<br>" . $n1 . "<br>" . $n2 . "<br>" . $n3 . "<br>" . $n4 . "<br>" . $n5;

    return $jun;
}

<?php

function triangleType($ab, $bc, $ca) {

    if ($_POST['ab'] == $_POST['bc'] && $_POST['bc'] == $_POST['ca']) {
        $result = "equilátero";
    } else if ($_POST['ab'] != $_POST['bc'] && $_POST['ab'] == $_POST['ca']) {
        $result = "isósceles";
    } else if ($_POST['ab'] == $_POST['bc'] && $_POST['bc'] != $_POST['ca']) {
        $result = "isósceles";
    } else if ($_POST['ab'] != $_POST['bc'] && $_POST['bc'] == $_POST['ca']) {
        $result = "isósceles";
    } else if ($_POST['ab'] == $_POST['ca'] && $_POST['ab'] != $_POST['bc']) {
        $result = "isósceles";
    } else if ($_POST['ab'] != $_POST['bc'] && $_POST['bc'] != $_POST['ca']) {
        $result = "escaleno";
    }
    return $result;
}
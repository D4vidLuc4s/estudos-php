<?php

function numberOrder($n1, $n2, $n3) {

    if($_POST['n1'] < $_POST['n2'] && $_POST['n1'] < $_POST['n3'] && $_POST['n2'] < $_POST['n3']) {
        $result = ["$_POST[n3], $_POST[n2], $_POST[n1]"];
    }else if($_POST['n1'] < $_POST['n2'] && $_POST['n1'] < $_POST['n3'] && $_POST['n2'] > $_POST['n3']) {
        $result = ["$_POST[n2], $_POST[n3], $_POST[n1]"];
    }else if($_POST['n1'] < $_POST['n2'] && $_POST['n1'] > $_POST['n3'] && $_POST['n2'] > $_POST['n3']) {
        $result = ["$_POST[n2], $_POST[n1], $_POST[n3]"];
    }else if($_POST['n1'] > $_POST['n2'] && $_POST['n1'] < $_POST['n3'] && $_POST['n2'] < $_POST['n3']) {
        $result = ["$_POST[n3], $_POST[n1], $_POST[n2]"];
    }else if($_POST['n1'] > $_POST['n2'] && $_POST['n1'] > $_POST['n3'] && $_POST['n2'] > $_POST['n3']) {
        $result = ["$_POST[n1], $_POST[n2], $_POST[n3]"];
    }else if($_POST['n1'] > $_POST['n2'] && $_POST['n1'] > $_POST['n3'] && $_POST['n2'] < $_POST['n3']) {
        $result = ["$_POST[n1], $_POST[n3], $_POST[n2]"];
    }
    return $result;
}



<?php
require('action.php');

$errors = [];
$data = [];

if(empty($_POST['num'])){
    $errors['num'] = "Informe um número";
}

if(!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['tabuada'] = multiplicableTable($_POST['num']);
}

echo json_encode($data);
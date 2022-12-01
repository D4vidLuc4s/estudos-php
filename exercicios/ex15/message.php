<?php
require('action.php');

$errors = [];
$data = [];

if(empty($_POST['massa'])){
    $errors['num'] = "Informe um número";
}

if(!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['time'] = calcMassa($_POST['massa']);
}

echo json_encode($data);
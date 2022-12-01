<?php
require('action.php');

$errors = [];
$data = [];

if(countTot($_POST['num']) < 20){
    $errors['num'] = "informe 20 números";
}

if(!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['sumPos'] = sumPos($_POST['num']);
    $data['countNeg'] = countNeg($_POST['num']);
    $data['total'] = countTot($_POST['num']);
}

echo json_encode($data);
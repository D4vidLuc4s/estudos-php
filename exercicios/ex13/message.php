<?php
require('action.php');

$errors = [];
$data = [];

if(empty($_POST['numbers'])){
    $errors['num'] = "Informe um ou mais números";
}

if(!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['numbers'] = verifyNumbers($_POST['numbers']);
}

echo json_encode($data);

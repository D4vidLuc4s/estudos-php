<?php
require('action.php');

$errors = [];
$data = [];

if(empty($_POST['word'])){
    $errors['word'] = "Informe uma palavra";
}

if(!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['wordRepeat'] = multipleWord($_POST['word']);
}

echo json_encode($data);
<?php
require('action.php');

$errors = [];
$data = [];

if(empty($_POST['numUm'])){
    $errors['numUm'] = "Informe um grupo de dez números";
}
if(empty($_POST['numDois'])){
    $errors['numDois'] = "Informe um grupo de dez números";
}

if(!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['incomuns'] = diferenca($_POST['numUm'], $_POST['numDois']);
}

echo json_encode($data);
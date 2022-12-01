<?php

require('action.php');

$errors = [];
$data = [];

if (empty($_POST['n1'])){
    $errors['n1'] = "Um número é obrigatório";
}
if (empty($_POST['n2'])){
    $errors['n2'] = "Um número é obrigatório";
}
if (empty($_POST['n3'])){
    $errors['n3'] = "Um número é obrigatório";
}

if (!empty($errors)){
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['order'] = numberOrder($_POST['n1'], $_POST['n2'], $_POST['n3']);
}

echo json_encode($data);
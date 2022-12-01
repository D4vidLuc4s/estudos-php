<?php
require('action.php');

$data = [];

$data['time'] = calcHeight();

echo json_encode($data);
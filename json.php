<?php
include 'config.php';
include 'class.ballpen.php';
header('Content-Type: application/json');
$ballpen = new Ballpen();
$list=$ballpen->get_Ballpen();
echo "{\"ballpen\":";
echo json_encode($list);
echo "}";
?>

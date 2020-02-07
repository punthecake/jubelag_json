<?php
include 'config.php';
include 'class.ballpen.php';
header('Content-Type: application/json');
$ballpen = new ballpen();
$list=$ballpen->get_ballpen();
echo "{\"ballpen\":";
echo json_encode($list);
echo "}";
?>

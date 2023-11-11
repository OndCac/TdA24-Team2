<?php
header("Content-Type: application/json");
$a = array('secret' => 'The cake is a lie');
echo json_encode($a, JSON_FORCE_OBJECT);
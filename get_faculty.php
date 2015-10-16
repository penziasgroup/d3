<?php 
$data = file_get_contents("http://bcs.dev/faculty-metrics");
header('Content-Type: application/json');
echo $data;
?>
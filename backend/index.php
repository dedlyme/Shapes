<?php
header("Access-Control-Allow-Origin: *");
$data = ["message" => "lohaps"];
echo json_encode($data);
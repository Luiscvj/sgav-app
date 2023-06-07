<?php
require_once('../app.php');
use Clases\HouseType;

$headers = "Content-Type : application/json";

$_DATA =json_decode(file_get_contents("php://input"),true);
$objHouse = new HouseType();
echo var_dump($_DATA);
$objHouse->postDataHouse($_DATA);




?>
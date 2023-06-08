<?php
include_once '../app.php';
use Clases\Countries;
$headers ="Content-Type : application/json";



$_DATACOUNTRY = json_decode(file_get_contents('php://input'),true);
echo var_dump($_DATACOUNTRY);
$obj= new Countries();
$obj->postDataCountries($_DATACOUNTRY);



?>
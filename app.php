<?php
require_once 'vendor/autoload.php';

use App\Database;
use Clases\HouseType;
use Clases\Countries;
$objConn = new Database();
$conn = $objConn->getConnection('mysql');
HouseType::setConn($conn);
Countries::setConnCountry($conn);

?>
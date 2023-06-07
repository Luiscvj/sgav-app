<?php
require_once 'vendor/autoload.php';
use App\Database;
$objConn = new Database();
$conn = $objConn->getConnection('mysql');


?>
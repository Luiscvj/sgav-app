<?php
namespace Clases;

class HouseType{
    public static $conn;
    protected $id_house_type;
    protected $name_house_type;

    public function  __construct($args=[]){
       /*  $this->id_house_type = $args['id_house_type'];
        $this->name_house_type =$args['name_house_type']; */
 }

 public function postDataHouse($data){
    $delimiter =':';
 
    $valCols = $delimiter . join(',:',array_keys($data));
    $cols = join(',', array_keys($data));
    $sql = "INSERT INTO housetype($cols) VALUES ($valCols)";
    $stmt = self::$conn->prepare($sql);
    $stmt->execute($data);
 }  


 public static function setConn($connDB){
        self::$conn = $connDB;
 }
}



?>
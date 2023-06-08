<?php

namespace Clases;

class Countries{
    protected  static $conn;
    private $id_country;
    private $name_country;

    public function __construct($args = []){
        $this->id_country = $args['id_country'] ?? '';
        $this->name_country = $args['name_country'] ?? '';


    }

    public function postDataCountries($data){
        echo 'Hola';
        $delimiter = ':';
        $valCols = $delimiter . join(',:',array_keys($data));
        $cols = join(',', array_keys($data));
        $sql = "INSERT INTO countries($cols) VALUES($valCols)";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute($data);


    }
    public function getDataCountries(){

        $sql = "SELECT * FROM countries";
        $stmt = self::$conn->prepare($sql);
        $stmt->execute();
        $clientes = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $clientes;
    }

    public static function setConnCountry($conDB){
        self::$conn = $conDB;
    }

}



?>
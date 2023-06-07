<?php
namespace App;

class Database{
    public $conn;
    protected static $settings = Array(
        "mysql" => [
            "driver"=>"mysql",
            "host"=>"localhost",
            "username"=>"campus",
            "password"=>"campus2023",
            "database"=> "arriendo",
            "charset"=> "utf8mb4",
            "collate"=>"utf8mb4_unicode__ci",
            "flags"=>[

                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_PERSISTENT => false,
                \PDO::ATTR_EMULATE_PREPARES =>true,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci'
            ]
        ]
            );

            public function __construct($args = []){

                $this->conn = $args['conn'] ?? null;
            }   

            public function getConnection($dbKey){
                $db = self::$settings[$dbKey];
            
                $this->conn = null;//se verifica que no hay una conexion existente
                $dsn ="{$db['driver']}:host={$db['host']};dbname={$db['database']}";

                try{
                  
                    $this->conn  = new \PDO($dsn,$db['username'],$db['password'],$db['flags']);
                    echo 'ok';
                }catch(\PDOException $e){
                   
                    $error =[[
                        'error'=> $e->getMessage(),
                        'message' => "Erro al momento de hacer conexion"
                    ]];
                    return $error;
                }
               
                return $this->conn;
                
            }

            
}
?>
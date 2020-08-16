<?php

class CommissionModel {

    private $db;

    public function __construct() {
    
    $this->db = new PDO('mysql:host=localhost;dbname=soy_yo;charset=utf8', 'root', '');
        $host = 'localhost';
        $userName = 'root';
        $password = '';
        $database = 'opcemon';

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $userName, $password);
        } 
        catch (Exception $e) {
            echo(var_dump($e));
        }
    }

    //Obtiene el listado de comisiones
    public function getCommissions(){
        $query = $this->db->prepare('SELECT * FROM commission');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

}
?>

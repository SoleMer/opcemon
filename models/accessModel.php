<?php

class AccessModel {

    private $db;

    public function __construct() {
    
    $this->db = new PDO('mysql:host=localhost;dbname=opcemon;charset=utf8', 'root', '');
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

    //Obtiene el listado de material de estudio
    public function getAccess(){
        $query = $this->db->prepare('SELECT * FROM access');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAccessForMaterial($material){
        $query = $this->db->prepare('SELECT * FROM access WHERE material = ?');
        $query->execute(array(($material)));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getAccessForCommission($commission){
        $query = $this->db->prepare('SELECT * FROM access WHERE commission = ?');
        $query->execute(array(($commission)));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function removeAccess($id){
        $query = $this->db->prepare('DELETE FROM `access` WHERE `id`= ?');
        return $query->execute([$id]);
    }

    public function addAccess($commission,$material){
        $query = $this->db->prepare('INSERT INTO access (commission, material) VALUES (?, ?)');
        return $query->execute([$commission,$material]);
    }

    /* SIN USO
    public function getAccessForCommission($commission){
        $query = $this->db->prepare('SELECT * FROM `access` WHERE commission = ?');
        $query->execute(array(($commission)));
        return $query->fetch(PDO::FETCH_OBJ);
    }*/
    
    
    public function getAccessAndMaterial($commission){
        $query = $this->db->prepare('SELECT * FROM `access` JOIN material ON access.material = material.id AND access.commission = ?');
        $query->execute(array(($commission)));
        return $query->fetchAll(PDO::FETCH_OBJ);
    } 

    /*
    public function getAccessAndMaterial($commission){
        var_dump("commission",$commission);
        die;
        $query = $this->db->prepare('SELECT * FROM `access` WHERE commission = ?');
        $query->execute(array(($commission)));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    */
}
?>
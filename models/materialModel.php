<?php

class MaterialModel {

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
    public function getAllMaterial(){
        $query = $this->db->prepare('SELECT * FROM material ORDER BY id ASC');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function getArchive($id){
        $query = $this->db->prepare('SELECT * FROM material WHERE id =? ORDER BY id ASC');
        $query->execute(array(($id)));
        return $query->fetch(PDO::FETCH_OBJ);
    }

    /*
    public function getMaterialByIdAccess($access){
        $query = $this->db->prepare('SELECT * FROM material WHERE id = ?');
        $query->execute(array(($access->material)));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }*/

    //Agrega uno nuevo material a la DB
    public function save($title,$archive=null,$link=null){
        $pathArchive = null;
        $pathLink = null;
        if ($archive)
            $pathArchive = $this->uploadArchive($archive);

        $query = $this->db->prepare('INSERT INTO material (title, archive, link) VALUES (?, ?, ?)');
        return $query->execute([$title,$pathArchive,$link]);
    }

    //Almacena el archivo y retorna la unidad de memoria en donde queda guardado
    private function uploadArchive($archive){
        $target = 'upload/archives/' . uniqid() . '.pdf';
        move_uploaded_file($archive, $target);
        return $target;
    }



}
?>
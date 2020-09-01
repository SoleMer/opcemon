<?php

class QuestionModel {

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

    public function getQuestions($id_material){
        $query = $this->db->prepare('SELECT * FROM question WHERE id_material = ? ORDER BY id ASC');
        $query->execute(array(($id_material)));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function addQuestion($affair,$message,$material_id,$user_id){
        $query = $this->db->prepare('INSERT INTO question (affair, message, id_material, id_user) VALUES (?, ?, ?, ?)');
        return $query->execute([$affair,$message,$material_id,$user_id]);
    }
    
    public function getQuestion($id){
        $query = $this->db->prepare('SELECT * FROM question WHERE id = ? ');
        $query->execute(array(($id)));
        return $query->fetch(PDO::FETCH_OBJ);
    }
}
?>
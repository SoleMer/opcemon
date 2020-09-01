<?php

class ReplyModel {

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

    public function getReplys($question){
        $query = $this->db->prepare('SELECT * FROM reply WHERE id_question = ? ORDER BY id ASC');
        $query->execute(array(($question)));
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    public function addReply($message,$question,$user){
        $query = $this->db->prepare('INSERT INTO reply (message, id_question, id_user) VALUES (?, ?, ?)');
        return $query->execute([$message,$question,$user]);
    }
}
?>
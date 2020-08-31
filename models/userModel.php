<?php

class userModel {

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

    //Obtiene un usuario de la DDBB según el email recibido por parametro
    public function getUserByEmail($email) {
        $query = $this->db->prepare('SELECT * FROM `user` WHERE email = ?');
        $query->execute(array(($email)));
        return $query->fetch(PDO::FETCH_OBJ);      
    }

    public function getUserById($idUser) {
        $query = $this->db->prepare('SELECT * FROM `user` WHERE id = ?');
        $query->execute(array(($idUser)));
        return $query->fetch(PDO::FETCH_OBJ);      
    }

    //Agrega un nuevo usuario
    public function addUser($name,$lastname,$username,$email,$date,$DNI,$city,$pass){
        $query = $this->db->prepare('INSERT INTO user (name, lastname, username, email, date, DNI, city, commission, password, permits) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)');
        return $query->execute([$name,$lastname,$username,$email,$date,$DNI,$city," ",$pass,0]);
    }

    //Obtiene el listado de usuarios
    public function getUsers(){
        $query = $this->db->prepare('SELECT * FROM user');
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }

    //Elimina un usuario 
    public function deleteUser($id){
        $query = $this->db->prepare('DELETE FROM `user` WHERE `id_user`= ?');
        return $query->execute([$id]);
    }

    //Cambia permisos de administrador
    public function changePermitAdmin($user, $admin){
        $query = $this->db->prepare('UPDATE `user` SET `permits`= ?  WHERE `id` = ?');
        return $query->execute([$admin,$user]);
    }

    //Asigna una comision a un usuario predeterminado
    public function asignCommission($user, $commission){
        $query = $this->db->prepare('UPDATE `user` SET `commission`= ?  WHERE `id` = ?');
        return $query->execute([$commission,$user]);
    }
}
?>

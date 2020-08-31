<?php
class AuthHelper {
    static private function start()
    {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }

    static public function login($user){
        self::start();
        $_SESSION['ID_USER'] = $user[0]->id;
        $_SESSION['EMAIL'] = $user[0]->email;
        $_SESSION['COMMISSION'] = $user[0]->commission;
        $_SESSION['PERMITS'] = $user[0]->permits;
        header('location:' . BASE_URL . 'home');
    }

    public static function checkLoggedIn(){
        session_status();
        if(!isset($_SESSION['USERNAME'])){
            return false;
        }
        else{
            return true;
        }
    }

    public static function getUserCommission(){
        self::start();
        if (!isset($_SESSION['USERNAME']))
            return null;
        else {
            $userCommission['commission'] = $_SESSION['COMMISSION'];
            return  $userCommission;
        }
    }

    public static function checkPermits(){
        self::start();
        $permitAdmin= $_SESSION['PERMITS'];
        return  $permitAdmin;
    }

    public static function logout()
    {
        self::start();
        unset($_SESSION['ID_USER']);
        unset($_SESSION['USERNAME']);
        unset($_SESSION['PRIORITY']);
        session_destroy();
        header('location:' . URLBASE . 'login');
    }
    
    public function getLoggedUserName() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        if(isset($_SESSION['USERNAME']))
            return $_SESSION['USERNAME'];
        else
            return null;
    }
    
    public function getLoggedId() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
        if(isset($_SESSION['ID_USER']))
            return $_SESSION['ID_USER'];
        else
            return null;
    }
    
}
?> 
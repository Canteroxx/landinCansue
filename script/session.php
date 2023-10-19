<?php 

class User extends DB{
 
    private $nombre;
    private $username;
    public function userExists($user, $pass){

        $md5pass = md5($pass);

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE Nombre = :user AND Contraseña = :pass');
        $query->execute('user' => $user,'pass'-> $md5pass);

        if ($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }

    public function setUser($user){
        
    }

}


?>
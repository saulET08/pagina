<?php
include ('db.php');
class User extends DB{
    private $username;
    public function userExists($user, $pass){
        $query = $this->connect()->prepare('SELECT * FROM users WHERE username = :user AND password = :pass');
        $query->execute(['user' => $user, 'pass' => $pass]);
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function setUser($user){
        $query = $this->connect()->prepare('SELECT * FROM users WHERE username = :user');
        $query->execute(['user' => $user]);
        
        foreach ($query as $currentUser) {
            $this->username = $currentUser['username'];
        }
    }
    public function getNombre(){
        return $this->username;
    }
}
?>
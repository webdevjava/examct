<?php

class connection{
    public $connect;
    public function __construct(){
        $this->connect = new PDO('mysql:host=localhost;dbname=marrydatabase','root','');
    }
    
    public function fundata($username,$password){
        $funwife = $this->connect->prepare("INSERT into examone (username,password) VALUES (:username,:password)");
        $funwife->execute(
            array(
                ':username'=>$username,
                ':password'=>$password
            )
        );
    }
    
    public function update($query){
        $funwife = $this->connect->prepare($query);
        $funwife->execute();
        return $funwife->fetchAll();
    }
}
?>

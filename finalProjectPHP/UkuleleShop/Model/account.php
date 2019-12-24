<?php
class Account{
    public $id;
    public $username;
    public $PASSWORD;
    public $phone;
    public $role;
    
    public function checkRole(){
        return $this->role=="admin";
    }
    public function getPassword(){
        return $this->PASSWORD;
    }
    public function checkPasswordRegister($password1,$password2){
        return $password1==$password2;
    }
    public function getUsername(){
        return $this->username;
    }
    public function checkPhone($phone){
        return strlen($phone)>=10;
    }
}
?>
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
}
?>
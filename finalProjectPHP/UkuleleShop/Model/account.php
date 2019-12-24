<?php
class Account{
    public $id;
    public $username;
	public $role;
    public $password;
    public $phone;
    
    public checkRole(){
        return $this->role=="admin";
    }
}
?>
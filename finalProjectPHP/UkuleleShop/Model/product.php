<?php
abstract class Product implements IProduct{

    public $id;
    public $name;
    public $quantity;
    public $price;
    public $oldPrice;
    public $type;
    public $description;
    public $image;
    public function __construct(){
        
    }
    public function getNicePrice(){
        return 0;
    }
}
?>
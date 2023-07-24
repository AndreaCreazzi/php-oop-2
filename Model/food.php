<?php  
require_once __DIR__ . '/products.php';

class Food extends Products
{
    public $weight;
    public $ingredients;

    public function __construct($title, $price, $type, $image,$weight,$ingredients)
    {
        parent::__construct($title, $price, $type, $image);
        $this -> weight = $weight;
        $this -> ingredients = $ingredients;
    }
}

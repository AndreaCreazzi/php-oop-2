<?php  
include_once __DIR__ . '/products.php';

class Accessories extends Products
{
    public $categories;
    public $material;
    public $size;

    public function __construct($title, $price, $type, $image,$categories,$material,$size)
    {
        parent::__construct($title, $price, $type, $image);
        $this -> categories = $categories;
        $this -> material = $material;
        $this -> size = $size;
    }
}

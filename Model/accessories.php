<?php
require_once __DIR__ . '/products.php';

class Accessories extends Products
{
    public $categories;
    public $material;
    public $dimension;

    public function __construct($title, $price, $type, $image, $categories, $material, $dimension)
    {
        parent::__construct($title, $price, $type, $image);
        $this->categories = $categories;
        $this->material = $material;
        $this->dimension = $dimension;
    }
}

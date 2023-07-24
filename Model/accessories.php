<?php
require_once __DIR__ . '/products.php';

class Accessories extends Products
{
    public $material;
    public $dimension;

    public function __construct($title, $price, $type, $image, $material, $dimension)
    {
        parent::__construct($title, $price, $type, $image);
        $this->material = $material;
        $this->dimension = $dimension;
    }
}

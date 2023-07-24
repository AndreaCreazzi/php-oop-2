<?php
require_once __DIR__ . '/products.php';

class Games extends Products
{
    public $features;
    public $size;

    public function __construct($title, $price, $type, $image, $features, $size)
    {
        parent::__construct($title, $price, $type, $image);
        $this->features = $features;
        $this->size = $size;
    }
}

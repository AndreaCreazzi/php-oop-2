<?php

class Products
{
    public $title;
    public $price;
    public $type;
    public $image;

    public function __construct($title, $price, $type, $image)
    {
        $this->title = $title;
        $this->price = $price;
        $this->type = $type;
        $this->image = $image;
    }
}

<?php
include __DIR__ ."/Product.php";
class Accessories extends Prod
{
    public $material;
    public $size;
    public function __construct($id, $name, $description, $price, $img, $category, $material, $size)
    {
        $this->material = $material;
        $this->size = $size;
        
        parent::__construct($id, $name, $description, $price, $img, $category);
    }
}
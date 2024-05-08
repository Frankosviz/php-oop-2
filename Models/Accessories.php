<?php
include __DIR__ ."/Prod.php";
class Accessories extends Prod
{
    public $material;
    public $size;
    public function __construct($id, $name, $genre, $price, $category, $material, $size)
    {
        $this->material = $material;
        $this->size = $size;
        
        parent::__construct($id, $name, $genre, $price, $category);
    }
}
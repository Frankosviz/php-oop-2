<?php
include __DIR__ ."/Product.php";
class Foods extends Prod
{
    public $ingredients;
    public $weight;
    public function __construct($id, $name, $description, $price, $category, $ingredients, $weight)
    {
        parent::__construct($id, $name, $description, $price, $category, $ingredients);
        $this->ingredients = $ingredients;
        $this->weight = $weight;
       
        
    }
}
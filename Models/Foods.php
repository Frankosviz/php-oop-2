<?php
include __DIR__ ."/Prod.php";
class Foods extends Prod
{
    public $ingredients;
    public $weight;
    public function __construct($id, $name, $genre, $price, $category, $ingredients, $weight)
    {
        $this->ingredients = $ingredients;
        $this->weight = $weight;
       
        parent::__construct($id, $name, $genre, $price, $category);
    }
}
<?php
class Prod
{
    public $id;
    public $name;
    public $description;

    public $img;

    public $category;

    public function __construct($id, $name, $genre, $price, $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $genre;
        $this->img = $price;
        $this->category = $category;
    }
}
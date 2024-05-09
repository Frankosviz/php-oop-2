<?php
class Prod
{
    public $id;
    public $name;
    public $description;
    public $price;
    public $img;

    public $category;

    public function __construct($id, $name, $description, $price, $img, $category)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->img = $img;
        $this->category = $category;
    }
    public function formatItem()
    {
        $item = [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->img,
            'description' => $this->description,
            'category' => $this->category,
            'price' => $this->price,
        ];
        return $item;
    }
    public function printCard($item)
    {
        extract($item);
        include __DIR__ . '/../Views/card.php';
    }

    /*  public static function fetchAll($path)
     {
         $foods= [];
         $data = file_get_contents(__DIR__ . '/' . $path . '.json');
         $dataToArray = json_decode($data, true);
         foreach ($dataToArray as $item) {
             $foods[] = new Foods($item['id'], $item['name'], $item['img'], $item['description'], $item['category'], $item['price']);
         }
         return $foods;
     } */

    public static function create($fileName, $className)
    {
        $items = [];

        $data = file_get_contents(__DIR__ . $fileName);
        $dataToArray = json_decode($data, true);
        if ($className === 'Foods') {
            foreach ($dataToArray as $item) {
                $items[] = new Foods($item['id'], $item['name'], $item['description'], $item['price'], $item['image'], $item['category'], $item['weight']);
            }
            return $items;
        } elseif ($className === 'Games') {

    }}
}
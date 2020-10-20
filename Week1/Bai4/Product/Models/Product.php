<?php
namespace Models;

class Product
{
    private $name;
    private $price;

    public function __construct($name = NULL, $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
?>
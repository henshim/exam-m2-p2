<?php


namespace Model;


class Product
{
    public $name;
    public $line;
    public $price;
    public $amount;
    public $day;
    public $description;

    public function __construct($name, $line, $price, $amount, $day, $description)
    {
        $this->name = $name;
        $this->line = $line;
        $this->price = $price;
        $this->amount = $amount;
        $this->day = $day;
        $this->description = $description;
    }
}
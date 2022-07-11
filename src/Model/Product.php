<?php
namespace APP\Model;

class Product{
    private string $name;
    private float $price;
    private int $quantity;
    private bool $isActive;

    public function __construct(
        string $name,
        float $price,
        int $quantity
    )
    {
        $this -> name = $name;
        $this -> price = $price;
        $this -> quantity = $quantity;
    }
}
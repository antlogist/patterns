<?php

include('Interfaces/CompositeItemInterface.php');
include('Interfaces/CompositeInterface.php');
include('Traits/CompositeTrait.php');
include('Models/Ingredient.php');
include('Models/Product.php');
include('Models/Order.php');
include('Factories/ObjectsFactory.php');

class PriceCompositeController
{
    private $factory;

    private $countIngredients = 4;
    private $ingredients = [];

    private $countProducts = 3;
    private $products = [];

    private $countOrders = 2;
    private $orders = [];

    public function __construct()
    {
        $this->factory = new ObjectsFactory;
    }

    public function run()
    {
        $this->initObjects();
    }

    public function initObjects()
    {
        $this->ingredients = $this->factory->createIngredients($this->countIngredients);
        $this->products = $this->factory->createProducts($this->countProducts, $this->ingredients);
        $this->orders = $this->factory->createOrders($this->countOrders, $this->products);

        $this->calcPrices();
    }

    public function calcPrices()
    {
        $result = [];

        foreach ($this->orders as $order) {
            $result[] = [
                'order_id' => $order->id,
                'order_price' => $order->calcPrice()
            ];
        }
    }
}

<?php

include('Interfaces/CompositeItemInterface.php');
include('Interfaces/CompositeInterface.php');
include('Models/Ingredient.php');
include('Factories/ObjectsFactory.php');

class PriceCompositeController
{
    private $factory;

    private $ingredients = [];

    private $products = [];

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
        $this->ingredients = $this->factory->createIngredients(2);

        echo '<pre>';
        var_dump($this->ingredients);
        echo '</pre>';
    }

    public function calcPrices()
    {
    }
}

<?php

class ObjectsFactory
{
    private $alphabet = '';

    public function __construct()
    {
        $this->alphabet = range('A', 'Z');
    }

    public function createIngredients(int $count)
    {
        $result = [];

        for ($i = 1; $i <= $count; $i++) {
            $result[] = $this->createIngredient($i);
        }

        return $result;
    }

    private function createIngredient(int $id)
    {
        $obj = new Ingredient;
        $obj->id = $id;
        $obj->name = $this->alphabet[$id - 1];

        return $obj;
    }

    public function createProducts(int $count, array $ingredients)
    {
        $result = [];
        for ($i = 1; $i <= $count; $i++) {

            $result[] = $this->createProduct($i, $ingredients);
        }
        return $result;
    }

    private function createProduct(int $id, array $ingredients)
    {
        $obj = new Product;
        $obj->id = $id;
        $obj->name = $this->alphabet[$id - 1];

        for ($j = 0; $j <= array_rand($ingredients); $j++) {
            $obj->setChildItem($ingredients[$j]);
        }

        return $obj;
    }

    public function createOrders(int $count, array $products)
    {
        $result = [];
        for ($i = 1; $i <= $count; $i++) {
            $result[] = $this->createOrder($i, $products);
        }
        return $result;
    }

    private function createOrder(int $id, array $products)
    {
        $obj = new Order;
        $obj->id = $id;
        $obj->name = $this->alphabet[$id - 1];

        for ($j = 0; $j <= array_rand($products); $j++) {
            $obj->setChildItem($products[$j]);
        }

        return $obj;
    }
}

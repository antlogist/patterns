<?php

class ObjectsFactory
{
    private $alphabet = '';

    public function __construct()
    {
        $this->alphabet = range('A', 'Z');
    }

    public function createIngredients(int $cnt)
    {
        $result = [];

        for ($i = 1; $i <= $cnt; $i++) {
            $result[] = $this->createIngredient($i);
        }

        return $result;
    }

    private function createIngredient(int $id)
    {
        $obj = new Ingredient;
        $obj->id = $id;
        $obj->name = $this->alphabet[$id];
        return $obj;
    }

    public function createProducts()
    {
    }

    public function createOrders()
    {
    }
}

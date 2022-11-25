<?php

include_once('Classes/Product.php');

class ProductController
{
    public function show()
    {
        $product = new Product;
        $product->setTitle('New product');
        $product->setPrice(50.00);

        $product->addProperty('size', 'XL');

        $product->addProperty('color', 'red');
        $product->setProperty('color', 'green');

        $product->addProperty('sex', 'male');
        $product->deleteProperty('sex');

        return $product;
    }
}

<?php

class Order implements CompositeInterface
{
    use CompositeTrait;

    public $type = 'order';
}

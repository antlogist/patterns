<?php

include_once('Interfaces/RecipeInterface.php');
include_once('Factories/FeedFactory.php');

class FeedController
{
    public function feedProduction($type): RecipeInterface
    {
        $factory = new FeedFactory;
        return $factory->build($type);
    }
}

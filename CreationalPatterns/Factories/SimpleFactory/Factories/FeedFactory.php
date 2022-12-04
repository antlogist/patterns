<?php

include_once('Interfaces/RecipeInterface.php');
include_once('Recipes/FatteningRecipe.php');
include_once('Recipes/RearingRecipe.php');

class FeedFactory
{
    public function build(string $type): RecipeInterface
    {
        switch ($type) {
            case 'fattening':
                return new FatteningRecipe;
            case 'rearing':
                return new RearingRecipe;
            default:
                throw new Exception('There is no this type of feed on the plant.');
        }
    }
}

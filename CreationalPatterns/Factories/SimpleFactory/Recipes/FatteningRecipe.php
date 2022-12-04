<?php

include_once('Interfaces/RecipeInterface.php');

class FatteningRecipe implements RecipeInterface
{
    public function getDescription()
    {
        echo 'Fattening recipe</br>';
    }
}

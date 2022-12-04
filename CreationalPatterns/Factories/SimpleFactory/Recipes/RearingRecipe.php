<?php

include_once('Interfaces/RecipeInterface.php');

class RearingRecipe implements RecipeInterface
{
    public function getDescription()
    {
        echo 'Rearing recipe</br>';
    }
}

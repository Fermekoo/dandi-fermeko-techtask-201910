<?php 

namespace App\Repositories;

use App\Interfaces\IngredientInterface;

class IngredientRepositories implements IngredientInterface
{
    
    public function getAll()
    {
        $json_data   = file_get_contents("https://raw.githubusercontent.com/loadsmileau/php-tech-task/master/src/App/Ingredient/data.json");
        $ingredients = json_decode($json_data, true);
        return $ingredients['ingredients'];    
    }
}
<?php 

namespace App\Interfaces;

interface RecipeInterface 
{
    public function getAll();
    
    public function chekAvailableRecipe($ingredients, $recipe, $exp_date);
}
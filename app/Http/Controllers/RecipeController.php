<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\RecipeInterface;
use App\Interfaces\IngredientInterface;

class RecipeController extends Controller
{
    protected $recipe;
    protected $ingredient;

    public function __construct(RecipeInterface $recipe, IngredientInterface $ingredient)
    {
        $this->recipe     = $recipe;    
        $this->ingredient = $ingredient;    
    }

    public function showAll(Request $reqeuest)
    {
        $recipe = $this->recipe->getAll();
        
        return $this->trueResponse('recipe list', 200, $recipe);
    }

    public function availableRecipe(Request $request)
    {
        $ingredients      = $this->ingredient->getAll();
        $recipe           = $this->recipe->getAll();
        $exp_date         = $request->query('exp_date');
        $available_recipe = $this->recipe->chekAvailableRecipe($ingredients, $recipe, $exp_date);

        return $this->trueResponse('available recipe list', 200, $available_recipe);

    }
}
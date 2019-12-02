<?php

namespace App\Http\Controllers;

use App\Interfaces\IngredientInterface;

class IngredientController extends Controller
{
    protected $ingredient;

    public function __construct(IngredientInterface $ingredient)
    {
        $this->ingredient = $ingredient;
    }

    public function showAll()
    {
        $ingredients = $this->ingredient->getAll();

        return $this->trueResponse('ingrdients list',200, $ingredients);
    }
}
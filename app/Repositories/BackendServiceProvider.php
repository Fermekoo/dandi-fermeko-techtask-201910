<?php

namespace App\Repositories;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    public function register()
    {
    
        $this->app->bind(
            'App\Interfaces\RecipeInterface',
            'App\Repositories\RecipeRepositories'
        );

        $this->app->bind(
            'App\Interfaces\IngredientInterface',
            'App\Repositories\IngredientRepositories'
        );
    }
}
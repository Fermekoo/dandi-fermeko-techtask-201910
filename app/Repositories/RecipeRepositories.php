<?php 

namespace App\Repositories;

use App\Interfaces\RecipeInterface;
class RecipeRepositories implements RecipeInterface
{

    public function getAll()
    {
        $json_data  = file_get_contents("https://raw.githubusercontent.com/loadsmileau/php-tech-task/master/src/App/Recipe/data.json");
        $receipt    = json_decode($json_data, true);
        return $receipt['recipes'];
    }

    public function chekAvailableRecipe($ingredients, $recipe, $exp_date)
    {
        $new_recipe = array();
        foreach($recipe as  $r):
            $cek = $this->chekIngredients($r['ingredients'], $ingredients, $exp_date);
            if(!$cek){
                continue;
            }
            $new_recipe[] =[
                'title'       => $r['title'],
                'ingredients' => $r['ingredients'],
            ];     
        endforeach;
        return $new_recipe;
    }
    
    private function chekIngredients($recipe_ingredients, $list_ingredients, $exp_date) {
	
        $date = ($exp_date) ? : date("Y-m-d");
        $availability = [];
      foreach ($list_ingredients as $element) {
        $time = strtotime($element['use-by']);
        $use_by = date('Y-m-d',$time);
    
        if ($use_by >= $date) {
           $availability[] = $element['title'];
        }
      }

      $compare = array_intersect($availability, $recipe_ingredients);
       if(!empty($compare)){
           return true;
       }
       return false;
    }
}
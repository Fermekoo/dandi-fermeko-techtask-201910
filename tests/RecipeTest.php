<?php 

class RecipeTest extends TestCase
{
    public function testGetAll()
    {
        $this->get('v1/recipe',[]);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'code',
            'description',
            'results'   => ['*' =>[
                    'title',
                    'ingredients'=>[]
                ]
            ]       
            ]);
    }

    public function testAvailableRecipe()
    {
        $this->get('v1/lunch',['exp_date'=>'2019-01-01']);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'code',
            'description',
            'results'   => ['*' =>[
                    'title',
                    'ingredients'=>[]
                ]
            ]       
            ]);

    }
}
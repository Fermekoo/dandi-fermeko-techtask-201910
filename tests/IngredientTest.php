<?php

class IngredientTest extends TestCase
{
    public function testGetAll()
    {
        $response = $this->get('v1/ingredient',[]);
        $this->seeStatusCode(200);
        $this->seeJsonStructure([
            'code',
            'description',
            'results'   => ['*' => 
                [
                    'title',
                    'best-before',
                    'use-by'
                ]
            ]
        ]); 
    }
}
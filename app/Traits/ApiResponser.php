<?php

namespace App\Traits;

trait ApiResponser
{
    protected function trueResponse($message='', $code=200, $data = null){
        
        if($data !== null){
            return response()->json(['code' => $code, 'description' => $message, 'results' => $data],$code);
        }else{
            return response()->json(['code' => $code, 'description' => $message],$code);
        }
    }
}
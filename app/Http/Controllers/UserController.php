<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $user=[
        ['id'=>1,'nom'=>"hamza1",'prenom'=>"ali"],
        ['id'=>2,'nom'=>"hamza2",'prenom'=>"ali"],
        ['id'=>3,'nom'=>"hamza3",'prenom'=>"ali"]
        ];
        return  response()->json($user);
       

    
}
public function checkuser($id){
    if($id<10)
        {
            return ' n welkoooooom ';
        }
    else{
        return " laaaa merhbaaaaaaaaaaaaa";
    }


}
}

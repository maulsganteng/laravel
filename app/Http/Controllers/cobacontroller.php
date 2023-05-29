<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cobacontroller extends Controller
{
    public function example()
    {
        return "Hello controller";
    }
    public function request(Request $request){
        $name = $request->input("name","fikri");
        return $name;
    }
    public function nestedRequest(Request $request){
        $nested = $request->input();
        return json_encode($nested);
    }

}

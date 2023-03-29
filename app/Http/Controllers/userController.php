<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function about($name, $age=null){
        return view('about', ['name' => $name, 'age'=> $age]);
    }
}

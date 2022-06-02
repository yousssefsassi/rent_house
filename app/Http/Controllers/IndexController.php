<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function __invoke(){
        //return'c\'est mon premier contrleur IndexController';
        //affiche une chaine de caractere 
        return view('index',['name' => 'souha','nb' => 2]);
    }
}

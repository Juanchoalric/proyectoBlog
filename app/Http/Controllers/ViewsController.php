<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    public function index(){
      return view("index");
    }

    public function recipe(){
      return view("recipe");
    }

    public function recipeIndex(){
      return view("recipe_index");
    }

    public function categoria(){
      return view("categoria");
    }

    public function register(){
      return view("register");
    }
    
    public function about(){
      return view("about");
    }
}

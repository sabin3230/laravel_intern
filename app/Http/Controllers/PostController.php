<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){

        return view('index');

    }
    
    public function show($id, $name){
         return $name. ' intern id:'. $id;
    }
}

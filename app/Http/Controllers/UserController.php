<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cr;

class UserController extends Controller
{
  
     public function __construct()
          {
       $this->middleware('auth')->only('index');
   }


    public function index(Request $request){
        $test = $request->data;

        dd($test);
    }

     public function create()
    {
       return "user add";
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         return "user store";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
         return "my name is: " . $name. " working intern in Ekbana"; 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
         return "user edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
         return "user update";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
         return "user delete";
    }
}

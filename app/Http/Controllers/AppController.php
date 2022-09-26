<?php

namespace App\Http\Controllers;

use App\Http\Middleware\OnlyMiddelware;
use App\Models\App;
use App\Http\Request;
use App\Http\Requests\StoreAppRequest;
use App\Http\Requests\UpdateAppRequest;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // Public function __construct(){
        
    //     $this->middleware('auth', 'OnlyMiddleware')->only('index');
    // }
    
    public function __construct(Request $request)
    {
        $this->middleware(function ($request, $next) {
            $this->middleware('auth');
            $this->middleware('OnlyMiddelware')->only('index');
            return $next($request);
    });
    }


    public function index()
    {
        return "THIS IS THE OUTPUT OF ONLY MIDDLEWARE";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAppRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\App  $app
     * @return \Illuminate\Http\Response
     */
    public function show(App $app)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\App  $app
     * @return \Illuminate\Http\Response
     */
    public function edit(App $app)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppRequest  $request
     * @param  \App\Models\App  $app
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppRequest $request, App $app)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\App  $app
     * @return \Illuminate\Http\Response
     */
    public function destroy(App $app)
    {
        //
    }
}

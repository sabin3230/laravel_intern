<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//basic route

Route::get('text', function(){
    return 'this is laravel interns';
});

//route with call view
Route::view('intern', 'index');

//route using same output as using controller calling method
Route::get('/call', [PostController:: class, 'index']);

//request parameter
Route::get('/name/{name}', function($name){

    return view('index', ['names' => $name]);
});


//route parameter pass
Route::get('/show/{name}/{id}', [PostController:: class, 'show']);

//route Regular Expression Constraints

Route::get('/profile/{id}/{name}', function($id, $name){
    return "id is:". $id . "," . "name is:". $name; 
})->where(['id' => '[0-5]+' , 'name' => '[a-zA-Z]+']);


//Route group 

Route::controller(ServiceController::class) ->group(function(){
    Route::get('/add',  'create');
    Route::get('/view',  'show');
    Route::get('/edit',  'edit');


});


//  Route::group ([ServiceController::class,'middleware' => 'auth' ], function(){

 
// Route::get('/delete',  'delete');

// });


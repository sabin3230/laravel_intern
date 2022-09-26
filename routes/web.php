<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;

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

// //basic route

// Route::get('text', function(){
//     return 'this is laravel interns';
// });

// //route with call view
// Route::view('intern', 'index');

// //route using same output as using controller calling method
// Route::get('/call', [PostController:: class, 'index']);

// //request parameter
// // // Route::get('/name/{name}', function($name){

// //     return view('index', ['names' => $name]);
// // });


// //route parameter pass
// Route::get('/show/{name}/{id}', [PostController:: class, 'show']);

// //route Regular Expression Constraints

// Route::get('/profile/{id}/{name}', function($id, $name){
//     return "id is:". $id . "," . "name is:". $name; 
// })->where(['id' => '[0-5]+' , 'name' => '[a-zA-Z]+']);


// // Route group 

// Route::controller(ServiceController::class) ->group(function(){
//     Route::get('/add',  'create');
//     Route::get('/view',  'show');
//     Route::get('/edit',  'edit');


// });


//  Route::group (ServiceController::class,['middleware' => ['auth' ]], function(){

 
// Route::get('/delete',  'delete');

// });

//route assignment2

//
// Route::get('/name/{name}', [UserController::class, 'show']);


// //Group Controller with middleware
// Route::controller(UserController::class,['middleware' => ['auth' ]]) ->group(function(){
//      Route::get('/index', 'index');
//     Route::get('/create', 'create');
//     Route::get('/store', 'store');
//     Route::get('/change', 'edit');
//     Route::get('/modify', 'update');
//     Route::get('/remove', 'delete');

// });

// //collection in resource method
// Route::resource('categories', CategoryController::class);

// // resource method path are store in product folder
// Route::group(['prefix'=> "product"], function(){
//     Route::resource('category', CategoryController::class);
// });


Route::resource('app', AppController::class)->middleware('app','OnlyMiddleware');
Route::resource('feature', FeatureController::class)->middleware(['auth', 'ExceptMiddleware']);


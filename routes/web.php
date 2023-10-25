<?php

use App\Http\Controllers\FoodsController;
use Illuminate\Support\Facades\Route;

// nhung router
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

//define more routes
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/posts', [PostsController::class, 'index']);
// bo sung FoodsController voi resource - cho day du ca phuong thuc crud
Route::resource('/foods', FoodsController::class);


// Goi sung dung ProductsController
/* Route::get('/products', [
    ProductsController::class,
    'index' //ham goi thuc thi trong controller
])->name('products'); */

// Route with params
Route::get('/products111/{productName}', [
    ProductsController::class,
    'detail11'
]); //cap ten cho route

// how to validate 'id' only integer
// Regular Expression
//Validate input parameters
Route::get('/products22/{id}', [
    ProductsController::class,
    'detail22'
])->where('id', '[0-9]+');

//what about string pattern [a-zA-Z]+
Route::get('/products/{productName}/{id}', [
    ProductsController::class,
    'detail'
])->where([
    'productName' => '[a-zA-Z0-9]+',
    'id' => '[0-9]+'
]);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



/* Route::get('/', function () {
    return view('home'); //response a view
    // return env('MY_NAME');
}); */

/* 
// dinh nghia Route/Endpoint
Route::get('/users', function () {
    return 'This is the users page.'; //response a string
});

//response an array
Route::get('/foods', function () {
    return ['poo', 'phoong', 'ben'];
});

// response an object
Route::get('/aboutMe', function () {
    return response()->json([
        'name' => 'Poo Phoong',
        'email' => 'p@gmail.com'
    ]);
});

//response another request = redirect
Route::get('/something', function () {
    return redirect('/foods');
});
 */
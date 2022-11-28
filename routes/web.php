<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeBooksController;
use App\Http\Controllers\PublisherController;
use App\Models\books;

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
    return view('homepage',[
        "title" => "homepage",
        "page_container" => 'Book List',
        "homepage" => books::all()
    ]);
});


Route::get(
    'Homepage/{id}',
    [TypeBooksController::class, 'index']
    );

Route::get(
    '/Category1{id}', 
    [TypeBooksController::class, 'Category1']
    );

Route::get(
    '/Category2{id}',
     [TypeBooksController::class, 'Category2']
    );

Route::get(
    '/Category3{id}',
     [TypeBooksController::class, 'Category3']
    );

Route::get(
    '/publisher1{id}',
     [PublisherController::class, 'publisher1']
    );

Route::get(
    '/publisher2{id}',
     [PublisherController::class, 'publisher2']
    );

Route::get(
    '/publisher3{id}',
     [PublisherController::class, 'publisher3']
    );

Route::get(
    '/ContactStore',
     [TypeBooksController::class, 'ContactStore']
    );



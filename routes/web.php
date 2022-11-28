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
    '/category2{id}',
     [TypeBooksController::class, 'category2']
    );

Route::get(
    '/category3{id}',
     [TypeBooksController::class, 'category3']
    );

Route::get(
    '/Publisher',
     [TypeBooksController::class, 'Publisher']
    );

Route::get(
    '/PublisherSimegawa{id}',
     [PublisherController::class, 'Publishersimegawa']
    );

Route::get(
    '/PublisherTika{id}',
     [PublisherController::class, 'PublisherTika']
    );

Route::get(
    '/PublisherEka{id}',
     [PublisherController::class, 'PublisherEka']
    );

Route::get(
    '/Contact',
     [TypeBooksController::class, 'Contact']
    );



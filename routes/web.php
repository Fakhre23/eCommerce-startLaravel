<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/about-me', function () {
    return view("about");
});

Route::view('/contact-me', "contact",[
    "page_name" => 'contact me',
    "page_descrption" => 'this is contact page view'
]);

Route::get('/category/{id}' , function($id) {

    $cats = [
        '1' => 'Games',
        '2' => 'Programing',
        '3' => 'Books'
    ];

    return view("category", [
        'the_id' => $cats[$id] ?? "this category not found"
    ]);
});
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/example', [Example::class, "myfunction"]);
Route::get('/home', function () {
    return view('pages.home');
})->name('home');
Route::get('/sub', function () {
    return view('pages.sub');
})->name('sub');

Route::get('/ruta2', function () {
    $data = ['mensaje' => 'Hola desde la ruta 2'];
    return response()->json($data);
});
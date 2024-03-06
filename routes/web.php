<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/metals', function () {
    $alkalines = [
        ['name' => 'Litio'],
        ['name' => 'Sodio'],
        ['name' => 'Potassio']
    ];
    $transitions = [
        ['name' => 'Ferro'],
        ['name' => 'Titanio'],
        ['name' => 'Cobalto']
    ];

    $data = compact('alkalines','transitions');
    return view('elements.metals', $data);
})->name('metals');

Route::get('/gas', function () {
    $gas = [
        ['name' => 'Elio'],
        ['name' => 'Neon'],
        ['name' => 'Argo']
    ];

    $data = compact('gas');
    return view('elements.gas', $data);
})->name('gas');

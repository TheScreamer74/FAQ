<?php

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
    DB::table('posts')->insert([
        'title' => 'Le gros titre',
        'body' => 'Le gros body'
    ]);
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/help', function () {
    return view('pages.help');
});

Route::get('/events', function () {

    $events = [
        /*
             'premier event',
             'deuxieme event',
             'troisieme event',
        */
    ];


    return view('pages.events', compact('events'));
});
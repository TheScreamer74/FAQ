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
    $view = view('welcome');
    $view->first_name = 'The';
    $view->last_name = 'Screamer';
    return $view;
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/help', function () {
    return view('pages.help');
});

Route::get('/events', function () {

    return view('pages.events', [
        'Event_1' => 'premier event',
        'Event_2' => 'deuxieme event',
        'Event_3' => 'troisieme event',
    ]);
});
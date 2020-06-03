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
    return view('base');
})->name('/');
//Route::get('home', function () {
//    return view('Frontend.homepage');
//})->name('home');
Route::get('joinUs', function () {
    return view('Frontend.joinUs');
})->name('join');
//Route::get('about', function () {
//    return view('Frontend.about');
//})->name('about');
Route::get('careers', function () {
    return view('Frontend.careers');
})->name('careers');
//Route::get('event', function () {
//    return view('Frontend.event');
//})->name('event');
Route::get('/home', 'PageController@Home')->name('home');

Route::get('/vacancies', 'PageController@Vacancies')->name('vacancies');
Route::get('/form', 'PageController@Form')->name('form');
Route::post('/addform', 'PageController@AddForm')->name('addform');
Route::get('/about/{id}', 'PageController@About')->name('about');
Route::post('/address', 'PageController@Addres')->name('address');
Route::get('/resform', 'PageController@ResForm')->name('resform');
Route::get('/resroom/{id}', 'PageController@AddRoom')->name('resroom');
Route::post('/event', 'PageController@AddEvent')->name('event');
Route::get('/eventform', 'PageController@EventForm')->name('eventform');
Route::get('/eventshow', 'PageController@Event')->name('eventshow');

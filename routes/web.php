<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});




Route::get('/agenda','App\Http\Controllers\ProjectController@data');
Route::get('/agenda/add','App\Http\Controllers\ProjectController@add');
Route::post('/agenda','App\Http\Controllers\ProjectController@addProcess');
Route::get('/agenda/edit/{id}', 'App\Http\Controllers\ProjectController@edit');
Route::patch('/agenda/{id}', 'App\Http\Controllers\ProjectController@editProccess');
Route::delete('/agenda/{id}', 'App\Http\Controllers\ProjectController@delete');
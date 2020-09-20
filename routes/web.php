<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/post',[PostController::class , 'index']);
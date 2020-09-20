<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;


Route::get('product',[ProductController::class, 'index']);
Route::post('/product/create',[ProductController::class , 'store']);
Route::get('/product/{id}',[ProductController::class, 'show']);
Route::put('/product/{id}',[ProductController::class , 'update']);
Route::delete('/product/{id}',[ProductController::class , 'destroy']);

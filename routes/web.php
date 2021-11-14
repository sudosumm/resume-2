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





Route::resource('index',\App\Http\Controllers\IndexController::class);
Route::resource('about',\App\Http\Controllers\AboutController::class);
Route::resource('contact',\App\Http\Controllers\ContactController::class);
Route::resource('bloglisting',\App\Http\Controllers\BloglistingController::class);
Route::resource('blogdetail',\App\Http\Controllers\BlogdetailController::class);
Route::resource('404',\App\Http\Controllers\NotpageController::class);
Route::resource('email', \App\Http\Controllers\Form\FmailController::class)->only([
    'store'
]);
Route::resource('comment',\App\Http\Controllers\Form\FcommentController::class)->only([
    'store'
]);
Route::resource('contact',\App\Http\Controllers\Form\FcontactController::class)->only([
    'store'
]);



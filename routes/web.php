<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NovelController;
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


// Common Resource Routes:
// index - Show all listings
// show - Show single listing
// create - Show form to create new listing
// store - Store new listing
// edit - Show form to edit listing
// update - Update listing
// delete - Delete listing


Route::get('/', function () {
    return view('index');
});

// Show All Novels
Route::get('/novels', [NovelController::class, 'index']);

// Show Single Novel
Route::get('/novels/{novel}', [NovelController::class, 'show']);


// Show login
Route::get('/login', [AuthController::class, 'index']);



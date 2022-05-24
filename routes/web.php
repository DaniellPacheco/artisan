<?php

use App\Http\Controllers\NovelController;
use App\Http\Controllers\UserController;
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

// Create Novel Page
Route::get('/novels/create', [NovelController::class, 'create']);

// Store Novel
Route::post('/novels', [NovelController::class, 'store']);

// Edit Novel Page
Route::get('/novels/{novel}/edit', [NovelController::class, 'edit']);

// Update Novel
Route::put('/novels/{novel}', [NovelController::class, 'update']);

// Delete Novel
Route::delete('/novels/{novel}', [NovelController::class, 'destroy']);

// Show Single Novel
Route::get('/novels/{novel}', [NovelController::class, 'show']);
// Show login
Route::get('/login', [UserController::class, 'index'])->name('login');

// Authenticate User
Route::post('/login', [UserController::class, 'authenticate']);

// Create Login
Route::get('/register', [UserController::class, 'create'])->name('register');

// Store User
Route::post('/register', [UserController::class, 'store']);

// Show All Users

// Show Single User

// Edit User

// Update User

// Delete User



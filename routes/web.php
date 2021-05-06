<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserPostController;

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
    return view('welcome');
});
Route::get('/test', [TestController::class, 'test']);

Route::get('/create-post', [UserPostController::class, 'insert']);
Route::get('/show-users', [UserPostController::class, 'show']);

Route::get('/delete-user/{id}', [UserPostController::class, 'delete']);
Route::get('/update-user/{id}', [UserPostController::class, 'update']);

Route::get('/users-with-scope', [UserPostController::class, 'getUsersWithScope']);
Route::get('/one-to-one-relationship-data/{id}', [UserPostController::class, 'oneToOneRelationShipData']);

// Route::post('/users', [UserPostController::class, 'users']);

Route::get('/add-users', function () {
    return view('UserRegister');
});
Route::post('/user-insert', [UserPostController::class, 'user_signup']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;

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

Route::get('users', [FirstController::class, 'list']);
Route::post('user/', [FirstController::class, 'item']);
Route::put('user/{id}', [FirstController::class, 'item']);
Route::delete('user/{id}', [FirstController::class, 'item']);
Route::get('user/{id}', [FirstController::class, 'item']);

//Route::get('user_info_create', [FirstController::class, 'createUserInfo']);
Route::get('users_info', [FirstController::class, 'listUserInfo']);
Route::post('user_info/', [FirstController::class, 'itemUserInfo']);
Route::put('user_info/{id}', [FirstController::class, 'itemUserInfo']);
Route::get('delete_user_info/{id}', [FirstController::class, 'deleteUserInfo']);
Route::get('user_info/{id}', [FirstController::class, 'itemUserInfo']);
Route::get('update_user_info/{id}', [FirstController::class, 'UpdateUserInfo']);


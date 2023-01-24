<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('api/users/{id}', [UsersController::class, 'fetchUsersSince']);
Route::get('api/users/{username}/details', [UsersController::class, 'fetchUsersDetails']);
Route::get('api/users/{username}/repos', [UsersController::class, 'fetchUsersRepos']);



<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\GroupsController;

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

Route::get('', [CobaController::class, 'index']);

//Route::get('/friends', [CobaController::class, 'index']);
//Route::get('/friends/create', [CobaController::class, 'create']);
//Route::post('/friends', [CobaController::class, 'store']);
//Route::get('/friends/{id}', [CobaController::class, 'show']);
//Route::get('/friends/{id}/edit', [CobaController::class, 'edit']);
//Route::put('/friends/{id}', [CobaController::class, 'update']);
//Route::delete('/friends/{id}', [CobaController::class, 'destroy']);

Route::resources([
    'friends' => CobaController::class,
    'groups' => GroupsController::class,
]);
Route::get('/groups/addmember/{group}', [GroupsController::class, 'addmember']);
Route::put('/groups/addmember/{group}', [GroupsController::class, 'updateaddmember']);
Route::put('/groups/deleteaddmember/{group}', [GroupsController::class, 'deleteaddmember']);
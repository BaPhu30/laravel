<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FCMController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post(config('endpoints.UPDATE_TOKEN'), [FCMController::class, 'updateToken'])->name('updateToken');
Route::post(config('endpoints.JOIN_CHAT'), [FCMController::class, 'joinChat'])->name('joinChats');
Route::post(config('endpoints.SEND_MESSAGE'), [FCMController::class, 'sendMessage'])->name('sendMessage');

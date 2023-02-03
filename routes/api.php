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

Route::get(config('endpoints.GET_CHAT_USERS'), [FCMController::class, 'getChatUsers'])->name('getChatUsers');
Route::post(config('endpoints.UPDATE_TOKEN'), [FCMController::class, 'updateToken'])->name('updateToken');
Route::post(config('endpoints.CREATE_CHAT'), [FCMController::class, 'createChat'])->name('createChat');
Route::post(config('endpoints.JOIN_CHAT'), [FCMController::class, 'joinChat'])->name('joinChats');
Route::get(config('endpoints.GET_MESSAGE'), [FCMController::class, 'getMessage'])->name('getMessage');
Route::post(config('endpoints.SEND_MESSAGE'), [FCMController::class, 'sendMessage'])->name('sendMessage');
Route::get(config('endpoints.GET_NOTIFICATION'), [FCMController::class, 'getNotification'])->name('getNotification');
Route::post(config('endpoints.SEND_NOTIFICATION'), [FCMController::class, 'sendNotification'])->name('sendNotification');

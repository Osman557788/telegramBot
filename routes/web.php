<?php

use Illuminate\Support\Facades\Route;
use Telegram\Bot\Api;

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

    $telegram = new Api(config('telegram.token'));
    return $response = $telegram->getMe();
    return $telegram->sendMessage(['chat_id'=> 44444,'text' => 'Hello World']);

});

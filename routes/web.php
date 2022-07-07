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

Route::post('/', function () {

    $telegram = new Api('5418190341:AAGrnoVAGAuIZD9bJdSczxHMM-E37tFyODs');
    return $updates = $telegram->getMe();
    // return $telegram->sendMessage(['chat_id'=> 44444,'text' => 'Hello World']);

});

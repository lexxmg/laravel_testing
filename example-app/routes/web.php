<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestMessage;
use App\Http\Controllers\TestRequest;

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

//http://localhost:8000/show-message/3
Route::get('/show-message/{iteration}', [TestMessage::class, 'showMessage'])->name('show-message');

//http://localhost:8000/test-request?items=43
Route::get('/test-request', [TestRequest::class, 'testGet'])->name('test-request');

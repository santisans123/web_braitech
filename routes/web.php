<?php

use App\Http\Controllers\FirebaseController;
use App\Http\Controllers\TTSController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teks', function () {
    return view('teks');
});

Route::resource('/teks', FirebaseController::class);
Route::get('/employee/pdf', [FirebaseController::class, 'createPDF']);
Route::post('/tts', [TTSController::class, 'index']);


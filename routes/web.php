<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


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

Route::get('/login/azure', function () {
    return app()->make(AuthController::class)->redirectToAzure();
})->name('login.azure');

Route::post('/logout', 'AuthController@logout')->name('logout'); // Add this line

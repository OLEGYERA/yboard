<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ag\IndexingModule;

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



Route::get('/ag', [IndexingModule::class, 'test']);
<<<<<<< HEAD
Route::get('/ag', [\App\Http\Controllers\Ag\StockModule::class, 'renderATransport']);

=======
>>>>>>> 7889e36d19e01ad88719f9535ced1f7ed51e488d

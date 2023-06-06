<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScrapingController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route Link Web
Route::get('/', function () {
    return view('form');
});

Route::get('/scrape', [ScrapingController::class, 'index']);
Route::post('/scrape', [ScrapingController::class, 'scrape']);

// Route Favicon
Route::get('/favicon.icon', function () {
    return response()->file(public_path('img/icon.ico'));
}); 

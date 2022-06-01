<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\PagesController;

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

/*Route::get('/', function () {
    return view('home');
});*/
Route::get('/',[PagesController::class,'home'])->name('root');
Route::get('/product',[productController::class,'product'])->name('product');
Route::get('/Our teams',[PagesController::class,'Our_teams'])->name('Our teams');
Route::get('/about us',[PagesController::class,'about_us'])->name('about us');
Route::get('/contact us',[PagesController::class,'contact_us'])->name('contact us');

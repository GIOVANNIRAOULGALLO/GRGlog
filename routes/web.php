<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ArticleController;

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

Route::get('/',[ArticleController::class,'index'])->name('homepage');
Route::get('/newArticle', [ArticleController::class,'newArticle'])->name('newArticle');
Route::post('/storeArticle', [ArticleController::class,'articleStore'])->name('articleStore');
Route::get('/details/{article}',[ArticleController::class,'show'])->name('show');
Route::get('/edit/{article}',[ArticleController::class,'editArticle'])->name('editArticle');
Route::put('/updateArticle/{article}',[ArticleController::class,'updateArticle'])->name('updateArticle');
Route::delete('/delete/{article}',[ArticleController::class,'destroy'])->name('deleteArticle');
Route::get('/userAccount',[ArticleController::class,'userAccount'])->name('userAccount');
Route::delete('/utente/{user}',[ArticleController::class,'destroyAccount'])->name('destroyAccount');
Route::get('/contattaci',[MailController::class,'contact'])->name('contact');
Route::post('/mailStore', [MailController::class,'mailStore'])->name('mailStore');
Route::get('/thankYou',[MailController::class,'thankYou'])->name('thankYou');
Route::post('/addPhotos',[PhotoController::class,'create'])->name('photo.create');
Route::get('/newPhoto',[PhotoController::class,'newPhoto'])->name('newPhoto');

Route::get('/newCar',[CarController::class,'createCar'])->name('createCar');
Route::post('/storeCar',[CarController::class,'storeCar'])->name('storeCar');
Route::get('/searchCar',[CarController::class,'searchCar'])->name('searchCar');








<?php
use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;


/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/',[ Homecontroller::class,'home'])
->name(name: 'accueil');


Route::get('/A_propos',[ Homecontroller::class,'a_propos'])
->name(name: 'a_propos');


Route::get('/services',[ Homecontroller::class,'services'])
->name(name: 'services');


// Route::get('/contact',[ Homecontroller::class,'contact'])
// ->name(name: 'contact');



Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendEmail'])->name('contact.send');


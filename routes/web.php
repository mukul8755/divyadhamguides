<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FestivalController;


Route::get('/', [PageController::class, 'home']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/services', [PageController::class, 'services']);
Route::get('/stay', [PageController::class, 'stay']);
Route::get('/packages', [PageController::class, 'packages']);
Route::get('/association', [PageController::class, 'association']);
Route::get('/travel-support', [PageController::class, 'travelSupport']);


Route::get('/sendMail', [PageController::class, 'sendMail']);



Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blogs.show');

Route::get('/destinations', [DestinationController::class, 'index'])->name('destinations.index');
Route::get('/destinations/{id}', [DestinationController::class, 'show'])->name('destinations.show');

// save the contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/admin/contacts/data', [ContactController::class, 'getData'])->name('contacts.data');




Route::get('/api/festival', [FestivalController::class, 'activeFestival']);

Route::options('{any}', function () {
    return response()->noContent();
})->where('any', '.*');
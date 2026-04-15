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

// Destinations
Route::controller(DestinationController::class)->group(function () {

    Route::get('/ayodhya-ram-mandir-darshan-booking-tour-packages', 'ayodhya')->name('ayodhya');

    Route::get('/kashi-vishwanath-darshan-booking-tour-packages', 'kashi')->name('kashi');

    Route::get('/prayagraj-sangam-kumbh-nagari-darshan-tour-packages', 'prayagraj')->name('prayagraj');

    Route::get('/omkareshwar-jyotirlinga-darshan-booking-tour-packages', 'omkareshwar')->name('omkareshwar');

    Route::get('/ujjain-mahakal-mandir-booking-tour-packages', 'mahakaleshwar')->name('mahakaleshwar');

    Route::get('/maa-baglamukhi-nalkheda-dham-darshan-booking-puja-services', 'baglamukhi')->name('baglamukhi');

});

// save the contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/admin/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/admin/contacts/data', [ContactController::class, 'getData'])->name('contacts.data');




Route::get('/api/festival', [FestivalController::class, 'activeFestival']);

// thanks page 
Route::get('/thanks', [PageController::class, 'thanks'])->name('thanks');


Route::get('/sitemap.xml', function () {
    return response()->file(public_path('sitemap.xml'));
});

Route::get('/sitemap-generate', function () {
    Artisan::call('sitemap:generate');
    return 'cron executed';
});

Route::options('{any}', function () {
    return response()->noContent();
})->where('any', '.*');
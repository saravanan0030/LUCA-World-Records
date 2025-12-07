<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/records', function () {
    return view('records');
})->name('records');

Route::get('/applynow', function () {
    return view('applynow');
})->name('applynow');

 Route::get('/ouradjudicators', function () {
    return view('ouradjudicators');
})->name('ouradjudicators');

 Route::get('/contact', function () {
    return view('contact');
})->name('contact');

 Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

 Route::get('/Individual', function () {
    return view('Individual');
})->name('Individual');

 Route::get('/massparticipation', function () {
    return view('massparticipation');
})->name('massparticipation');


 Route::get('/recognition', function () {
    return view('recognition');
})->name('recognition');


 use App\Http\Controllers\FormController;

Route::post('/send-form-email', [FormController::class, 'sendEmail'])->name('send.form.email');






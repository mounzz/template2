<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArrayController;

Route::get('/', function () {
    return view('home');
});

Route::get('team/front', function () {
    return view('team.dev.frontend');
})->name('front');

Route::get('team/back', [ArrayController::class,'front'])->name('back');

Route::get('contact/sav', function () {
    return view('infos.contact.sav');
})->name('sav');

Route::get('contact/info', function () {
    return view('infos.contact.info');
})->name('info');

Route::get('contact/partenariat', function () {
    return view('infos.contact.partenariat');
})->name('partenariat');

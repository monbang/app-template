<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'guest'])->group(function() {
    Route::get('login', 'LoginController@showLoginForm')->middleware(['web', 'guest'])->name('login');
    Route::post('login', 'LoginController@login')->middleware(['web', 'guest'])->name('login.attempt');
});


 Route::middleware(['web', 'auth'])->group(function() {
    Route::post('logout', 'LoginController@logout')->name('logout');
});

<?php 

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;

Route::middleware('localeSessionRedirect', 'localizationRedirect', 'localeViewPath')->group(function () {
    \Livewire\Livewire::setUpdateRoute(function ($handle) {
        return Route::post('/livewire/update', $handle);
    });
});
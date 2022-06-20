<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{ShowTweewts};


Route::get('tweets', ShowTweewts::class);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

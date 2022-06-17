<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{ShowTweewts};


Route::get('tweets', ShowTweewts::class);

Route::get('/', function () {
    return view('welcome');
});

<?php

use App\Http\Livewire\HelloController;
use App\Http\Livewire\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', InicioController::class)->name('home');

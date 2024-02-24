<?php

use App\Livewire\Tasks\TaskCreate;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/tasks/create', TaskCreate::class);

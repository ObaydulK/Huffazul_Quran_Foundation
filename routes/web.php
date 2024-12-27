<?php

use App\Http\Controllers\ApplyFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('applyform', [ApplyFormController::class, 'create'])->name('applyform.show');

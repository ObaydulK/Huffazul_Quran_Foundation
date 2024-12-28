<?php

use App\Http\Controllers\ApplyFormController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('create', [ApplyFormController::class, 'create'])->name('create.form');
Route::get('contact', [ApplyFormController::class, 'contact'])->name('contact.view');
Route::post('Peoplelist/store', [ApplyFormController::class, 'store'])->name('create.store');
Route::delete('Peopelist/destroy/{id}', [ApplyFormController::class, 'destroy'])->name('destroy.list');
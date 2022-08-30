<?php

use Illuminate\Support\Facades\Route;
use IsaacPawley\ModuleSandpit\Controllers\ContactsController;

Route::group(['middleware' => ['web', 'auth:sanctum', 'verified']], function () {
    Route::resource('contacts', ContactsController::class)->except([
        'show'
    ]);
});

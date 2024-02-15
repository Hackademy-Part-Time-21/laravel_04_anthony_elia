<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/',[PageController::class, 'home'])->name('home');
Route::get('/chi-siamo',[PageController::class, 'chisiamo'])->name('chisiamo');
Route::get('/servizi',[PageController::class, 'servizi'])name->('servizi');



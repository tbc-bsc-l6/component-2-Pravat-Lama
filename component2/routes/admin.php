<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth','is_admin')->group(function(){
 Route::get('/crud',[AdminController::class, 'index'])->name('crud');
});
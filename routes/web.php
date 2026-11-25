<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortalController;
Route::get('/', [PortalController::class,'catalog'])->name('home');
Route::middleware('guest')->group(function(){
 Route::view('/login','login')->name('login');
 Route::post('/login',[PortalController::class,'login'])->middleware('throttle:10,1');
 Route::view('/register','register')->name('register');
 Route::post('/register',[PortalController::class,'register']);
});
Route::middleware('auth')->group(function(){
 Route::post('/logout',[PortalController::class,'logout'])->name('logout');
 Route::get('/dashboard',[PortalController::class,'dashboard'])->name('dashboard');
 Route::get('/admin', [PortalController::class,'dashboard'])->middleware(\App\Http\Middleware\CheckRole::class.':admin');
});

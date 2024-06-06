<?php

use Illuminate\Support\Facades\Route;
use App\Enums\RoleEnum;

/*
    foreach(RoleEnum::cases() as $roles){
        dd(RoleEnum::cases());
    }
*/
Route::get('/', function () { return view('fronts/index');});
//Route::get('/suivi/evenements', function () { return view('fronts/dashb');})->name('dashboard');
Route::get('/accueil', function () { return view('fronts/index');})->name('accueil');
Route::get('/inscription', function () { return view('auth/inscription');}); //remplacé par register
Route::get('/connexion', function () { return view('auth/connexion');});   //remplacé par login

Auth::routes();

 // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');a voir pour implementer what possible to view
Route::get('/suivi/evenements', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard'); //authenticate before using it

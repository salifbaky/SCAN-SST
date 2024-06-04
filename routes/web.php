<?php

use Illuminate\Support\Facades\Route;
use App\Enums\RoleEnum;

Route::get('/', function () {
    //return view('welcome');
/*
    foreach(RoleEnum::cases() as $roles){
        dd(RoleEnum::cases());
    }
*/
    return view('fronts/index');
});

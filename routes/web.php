<?php

use Illuminate\Support\Facades\Route;

Route::get('/',                     function () { return view('/landing/landing'); });
Route::get('/login',                function () { return view('/public/user/auth/login'); });
Route::get('/register',             function () { return view('/public/user/auth/register'); });

Route::get('/dashboard',            function () { return view('/public/user/dashboard/dashboard'); });

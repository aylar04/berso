<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware;
use App\Models\User;

Route::view('/', 'home')->name('home');
Route::view("/signUp", "signUp")->name("vieWsignUp");
Route::view("/login", "login")->name("vieWlogin");

Route::group([
    "as" => "User.",
    "prefix" => "User",
    "controller" => UserController::class,
], function () {
    Route::get("/profile" , 'profile')->name('profile');
    Route::post("/send_code" , "sendCode")->name('send_code');
    Route::post("/createSignUp", "createSignup")->name("createSignup");
    Route::post("/LoginUser", "LoginUser")->name("LoginUser");
    Route::get("/logOut", "logOut")->name("logOut");
    Route::get("/edit/{user}" , 'edit')->name('edit');
    Route::post("/update/{user}" , "update")->name('update');
});

Route::group([
    "as" => "Category.",
    "prefix" => "Category",
    "controller" => CategoryController::class
], function () {

});

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
Route::view("/Dashbord", "Dashbord")->name("Dashbord");
Route::view("/signUp", "signUp")->name("vieWsignUp");
Route::view("/login", "login")->name("vieWlogin");

Route::group([
    "as" => "User.",
    "prefix" => "User",
    "controller" => UserController::class,
], function () {
    // SignUp
    Route::post("/createSignUp", "createSignup")->name("createSignup");

    // login
    Route::post("/LoginUser", "LoginUser")->name("LoginUser");

    // logOut
    Route::get("/logOut", "logOut")->name("logOut");
});

Route::group([
    "as" => "Category.",
    "prefix" => "Category",
    "controller" => CategoryController::class
], function () {

});

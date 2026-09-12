<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ArticleController;
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
    Route::post("/logincode" , "logincode")->name('logincode');
    Route::post("/createSignUp", "createSignup")->name("createSignup");
    Route::post("/LoginUser", "LoginUser")->name("LoginUser");
    Route::get("/logOut", "logOut")->name("logout");
    Route::get("/edit/{user}" , 'edit')->name('edit');
    Route::post("/CheckActivationCode" , 'CheckActivationCode')->name('CheckActivationCode');
    Route::post("/update/{user}" , "update")->name('update');
    Route::post("/loginPass" , "loginPass")->name('loginPass');
    Route::post("/sendLoginCode" , "sendLoginCode")->name('sendLoginCode');
});

Route::group([
    "as" => "Category.",
    "prefix" => "Category",
    "controller" => CategoryController::class
], function () {

});
Route::group([
    "as" => "article.",
    "prefix" => "article",
    "controller" => ArticleController::class
], function () {
Route::get('/list','index')->name('list');
});
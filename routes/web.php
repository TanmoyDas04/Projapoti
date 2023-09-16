<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

// Routes for backend part
Route::get("/dashboard",[Admin::class,"dashboard"]);


// Routes for frontend part
Route::get("/index",[Admin::class,"home"]);

Route::get('/', function () {
    return view('welcome');
});
?>
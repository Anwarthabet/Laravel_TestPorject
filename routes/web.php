<?php

use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;
// home Page
Route::view('/','home');
Route::view('/contact','contact');
/*
Route::controller(JobsController::class)->group(function(){


Route::get('/jobs', 'index');
Route::get('/jobs/create','create');
Route::get('/jobs/{job}','show');
Route::POST('/jobs/','store');
Route::get('/jobs/{job}/edit','edit');
Route::patch('/jobs/{job}','update');
Route::delete('/jobs/{job}','delete');
});*/
Route::resource('jobs',JobsController::class);
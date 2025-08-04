<?php

use Illuminate\Support\Facades\Route;

use App\Models\Job;




Route::get('/', function () {
    return view('Home');
});

Route::get('/Jobs', function ()  {
    $jobs = Job::all();
    return view('Jobs', [
        'Jobs' => Job::all()
    ]);
});


Route::get('/Job/{id}', function ($id){
 
    $job=Job::find($id);
     return view('Job',['job'=>$job]);
});

Route::get('/contact', function () {

    return view(
        "contact"
    );
});

<?php

use Illuminate\Support\Facades\Route;

use App\Models\Job;




Route::get('/', function () {
    return view('Home');
});

Route::get('/jobs/create', function (){
return view('jobs/create');
});
Route::get('/Jobs', function ()  {
    $jobs = Job::with('Employeer')->paginate(10);
    return view('jobs/index', [
        'Jobs' => Job::with('Employeer')->paginate(3)
    ]);
});


Route::get('/jobs/{id}', function ($id){
 
    $job=Job::find($id);
     return view('jobs/show',['job'=>$job]);
});




Route::get('/contact', function () {

    return view(
        "contact"
    );
});

<?php

use Illuminate\Support\Facades\Route;

use App\Models\Job;
use GuzzleHttp\Psr7\Request;

Route::get('/', function () {
    return view('Home');
});

Route::get('/jobs/create', function (){
return view('jobs/create');
});
Route::get('/Jobs', function ()  {
    $jobs = Job::with('Employeer')->paginate(10);
    return view('jobs/index', [
        'Jobs' => Job::with('Employeer')->latest()->paginate(3)
    ]);
});


Route::get('/jobs/{id}', function ($id){
 
    $job=Job::find($id);
     return view('jobs/show',['job'=>$job]);
});

Route::POST("/Jobs",function(){

   request()->validate([
    'title' => 'required|string|min:3',
    'salary' => 'required|numeric|min:0',
]);

    Job::create([

        'title'=>request("title"),
        'salary'=>Request('salary'),
        'nationality'=>'Suadi',
        'employeer_id'=>1


    ]);

return redirect("/Jobs");

});


Route::get('/contact', function () {

    return view(
        "contact"
    );
});

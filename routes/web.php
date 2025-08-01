<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/Jobs', function () {
    return view('Jobs', [
        'Jobs' => [
            [
                'id' => 1,
                'title' => 'Programmer',
                'salary' => '50000',
                'Nationality' => 'Yemeni'
            ],
            [
                'id' => 2,
                'title' => 'Manager',
                'salary' => '90000',
                'Nationality' => 'Egept'
            ],
            [
                'id' => 3,
                'title' => 'Tester',
                'salary' => '8000',
                'Nationality' => 'Egept'
            ],
        ]
    ]);
});


Route::get('/Job/{id}', function ($id) {
 $jobs = [
            [
                'id' => 1,
                'title' => 'Programmer',
                'salary' => '50000',
                'Nationality' => 'Yemeni'
            ],
            [
                'id' => 2,
                'title' => 'Manager',
                'salary' => '90000',
                'Nationality' => 'Egept'
            ],
            [
                'id' => 3,
                'title' => 'Tester',
                'salary' => '8000',
                'Nationality' => 'Egept'
            ],
        ];
     $job=   Arr::first($jobs,fn($job)=>$job['id']==$id);
     return view('Job',['job'=>$job]);
});

Route::get('/contact', function () {

    return view(
        "contact"
    );
});

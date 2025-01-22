<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Pest\Support\Arr as SupportArr;

Route::get('/', function () {
    return view(
        'home',
        [
            'greeting' => "Hallo",
            'name' => 'Daniel Paul'
        ]
    );
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/jobs', function () {
    return view(
        'jobs',
        [
            'jobs' => [
                [
                    'id' => '1',
                    'title' => 'Director',
                    'salary' => '$440,000'
                ],
                [
                    'id' => '2',
                    'title' => 'Programmer',
                    'salary' => '$600,000'
                ],
                [
                    'id' => '3',
                    'title' => 'Teacher',
                    'salary' => '$300,000'
                ],
            ]
        ]
    );
});


Route::get("/jobs/{id}", function ($id) {

    $jobs = [
        [
            'id' => '1',
            'title' => 'Director',
            'salary' => '$440,000'
        ],
        [
            'id' => '2',
            'title' => 'Programmer',
            'salary' => '$600,000'
        ],
        [
            'id' => '3',
            'title' => 'Teacher',
            'salary' => '$300,000'
        ],
    ];

    // Arr::first($jobs, function($job) use($id){
    //     return $job['id'] = $id;
    // });

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    // dd($job);

    return view("job", ['job' => $job]);
});



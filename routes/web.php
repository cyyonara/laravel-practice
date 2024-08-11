<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

$description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, maiores. Magni, doloribus ab repellat culpa corrupti voluptatum reiciendis aut tempora, perferendis sit assumenda impedit nam, voluptates rerum dicta alias cupiditate.";

$jobs = [
    [
        "id" => 1,
        "title" => "Web Developer",
        "salary" => "$20,000",
        "description" => $description
    ],
    [
        "id" => 2,
        "title" => "Data Analyst",
        "salary" => "$40,000",
        "description" => $description
    ],
    [
        "id" => 3,
        "title" => "Database Administrator",
        "salary" => "$15,000",
        "description" => $description
    ],
    [
        "id" => 4,
        "title" => "Manager",
        "salary" => "$20,000",
        "description" => $description
    ],
    [
        "id" => 5,
        "title" => "Project Manager",
        "salary" => "$40,000",
        "description" => $description
    ],
    [
        "id" => 6,
        "title" => "Designer",
        "salary" => "$15,000",
        "description" => $description
    ]

];

Route::get('/', function () use ($jobs) {
    return view('home', ["jobs" => $jobs]);
});


Route::get('/jobs/{id}', function ($id) use ($jobs) {

    $parsed_id = (int) $id;

    $selected_job = Arr::first($jobs, fn($job) => $job["id"] === $parsed_id);

    if (!$selected_job) {
        dd("Job not found.");
    }

    return view("job", ["job" => $selected_job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contacts', function () {
    return view('contact');
});

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function() {
    return view('jobs', [
            'jobs' => [
            [
                'id' => 1,
                'title' => 'Développeur web',
                'salary' => '30k',
            ],
            [
                'id' => 2,
                'title' => 'Développeur mobile',
                'salary' => '35k',
            ],
            [
                'id' => 3,
                'title' => 'Designer',
                'salary' => '25k',
            ],
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    dd($id);
    return view('contact');
});

Route::get('/contact', function() {
    return view('contact');
});
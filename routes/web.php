<?php

use Illuminate\Support\Facades\Route;
use App\Models\Jobs;

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
            'jobs' => Jobs::all(),
    ]);
});

Route::get('/jobs/{id}', function ($id) {

    $job = Jobs::find($id);

    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function() {
    return view('contact');
});

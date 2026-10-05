<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/nama/{nadine}', function ($nadine) {
    return 'Nama saya: ' . $nadine;
});

Route::get('/nim/{param1?}', function ($param1 = '2557301089') {
    return 'NIM saya: ' . $param1;
});

Route::get('/mahasiswa/detail', function () {
    return view('halaman-mahasiswa-detail');
});

Route::get('/mahasiswa/profile', function () {
    return view('halaman-mahasiswa-profile');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');



Route::get('/question', [QuestionController::class, 'index'])
		->name('question.index');
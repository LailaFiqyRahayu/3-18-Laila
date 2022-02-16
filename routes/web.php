<?php
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index', [
        "title" => "Beranda"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Laila Fiqy Rahayu",
        "email" => "3103120126@student.smktelkom-pwt.sch.id",
        "gambar" => "Laila.jpg"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});
Route::resource('/contacts', ContactController::class);


Auth::routes();
Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});

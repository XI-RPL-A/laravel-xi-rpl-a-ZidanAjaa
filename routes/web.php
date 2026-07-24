<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CompanyController;

//1
//Route::get('/', function () {
 //   return "Zidaen Ahmad Zein.";
//});

//Route::get('/about', function () {
  //  return "
    //NIM : 26030 <br>
    //Nama : Zidaen Ahmad Zein <br>
    //Kelas : XI-RPLA
    //";
//});

//Route::get('/articles{id}', function ($id) {
//    return "Ini adalah halaman artikel dengan ID: ".$id;
//});


// pratikum 2
// Route::get('/', [PageController::class, 'index']);
 // Route::get('/about', [PageController::class, 'about']);
 // Route::get('articles{id}', [PageController::class, 'articles']);


Route::get('/', [CompanyController::class, 'Home']);

Route::prefix('category')->group(function () {

    Route::get('/marbel-edu-games', function () {
        return app(CompanyController::class)->products('Marbel Edu Games');
    });

    Route::get('/marbel-and-friends-kids-games', function () {
        return app(CompanyController::class)->products('Marbel and Friends Kids Games');
    });

    Route::get('/riri-story-books', function () {
        return app(CompanyController::class)->products('Riri Story Books');
    });

    Route::get('/kolak-kids-songs', function () {
        return app(CompanyController::class)->products('Kolak Kids Songs');
    });

});

//Perbaiki route news
Route::get('/news', [CompanyController::class, 'news']);
Route::get('/news/{berita}', [CompanyController::class, 'news']);

//Perbaiki route program
Route::prefix('program')->group(function(){
    Route::get('/karir', function(){
        return app(CompanyController::class)->program('Karir');
        });
    Route::get('/magang', function(){
        return app(CompanyController::class)->program('Magang');
        });
    Route::get('/kunjungan-industri', function(){
        return app(CompanyController::class)->program('Kunjungan Industri');
        });
});

//Perbaiki route about-us
Route::get('/about-us', [CompanyController::class, 'about']);
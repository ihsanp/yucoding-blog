<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->group(function () {
    // Update Profile
   Route::post("/update/myprofile","apiControler@updateProfile");
   // artikel
   // Get All Artikel
   Route::get('/artikels', "Api\ArtikelController@getArtikels");
   // Get Single Artikel
   Route::get('/artikel/{slug}', "Api\ArtikelController@getArtikel");
   // Tambah Artikel
   Route::post("/tambah-artikel","Api\ArtikelController@tambahArtikel");
   // Edit Artikel
   Route::post("/edit-artikel/{id}","Api\ArtikelController@editArtikel");
   // Hapus Artikel
   Route::get("/hapus-artikel/{id}","Api\ArtikelController@hapusArtikel");

   include "group/komentar.php";
       
//    Komentar
//    // get All Komentar
//    Route::get('/komentars', "Api\komentarController@getKomentars");
//    // Get Reply
//    Route::get('/reply/{id}', "Api\komentarController@getKomentar");
//    // Tambah Komentar
//    Route::post("/tambah-komentar","Api\komentarController@tambahKomentar");
//    // Edit Komentar
//    Route::post("/edit-komentar/{id}","Api\komentarController@editKomentar");
//    // Hapus Komentar
//    Route::get("/hapus-komentar/{id}","Api\komentarController@hapusKomentar");


});

Route::get('/tesApi', function(){
    return "tes Api";
});

Route::post('/inputNama', function(Request $req){
    return "Nama saya  :" . $req->nama;
});


Route::get('/artikels', "apiController@getartikels");
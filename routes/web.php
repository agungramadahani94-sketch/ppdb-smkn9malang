<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.beranda.index');
})->name('beranda');

Route::get('/user',function(){
    return view('admin.pages.user.index');
})->name('user');

Route::get('/jurusan',function(){
    return view('admin.pages.jurusan.index');
})->name('jurusan');

Route::get('/pendaftaran',function(){
    return view('admin.pages.pendaftaraan.index');
})->name('pendaftaran');

Route::get('/guest', function () {
    return view('guest.layouts.app');
});



?>
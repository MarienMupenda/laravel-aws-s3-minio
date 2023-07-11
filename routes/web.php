<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

    //Storage::disk('digitalocean')->put('hello.json', '{"hello": "world"}');

    $files = Storage::disk('minio')->files();
    $files2 = Storage::disk('digitalocean')->files();
    dd($files, $files2);
});

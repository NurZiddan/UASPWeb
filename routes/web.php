<?php

use App\Http\Controllers\MyController;
use App\Http\Controllers\registrasi;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\SpkController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.indexku');
});

Route::get('/spk',[SpkController::class,'hitung'])->name('hitung');
Route::post('/spk/store',[SpkController::class,'store']);
Route::post('/spk/delete',[SpkController::class,'destroy']);

Route::get('/blog', function () {
    return view('frontend.blog');
});

Route::get('/blog_detailsr', function () {
    return view('frontend/blog_details');
});

Route::get('/blog_detailsr1',function(){
    return view('frontend/blog_details1');
});

Route::get('/bpmubes',function(){
    return view('frontend/blog_details2');
});

Route::get('/formasihbh23',function(){
    return view('frontend/blog_details3');
});

// Route::get('/rana9', function (){
//     return view('frontend/rana9');
// });

// Route::get('/rana9',[RegistrasiController::class,'index']);
// Route::post('/rana9/store',[RegistrasiController::class,'store']);
// Route::put('/rana9/{id}', [RegistrasiController::class, 'edit']);

Route::resource('/rana9', RegistrasiController::class);

Route::get('/bem',function(){
    return view('frontend/bem');
});

Route::get('/bpm',function(){
    return view('frontend/bpm');
});

Route::get('formasi',function(){
    return view('frontend/formasi');
});

Route::get('hmpti',function(){
    return view('frontend/hmpti');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    "verified"
])->group(function() {
    Route::get('/dashboard',function (){
        return view('dashboard');
    })->name("dashboard");
});


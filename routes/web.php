<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NineController;
use App\Http\Controllers\vtcontroller;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::view('/create_paper', "createpaper");
Route::view('/select_exam', "selectexam");


Route::view('/ix_upload', "upload/ix_upload");
Route::view('/x_upload', "upload/x_upload");
Route::view('/xi_upload', "upload/xi_upload");
Route::view('/xii_upload', "upload/xii_upload");
Route::view('/entrance_upload', "upload/entrance_upload");

Route::post('/ix_upload', [NineController::class, 'ix_upload']);


Route::view('/test', "test");

Route::view('/NEET-XI', "neetxi");
Route::view('/NEET-XII', "neetxii");

Route::resource('products', ProductController::class);

Route::post('/NEET-XII', [ProductController::class, 'store1']);

Route::view('/JEE-XI', "jeexi");
Route::view('/JEE-XII', "jeexii");
Route::post('/JEE-XI', [ProductController::class, 'jeexi']);
Route::post('/JEE-XII', [ProductController::class, 'jeexii']);

Route::view('/CET-XI', "cetxi");
Route::view('/CET-XII', "cetxii");
Route::post('/CET-XI', [ProductController::class, 'cetxi']);
Route::post('/CET-XII', [ProductController::class, 'cetxii']);

// ********** PRINT QUESTION PAPER **********
Route::view('/qpjeexi', "q_paper/qpjeexi");
Route::view('/qpjeexii', "q_paper/qpjeexii");
Route::view('/qpneetxi', "q_paper/qpneetxi");
Route::view('/qpneetxii', "q_paper/qpneetxii");
Route::view('/qpcetxi', "q_paper/qpcetxi");
Route::view('/qpcetxii', "q_paper/qpcetxii");
// ********** PRINT QUESTION PAPER **********
Route::view('/qp', "qp");
Route::get('/qp', [vtcontroller::class, 'ShowPaper'])->name('home');
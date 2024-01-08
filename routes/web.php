<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [LanguageController::class, 'index'])->name('home');
Route::get('lang/change', [LanguageController::class, 'change'])->name('changeLang');

Route::get('/download-pdf', [PDFController::class, 'downloadPdf'])->name('download.pdf');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

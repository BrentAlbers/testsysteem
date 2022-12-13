<?php

use App\Http\Controllers\PagesController;
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
    return view('welcome');
});


Route::get('/', [PagesController::class, 'viewHomePage'])->name('home');
Route::get('/contact', [PagesController::class, 'viewContactPage'])->name('contact');
Route::get('/overons', [PagesController::class, 'viewOveronsPage'])->name('overons');
Route::get('/events', [PagesController::class, 'viewEventsPage'])->name('events');

Route::post('/processForm', [FormController::class, 'processForm'])->name('processForm');

require __DIR__.'/auth.php';
 
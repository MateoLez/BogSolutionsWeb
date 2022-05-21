<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactanosController;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Route::get('contactanos', function () {

 

// })->name('contactanos.index');
Route::get('home', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('home', [ContactanosController::class, 'store'])->name('contactanos.store');
Route::post('', [ContactanosController::class, 'store'])->name('contactanos.store');
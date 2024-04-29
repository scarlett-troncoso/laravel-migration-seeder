<?php

use App\Http\Controllers\Guest\PagesController;
use App\Models\Train;
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

/*
Route::get('/', function () {
   // dd(Train::all());
   $trains = Train::all();
    return view('welcome', compact('trains'))->name('home');
});
*/

Route::get('/', [PagesController::class, 'index'])->name('home');

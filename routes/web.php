<?php

use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
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
    return view('home');
});
Route::get('/manage-admins', [DisplayController::class, 'index']);

Route::get('delete/{id}', [DisplayController::class, 'delete']);

Route::get('edit/{id}', [DisplayController::class, 'show']);

Route::post('edit', [DisplayController::class, 'edit']);

Route::get('/register-admin', function () { 
    return view('register-admin');
});

Route::get('/edit-news', function () {
    return view('edit-news');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/tax-slab', function () {
    return view('tax-slab');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/index', function () {
    return view('index');
});

Route::get('/project', function () {
    return view('project');
});
Route::get('/user-details', function () {
    return view('user-details');
});
Route::get('/user-list', function () {
    return view('user-list');
});
Route::get('/user-pan-detail', function () {
    return view('user-pan-detail');
});
Route::get('/user-pan-list', function () {
    return view('user-pan-list');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
  
});


Route::post('register-admin', [AdminRegisterController::class, 'store'])->name('admin.register');
Route::get('/inbox', 'App\Http\Controllers\InboxController@index')->name('inbox');

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\AdminRegisterController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DisplayController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PanController;
use App\Http\Controllers\TaxController;
use App\Http\Controllers\UserInfoController;
use App\Models\Feedback;
use Illuminate\Support\Facades\Auth;

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
Route::get('deletead/{id}', [DisplayController::class, 'delete']);
Route::get('edit/{id}', [DisplayController::class, 'show']);
Route::put('admin-update/{id}', [DisplayController::class, 'update'])->name('admin.update');
Route::get('/register-admin', function () { 
    return view('register-admin');
});

Route::get('/user-pan-list',[UserInfoController::class,'index']);
Route::get('see/{id}',[UserInfoController::class,'show']);
Route::get('deletead/{id}', [UserInfoController::class, 'delete']);
Route::get('normal-user-profile/{id}',[UserInfoController::class,'detials']);
Route::get('verifieduser/{id}',[UserInfoController::class,'showverifieduser']);


Route::get('/news', function () {
    $user = Auth::user();

    if (!$user->hasRole(['super-admin', 'province-admin'])) {
        return redirect('/home');
    }
    return view('news');
});
Route::get('/tax-slab', function () {
    return view('tax-slab');
});

Route::get('/user-list',[UserInfoController::class,'indexTaxPayer']);

Route::get('/user-details', function () {
    return view('user-details');
});


Route::get('/usertaxslab',[DisplayController::class,'displaytax'])->name('usertaxslab.displautaxslab');

Route::get('/dashboard', function () {
    $user = Auth::user();

    if (!$user->hasRole(['super-admin', 'province-admin'])) {
        return redirect('/home');
    }

    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


 Route::middleware('auth')->group(function () {
     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
 });

Route::get('/user-profile', [ProfileController::class, 'index'])->name('user.profile');

Route::post('/user-profile', [ProfileController::class, 'create'])->name('user.profile.create');
Route::put('/user-register-form-2/{id}', [ProfileController::class, 'edt'])->name('user.profile.2.edit');
Route::delete('/user-profile/{id}', [ProfileController::class, 'destroy'])->name('user.profile.delete');


Route::get('/detail-news', [NewsController::class, 'show_news_card'])->name('show.news.detal');
Route::get('/edit-news', [NewsController::class, 'index'])->name('admin.edit.news');
Route::post('/edit-news', [NewsController::class, 'create'])->name('admin.edit.news.create');
Route::get('/home', [NewsController::class, 'show'])->name('show.news.home');
Route::get('/news', [NewsController::class, 'news_detials'])->name('show.news.dashboard') ;
Route::get('/show_news/{id}',[NewsController::class,'show_news']);
Route::put('/updateNews/{id}',[NewsController::class,'updateNews']);
Route::get('delete/{id}', [NewsController::class, 'delete']);
Route::get('/show_news_details/{id}',[NewsController::class,'show_news_detials'])->name('show.news.detials');

Route::get('/tax', [TaxController::class, 'index'])->name('Tax.tax');
Route::post('/tax', [TaxController::class, 'create'])->name('Tax.tax.create');
Route::post('calculate-tax/{id}', [TaxController::class, 'calculateTax'])->name('tax.calculate');
Route::get('/tax/report/{id}', [TaxController::class, 'showReport'])->name('tax.report');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('home');
Route::post('/home', [FeedbackController::class, 'create'])->name('Feedback.create');

Route::get('/verify/{id}', [ProfileController::class, 'verify'])->name('user.verify');

//verify pan from profileController




Route::post('register-admin', [AdminRegisterController::class, 'store'])->name('admin.register');
Route::get('/inbox', 'App\Http\Controllers\InboxController@index')->name('inbox');


require __DIR__.'/auth.php';

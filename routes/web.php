<?php

use App\Http\Controllers\Alt1Controller;
use App\Http\Controllers\Alt2Controller;
use App\Http\Controllers\Alt3Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeAlt1Controller;
use App\Http\Controllers\IndexAlt1Controller;
use App\Http\Controllers\NamaUndanganController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UndanganAlt1Controller;
use App\Http\Controllers\UndanganController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewAlt1Controller;
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



// Routing Admin


Route::get('/login', [LoginController::class, 'index'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::get('/register', [LoginController::class, 'register'])->name('register.form');
Route::post('/create', [LoginController::class, 'create'])->name('register.submit');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
// Route::get('/', function () {
//     return redirect()->route('login.form');
// });


Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/view-alternative1', [ViewAlt1Controller::class, 'index'])->name('view-alternative1');
    Route::get('/home', function () {
        return redirect()->route('dashboard');
    });
    // Route::get('/undangan/pilih-template', [UndanganController::class, 'template'])->name('template');
    // Route::resource('/undangan', UndanganController::class);
    Route::resource('/undangan-alternative1', UndanganAlt1Controller::class);
    Route::get('/undangan-alternative1', [UndanganAlt1Controller::class, 'index'])->name('undangan-alternative1');
    Route::get('/undangan-alternative1/{id}/view', [UndanganAlt1Controller::class, 'show'])->name('undangan-alternative1-view');
    Route::delete('/undangan-alternative1', [UndanganAlt1Controller::class, 'destroy'])->name('undangan-alternative1.destroy');


});





// Routing User

Route::get('/', function () {
    return view('index');
});

// Route::get('/undangan-alt1', function () {
//     return view('undangan-aldi.home');
// });

Route::resource('/nama-undangan', NamaUndanganController::class);
Route::get('/nama-undangan/{id}/list', [NamaUndanganController::class, 'index'])->name('nama-undangan-list');
Route::get('/nama-undangan/{id}/create', [NamaUndanganController::class, 'create'])->name('nama-undangan-create');
Route::post('/nama-undangan/{id}/list', [NamaUndanganController::class, 'store'])->name('nama-undangan-store');
Route::put('/nama-undangan/{undanganAlt1Id}/{id}', [NamaUndanganController::class, 'update'])->name('nama-undangan-update');
Route::delete('/nama-undangan/{id}', [NamaUndanganController::class, 'destroy'])->name('nama-undangan.destroy');


Route::get('/{nama_mempelai_laki}&{nama_mempelai_perempuan}/preview', [HomeAlt1Controller::class, 'show'])->name('undangan-alt1-home');
Route::get('/{nama_mempelai_laki}&{nama_mempelai_perempuan}/preview/index', [IndexAlt1Controller::class, 'show'])->name('undangan-alt1-preview');

Route::get('/{nama_mempelai_laki}&{nama_mempelai_perempuan}/{nama_undangan}', [HomeAlt1Controller::class, 'showDetail'])->name('undangan-alt1-first');
Route::get('/{nama_mempelai_laki}&{nama_mempelai_perempuan}/{nama_undangan}/index', [IndexAlt1Controller::class, 'showDetail'])->name('undangan-alt1-index');

Route::post('/{nama_mempelai_laki}&{nama_mempelai_perempuan}/{nama_undangan}/index', [IndexAlt1Controller::class, 'store'])->name('undangan-alt1-post');

Route::resource('/undangan-alt1/index', Alt1Controller::class)->only(['index', 'store']);




Route::get('/undangan-alt2', function () {
    return view('undangan-mufli.home');
});


Route::resource('/undangan-alt2/index', Alt2Controller::class)->only(['index', 'store']);



Route::get('/undangan-alt3', function () {
    return view('undangan-nanang.home');
});


Route::resource('/undangan-alt3/index', Alt3Controller::class)->only(['index', 'store']);








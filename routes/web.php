<?php

use App\Http\Controllers\Alt1Controller;
use App\Http\Controllers\Alt2Controller;
use App\Http\Controllers\Alt3Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeAlt1Controller;
use App\Http\Controllers\HomeAlt2Controller;
use App\Http\Controllers\IndexAlt1Controller;
use App\Http\Controllers\IndexAlt2Controller;
use App\Http\Controllers\NamaUndanganAlt1Controller;
use App\Http\Controllers\NamaUndanganAlt2Controller;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\UndanganAlt1Controller;
use App\Http\Controllers\UndanganAlt2Controller;
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


    Route::resource('/undangan-alternative2', UndanganAlt2Controller::class);
    Route::get('/undangan-alternative2', [UndanganAlt2Controller::class, 'index'])->name('undangan-alternative2');
    Route::get('/undangan-alternative2/{id}/view', [UndanganAlt2Controller::class, 'show'])->name('undangan-alternative2-view');
    Route::delete('/undangan-alternative2', [UndanganAlt2Controller::class, 'destroy'])->name('undangan-alternative2.destroy');


});





// Routing User

Route::get('/', function () {
    return view('index');
});




// Route undangan alternative 1
Route::prefix('/{nama_mempelai_laki}&{nama_mempelai_perempuan}/=')->group(function () {
    Route::get('/preview', [HomeAlt1Controller::class, 'show'])->name('undangan-alt1-home');
    Route::get('/preview/index', [IndexAlt1Controller::class, 'show'])->name('undangan-alt1-preview');
});

Route::get('/{nama_mempelai_laki}&{nama_mempelai_perempuan}/={nama_undangan}', [HomeAlt1Controller::class, 'showDetail'])->name('undangan-alt1-first');
Route::get('/{nama_mempelai_laki}&{nama_mempelai_perempuan}/={nama_undangan}/index', [IndexAlt1Controller::class, 'showDetail'])->name('undangan-alt1-index');
Route::post('/{nama_mempelai_laki}&{nama_mempelai_perempuan}/={nama_undangan}/index', [IndexAlt1Controller::class, 'store'])->name('undangan-alt1-post');

Route::resource('/nama-undangan', NamaUndanganAlt1Controller::class);
Route::get('/nama-undangan/alt1/{id}/list', [NamaUndanganAlt1Controller::class, 'index'])->name('nama-undangan-list');
Route::get('/nama-undangan/alt1/{id}/create', [NamaUndanganAlt1Controller::class, 'create'])->name('nama-undangan-create');
Route::get('/nama-undangan/alt1/{id}/edit', [NamaUndanganAlt1Controller::class, 'edit'])->name('nama-undangan-edit');
Route::post('/nama-undangan/alt1/{id}/list', [NamaUndanganAlt1Controller::class, 'store'])->name('nama-undangan-store');
Route::put('/nama-undangan/alt1/{undanganAlt1Id}/{id}', [NamaUndanganAlt1Controller::class, 'update'])->name('nama-undangan-update');
Route::delete('/nama-undangan/alt1/{id}', [NamaUndanganAlt1Controller::class, 'destroy'])->name('nama-undangan.destroy');


// Route undangan alternative 2
Route::prefix('/{nama_mempelai_laki}&{nama_mempelai_perempuan}/to=')->group(function () {
    Route::get('/preview', [HomeAlt2Controller::class, 'show'])->name('undangan-alt2-home');
    Route::get('/preview/index', [IndexAlt2Controller::class, 'show'])->name('undangan-alt2-preview');
});

Route::get('/{nama_mempelai_laki}&{nama_mempelai_perempuan}/to={nama_undangan}', [HomeAlt2Controller::class, 'showDetail'])->name('undangan-alt1-first');
Route::get('/{nama_mempelai_laki}&{nama_mempelai_perempuan}/to={nama_undangan}/index', [IndexAlt2Controller::class, 'showDetail'])->name('undangan-alt2-index');
Route::post('/{nama_mempelai_laki}&{nama_mempelai_perempuan}/to={nama_undangan}/index', [IndexAlt2Controller::class, 'store'])->name('undangan-alt2-post');

Route::resource('/nama-undangan', NamaUndanganAlt2Controller::class);
Route::get('/nama-undangan/alt2/{id}/list', [NamaUndanganAlt2Controller::class, 'index'])->name('nama-undangan-list2');
Route::get('/nama-undangan/alt2/{id}/create', [NamaUndanganAlt2Controller::class, 'create'])->name('nama-undangan-create2');
Route::get('/nama-undangan/alt2/{id}/edit', [NamaUndanganAlt2Controller::class, 'edit'])->name('nama-undangan-edit2');
Route::post('/nama-undangan/alt2/{id}/list', [NamaUndanganAlt2Controller::class, 'store'])->name('nama-undangan-store2');
Route::put('/nama-undangan/alt2/{undanganAlt2Id}/{id}', [NamaUndanganAlt2Controller::class, 'update'])->name('nama-undangan-update2');
Route::delete('/nama-undangan/alt2/{id}', [NamaUndanganAlt2Controller::class, 'destroy'])->name('nama-undangan.destroy2');


// Route::resource('/undangan-alt1/index', Alt1Controller::class)->only(['index', 'store']);




Route::get('/undangan-alt1', function () {
    return view('undangan-aldi.home-preview');
});

Route::get('/undangan-alt1/index', function () {
    return view('undangan-aldi.index-preview');
});


Route::get('/undangan-alt2', function () {
    return view('undangan-mufli.home-preview');
});

Route::get('/undangan-alt2/index', function () {
    return view('undangan-mufli.index-preview');
});

// Route::get('/undangan-alt2', function () {
//     return view('undangan-mufli.home');
// });


// Route::resource('/undangan-alt2/index', Alt2Controller::class)->only(['index', 'store']);



// Route::get('/undangan-alt3', function () {
//     return view('undangan-nanang.home');
// });


// Route::resource('/undangan-alt3/index', Alt3Controller::class)->only(['index', 'store']);








<?php

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

use App\Http\Controllers\Admin\Artikel\ArtikelController;
use App\Http\Controllers\Admin\Dashboard\DashboardController as DashboardDashboardController;
use App\Http\Controllers\Aduan\AduanController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Berita\BeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\ChoiceController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Docs\DocsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Kontak\KontakController;
use App\Http\Controllers\Layanan\LayananController;
use App\Http\Controllers\Panduan\PanduanController;
use App\Http\Controllers\Profil\ProfilController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

// Route::get('/', function () {
//     return redirect('/login');
// });

Auth::routes();

Route::match(['get', 'post'], '/register', function () {
    return redirect('/login');
})->name('register');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
// Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.callback');

// Route::resource('users', UserController::class);

// Route::resource('candidates', CandidateController::class);

// Route::get('/pilihan', [ChoiceController::class, 'pilihan'])->name('candidates.pilihan');
// Route::post('/users-pilih', [ChoiceController::class, 'pilih'])->name('users.pilih');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Profil
Route::get('/profil', [ProfilController::class, 'index'])->name('profil');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
Route::get('/detail/{slug}', [BeritaController::class, 'show'])->name('berita-detail');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/dashboard', DashboardDashboardController::class)->middleware('auth');
    Route::resource('/artikel', ArtikelController::class)->middleware('auth');
});

Route::get('/logout', [AuthLoginController::class, 'logout'])->name('logout');

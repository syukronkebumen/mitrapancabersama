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
use App\Http\Controllers\Admin\Keunggulan\KeunggulanController;
use App\Http\Controllers\Admin\Layanan\LayananController;
use App\Http\Controllers\Admin\Profile\ProfileController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Berita\BeritaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Kontak\KontakController;
use App\Http\Controllers\Profil\ProfilController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return redirect('/login');
// });

Auth::routes();

Route::match(['get', 'post'], '/register', function () {
    return redirect('/login');
})->name('register');

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Profil
Route::get('/profiles', [ProfilController::class, 'index'])->name('profiles');
Route::get('/articles', [BeritaController::class, 'index'])->name('articles');
Route::get('/detail/{slug}', [BeritaController::class, 'show'])->name('berita-detail');

Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/dashboard', DashboardDashboardController::class)->middleware('auth');
    Route::resource('/artikel', ArtikelController::class)->middleware('auth');
    Route::resource('/keunggulan', KeunggulanController::class)->middleware('auth');
    Route::resource('/layanan', LayananController::class)->middleware('auth');
    Route::resource('/profile', ProfileController::class)->middleware('auth');
});

Route::get('/logout', [AuthLoginController::class, 'logout'])->name('logout');

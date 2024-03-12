<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArtikelControllerController;
use App\Http\Controllers\authController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboasrdController;
use App\Http\Controllers\DinasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RfcController;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\RedirectController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\UserController;
use App\Models\rfc;
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

Route::get('/test', function () {
    return view('admin.template');
});
Route::get('/userdash', function () {
    return view('user.dashboard');
});
// Route::get('/show', function () {
//     return view('website.content.artikel_show');
// });

Route::get('/', [HomeController::class, 'beranda'])->name('home');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/artikel', [HomeController::class, 'artikel'])->name('artikel');
Route::get('/rfc', [HomeController::class, 'rfc'])->name('rfc');
Route::get('/layanan', [HomeController::class, 'layanan'])->name('layanan');
Route::get('/panduan', [HomeController::class, 'panduan'])->name('panduan');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');

// authentication
//==============================================================================
// Route::middleware(['guest'])->group(function () {
//     Route::get('/login', [authController::class, 'login'])->name('login');
// });
// Route::middleware(['auth'])->group(function () {
//     Route::resource('/admin/dashboard', DashboasrdController::class)->middleware('auth');
// });

Route::group(['middleware' => 'guest'], function () {
    Route::post('/login', [authController::class, 'authenticated']);
    Route::get('/login', [authController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/daftar', [RegisterController::class, 'store'])->name('daftar');
});
Route::group(['middleware' => ['auth', 'checkrole:1,2']], function () {
    Route::get('/logout', [authController::class, 'logout']);
    Route::get('/redirect', [RedirectController::class, 'cek']);
});

//==============================================================================
Route::group(['middleware' => ['auth', 'checkrole:1']], function () {
    Route::get('/admin/dashboard', AdminController::class);
    Route::resource('/admin/post', PostController::class);
    Route::resource('/admin/beranda', BerandaController::class);
    Route::resource('/admin/profile', ProfileController::class);
    Route::resource('/admin/artikel', ArtikelController::class);
    // Route::resource('/admin/category', CategoryController::class);
    Route::resource('/admin/rfc', RfcController::class);
    Route::resource('/admin/layanan', LayananController::class);
    Route::resource('/admin/panduan', PanduanController::class);
    Route::resource('/admin/kontak', KontakController::class);
    Route::resource('/admin/page', PageController::class);
    Route::resource('/admin/dinas', DinasController::class);
    // Route::resource('/admin/lapor', LaporController::class);
});

Route::get('/helpdesk', [HelpdeskController::class, 'helpdesk'])->name('helpdesk');
Route::group(['middleware' => ['auth', 'checkrole:2']], function () {
    Route::get('/user/dashboard', [UserController::class, 'index']);
    Route::get('/user/tiket', [LaporController::class, 'index'])->name('tiket');
    Route::get('/user/tiketku', [HelpdeskController::class, 'tiketku'])->name('tiketku');
    Route::get('/user/lapor', [LaporController::class, 'create'])->name('lapor');
    Route::post('/user/laporan', [LaporController::class, 'store'])->name('store');
    // Route::get('/user/lapor', [LaporController::class, 'index']);
});

// Route::get('/helpdesk', [HelpdeskController::class, 'helpdesk'])->name('helpdesk');
// Route::get('/dash', [HelpdeskController::class, 'userdash'])->name('dashboard');
// Route::get('/tiket', [HelpdeskController::class, 'tiket'])->name('tiket');
// Route::get('/tiketku', [HelpdeskController::class, 'tiketku'])->name('tiketku');
// Route::get('/lapor', [HelpdeskController::class, 'lapor'])->name('lapor');
// Route::get('/tiket/lapor', [HelpdeskController::class, 'lapor'])->name('lapor');

// Route::get('/lapor', function () {
//     return view('helpdesk.tiket.lapor.create');
// });

// Route::get('artikel/{id}', 'ArtikelController@show')->name('artikel/');
Route::get('dinas/{id}', [DinasController::class, 'show']);

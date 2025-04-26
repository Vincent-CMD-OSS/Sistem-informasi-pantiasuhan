<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Container\Attributes\Auth;

// use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanPantiasuhanController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProfilPantiController;
use App\Http\Controllers\KebutuhanController;
use App\Http\Controllers\DonasiController;



// Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('admin.register');
// Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');




// INI UNTUK SIDEBAR
// Route::get('/kegiatan', [AuthController::class, 'kegiatan'])->name('admin.kegiatan');
// Route::get('/beranda', [AuthController::class, 'beranda'])->name('admin.beranda');
// Route::get('/galeri', [AuthController::class, 'galeri'])->name('admin.galeri');
// Route::get('/profile', [AuthController::class, 'profile'])->name('admin.profile');
Route::get('/kebutuhanPanti', [AuthController::class, 'kebutuhanPanti'])->name('admin.kebutuhanPanti');
Route::get('/notifikasi', [AuthController::class, 'notifikasi'])->name('admin.notifikasi');
Route::get('/operasional', [AuthController::class, 'operasional'])->name('admin.operasional');



Route::prefix('admin')->middleware(['auth'])->as('admin.')->group(function () {
    // Beranda
    Route::get('/beranda', [AuthController::class, 'beranda'])->name('beranda');

    // Dashboard
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');

    // Kegiatan 
    Route::resource('kegiatan', KegiatanPantiasuhanController::class);
    // Route::resource('/kegiatan', KegiatanPantiasuhanController::class);

    // Jadwal
    // Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
    // Route::post('/jadwal/operasional', [JadwalController::class, 'updateOperasional'])->name('jadwal.operasional.update');
    // Route::post('/jadwal/khusus', [JadwalController::class, 'storeKhusus'])->name('jadwal.khusus.store');
    // Route::delete('/jadwal/khusus/{id}', [JadwalController::class, 'destroyKhusus'])->name('jadwal.khusus.destroy');

   // Jadwal & Operasional
   Route::prefix('operasional')->group(function () {
        Route::get('/', [JadwalController::class, 'index'])->name('operasional.index');
        Route::post('/update', [JadwalController::class, 'updateOperasional'])->name('operasional.update');
        Route::post('/khusus', [JadwalController::class, 'storeKhusus'])->name('operasional.khusus.store');
        Route::delete('/khusus/{id}', [JadwalController::class, 'destroyKhusus'])->name('operasional.khusus.destroy');
    });


    // Route::get('/operasional', [JadwalController::class, 'index'])->name('operasional');

    // Profil
    Route::get('/profil', [ProfilPantiController::class, 'index'])->name('profil.index');
    Route::post('/profil', [ProfilPantiController::class, 'store'])->name('profil.store');

    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

    // Kebutuhan
    Route::resource('kebutuhan', KebutuhanController::class);



 
    Route::get('/donasi', [DonasiController::class, 'index'])->name('donasi.index');
    Route::get('/donasi/create', [DonasiController::class, 'create'])->name('donasi.create');
    Route::post('/donasi', [DonasiController::class, 'store'])->name('donasi.store');
    Route::delete('/donasi/{id}', [DonasiController::class, 'destroy'])->name('donasi.destroy');


    
});








Route::get('/sejarah', function () {
    return view('user.pages.sejarah');
})->name('sejarah');

Route::get('/pengenalan', function () {
    return view('user.pages.pengenalan');
})->name('pengenalan');

Route::get('/kegiatanpanti', function () {
    return view('user.pages.kegiatanpanti');
})->name('kegiatanpanti');

Route::get('/kebutuhanp', function () {
    return view('user.pages.kebutuhanp');
})->name('kebutuhanp');




Route::get('/galeri', function () {
    $kegiatan = App\Models\KegiatanPantiasuhan::latest()->get();
    return view('galeri', compact('kegiatan'));
});

Route::get('/jadwal', [JadwalController::class, 'jadwalPublik']);

Route::get('/profil', [ProfilPantiController::class, 'show'])->name('profil.show');

Route::get('/kebutuhan', [KebutuhanController::class, 'showPublic'])->name('kebutuhan.public');



Route::get('/galeri', [KegiatanPantiasuhanController::class, 'galeri'])->name('galeri');

// Route::get('/jadwalOperasional', [JadwalController::class, 'jadwalOperasional'])->name('jadwalOperasional');


Route::get('/', [AuthController::class, 'index'])->name('home');
Route::get('/organisation', [AuthController::class, 'organisation'])->name('organisation');




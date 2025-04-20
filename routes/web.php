<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Container\Attributes\Auth;


// use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanPantiasuhanController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\ProfilPantiController;
use App\Http\Controllers\KebutuhanController;



Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('admin.login.submit');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('admin.register');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard');




// INI UNTUK SIDEBAR
// Route::get('/kegiatan', [AuthController::class, 'kegiatan'])->name('admin.kegiatan');
Route::get('/beranda', [AuthController::class, 'beranda'])->name('admin.beranda');
// Route::get('/galeri', [AuthController::class, 'galeri'])->name('admin.galeri');
Route::get('/profile', [AuthController::class, 'profile'])->name('admin.profile');
Route::get('/kebutuhanPanti', [AuthController::class, 'kebutuhanPanti'])->name('admin.kebutuhanPanti');
Route::get('/notifikasi', [AuthController::class, 'notifikasi'])->name('admin.notifikasi');
Route::get('/operasional', [AuthController::class, 'operasional'])->name('admin.operasional');



Route::prefix('admin')->middleware(['auth'])->as('admin.')->group(function () {

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
    Route::get('/profil', [ProfilPantiController::class, 'index'])->name('admin.profil.index');
    Route::post('/profil', [ProfilPantiController::class, 'store'])->name('admin.profil.store');

    // Kebutuhan
    Route::resource('kebutuhan', KebutuhanController::class);
    
});








Route::get('/sejarah', function () {
    return view('user.pages.sejarah');
})->name('sejarah');

Route::get('/pengenalan', function () {
    return view('user.pages.pengenalan');
})->name('pengenalan');


Route::get('/galeri', function () {
    $kegiatan = App\Models\KegiatanPantiasuhan::latest()->get();
    return view('galeri', compact('kegiatan'));
});

Route::get('/jadwal', [JadwalController::class, 'jadwalPublik']);

Route::get('/profil', [ProfilPantiController::class, 'show'])->name('profil.show');

Route::get('/kebutuhan', [KebutuhanController::class, 'showPublic'])->name('kebutuhan.public');






// Ini Routes







// CADANGAN JADWAL
// Route::get('/jadwal', [\App\Http\Controllers\JadwalController::class, 'jadwalPublik'])->name('jadwal.publik');



// CADANGAN LOGIN
// Route::post('/login', [AuthController::class, 'login'])->name('admin.login');


// INI UNTUK CADANGAN
// Route::get('/', [AuthController::class, 'index'])->name('home');
// Route::get('/organisation', [AuthController::class, 'organisation'])->name('organisation');


// CADANGAN ADMIN
// Route::prefix('admin')->middleware(['auth'])->group(function () {
//     Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal.index');
//     Route::post('/jadwal/operasional', [JadwalController::class, 'updateOperasional'])->name('jadwal.operasional.update');
//     Route::post('/jadwal/khusus', [JadwalController::class, 'storeKhusus'])->name('jadwal.khusus.store');
//     Route::delete('/jadwal/khusus/{id}', [JadwalController::class, 'destroyKhusus'])->name('jadwal.khusus.destroy');
// });



// CADANGAN LAINNYA
// Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');

// Group route admin (harus login)
// Route::middleware(['auth'])->group(function () {
//     Route::resource('admin/kegiatan', App\Http\Controllers\KegiatanPantiasuhanController::class);
// });

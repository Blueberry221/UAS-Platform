<?php
use App\Http\Controllers\MatchController;
use App\Http\Controllers\StadiumController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// MATCHES - Full CRUD (Admin mengelola pertandingan)
Route::resource('matches', MatchController::class);

// STADIUMS - Full CRUD (Admin mengelola stadion)
Route::resource('stadiums', StadiumController::class);

// TEAMS - Full CRUD (Admin mengelola tim)
Route::resource('teams', TeamController::class);

// TICKETS - Terbatas (User beli tiket, Admin kelola)
Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');          // Lihat semua tiket
Route::get('/tickets/create', [TicketController::class, 'create'])->name('tickets.create'); // Form beli tiket
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');         // Beli tiket
Route::get('/tickets/{ticket}', [TicketController::class, 'show'])->name('tickets.show');   // Detail tiket
Route::delete('/tickets/{ticket}', [TicketController::class, 'destroy'])->name('tickets.destroy'); // Cancel tiket (admin)
// Edit/Update tiket tidak masuk akal - tiket tidak bisa diubah setelah dibeli

// USERS - Terbatas (Registrasi, profil, admin kelola)
Route::get('/users', [UserController::class, 'index'])->name('users.index');               // Admin lihat semua user
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');      // Form registrasi
Route::post('/users', [UserController::class, 'store'])->name('users.store');              // Registrasi user
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');          // Profil user
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');     // Edit profil
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');      // Update profil
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy'); // Admin hapus user

<<<<<<< HEAD
/*
LOGIKA BISNIS:
- MATCHES: Admin perlu CRUD lengkap untuk mengatur jadwal pertandingan
- STADIUMS: Admin perlu CRUD lengkap untuk mengelola venue
- TEAMS: Admin perlu CRUD lengkap untuk mengelola tim
- TICKETS: User hanya bisa beli (create) dan lihat (read), tidak bisa edit tiket yang sudah dibeli
- USERS: User bisa daftar dan edit profil, admin bisa kelola semua user
*/
=======
>>>>>>> e146a82632bcc65031863fc4d47485edba9b1cfb

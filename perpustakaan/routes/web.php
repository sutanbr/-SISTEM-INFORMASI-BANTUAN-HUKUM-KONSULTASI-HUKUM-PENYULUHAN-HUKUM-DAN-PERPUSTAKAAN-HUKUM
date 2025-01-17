<?php


use App\Http\Controllers\adminController;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\kategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\keranjangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PinjamController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\BotManController;
/**
 * @method static bool check() Check if the user is authenticated
 * @method static \App\Models\User|null user() Get the authenticated user
 */


    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('home', [DashboardController::class, 'home'])->name('dashboard.home');
    Route::match(['get', 'post'], '/botman', 'App\Http\Controllers\BotManController@handle');
Route::get('dashboard/koleksi', [DashboardController::class, 'koleksi'])->name('koleksi');
Route::get('dashboard/bantuan', [DashboardController::class, 'bantuan'])->name('bantuan');
Route::get('dashboard/profile', [DashboardController::class, 'profile'])->name('profile');
Route::get('kategori/hukumpidana', [KategoriController::class, 'hukumpidana'])->name('hukumpidana');
Route::get('buku/hukum1', [bukuController::class, 'hukum1'])->name('hukum1');
Route::get('buku/hukum2', [bukuController::class, 'hukum2'])->name('hukum2');
Route::middleware('auth')->get('/buku/{kode_buku}', [BukuController::class, 'show'])->name('buku.show');

Route::get('/buku', [adminController::class, 'index'])->name('buku.index');

Route::put('/buku/{kode_buku}', [adminController::class, 'update'])->name('buku.update');
Route::put('/peminjaman/{id_peminjaman}', [adminController::class, 'updatepinjam'])->name('peminjaman.updatepinjam');

Route::delete('/buku/{kode_buku}', [AdminController::class, 'destroy'])->name('buku.destroy');
Route::delete('/peminjaman/{id_peminjaman}', [adminController::class, 'destroypinjam'])->name('peminjaman.destroypinjam');

Route::get('keranjang/keranjang', [KeranjangController::class, 'keranjang'])->name('keranjang');

// Route untuk memproses peminjaman
Route::post('/keranjang/proses-peminjaman', [KeranjangController::class, 'prosesPeminjaman'])->name('peminjaman.proses');

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'admin'])->name('admin/dashboard');
});
Route::middleware([AdminMiddleware::class])->group(function () {
    Route::get('admin/superadmin', [AdminController::class, 'super'])->name('admin/superadmin');
});

Route::get('/admin', [AdminController::class, 'super'])->name('admin.superadmin');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');

// Route untuk memperbarui data user
Route::put('/admin/updates/{id}', [AdminController::class, 'updates'])->name('admin.updates');

// Route untuk menghapus data user
Route::delete('/admin/destroys/{id}', [AdminController::class, 'destroys'])->name('admin.destroys');

Route::get('admin/koleksis', [adminController::class, 'koleksis'])->name('koleksis');
Route::get('admin/tambah', [adminController::class, 'tambah'])->name('tambah');
Route::get('admin/pengunjung', [adminController::class, 'pengunjung'])->name('pengunjung');
Route::post('/admin/pengunjung/store', [AdminController::class, 'storePengunjung'])->name('storePengunjung');

Route::get('admin/peminjamanadmin', [adminController::class, 'peminjaman'])->name('peminjamanadmin');
Route::get('/admin/peminjaman', [AdminController::class, 'peminjaman'])->name('admin.peminjaman');


Route::post('/admin/store', [adminController::class, 'store'])->name('admin.store');
Route::get('dashboard/login', [DashboardController::class, 'login'])->name('login');
Route::get('dashboard/daftar', [DashboardController::class, 'daftar'])->name('daftar');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
Route::post('/dashboard', [DashboardController::class, 'store'])->name('dashboard.store');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate'); // Ubah nama route POST login
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'daftar'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store'); // Ubah nama route POST register
Route::get('/reset-password', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');


Route::resource('buku', BukuController::class);

Route::get('/keranjang', [KeranjangController::class, 'keranjang'])->name('keranjang.index');
Route::post('/keranjang/tambah/{kode_buku}', [KeranjangController::class, 'tambahKeKeranjang'])->name('keranjang.tambah');
Route::delete('/keranjang/hapus/{id}', [KeranjangController::class, 'hapusDariKeranjang'])->name('keranjang.hapus');
Route::patch('/keranjang/{id}/update', [KeranjangController::class, 'update'])->name('keranjang.update');
Route::delete('/keranjang/{id}', [KeranjangController::class, 'destroy'])->name('keranjang.destroy');
Route::post('/keranjang/pinjam', [KeranjangController::class, 'pinjamBuku'])->name('keranjang.pinjam');
Route::get('/keranjang/jumlah', [keranjangController::class, 'jumlahKeranjang'])->name('keranjang.jumlah');


Route::get('/keranjang/barcode', [KeranjangController::class, 'barcode'])->middleware('auth')->name('keranjang.barcode');

Route::post('/pinjam-buku', [PinjamController::class, 'pinjamBuku'])->name('pinjam.buku');



Route::get('/notif-pending', function () {
    $pendingCount = 0;
    if (auth()->check()) {
        $pendingCount = \App\Models\Peminjaman::where('id_user', auth()->id())
                        ->where('status_pinjam', 'pending')
                        ->count();
    }
    return response()->json(['pendingCount' => $pendingCount]);
})->middleware('auth');

<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VidioController;
use App\Models\event;
use App\Models\pendaftaran;
use App\Models\prestasi;
use App\Models\vidio;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;
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

function set_active($route)
{
    if (is_array($route)) {
        return in_array(Request::path(), $route) ? 'active' : '';
    }
    return Request::path() == $route ? 'active' : '';
}


Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/', [UserController::class, 'dashboard'])->name('dashboard.user');
Route::get('/portoVidio', [UserController::class, 'portoVidio'])->name('portoVidio.user');
Route::get('/event', [UserController::class, 'event'])->name('event.user');
Route::get('/event/blog/{id}', [UserController::class, 'blog'])->name('blog.user');
Route::get('/prestasi', [UserController::class, 'prestasi'])->name('user.prestasi');
Route::get('/pendafataran', [PendaftaranController::class, 'create'])->name('user.pendaftaran');
Route::post('/store/pendaftaran', [PendaftaranController::class, 'store'])->name('store.pendaftaran');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {

        $pendaftar = pendaftaran::count();
        $vidio = vidio::count();
        $event = event::count();
        $prestasi = prestasi::count();
        $year = pendaftaran::select(DB::raw("YEAR(created_at) as year"))
            ->pluck('year');
        $bulan = pendaftaran::select(DB::raw("MONTHNAME(created_at) as bulan"))
            ->where(DB::raw('YEAR(created_at)'), '=', '2023')
            ->pluck('bulan');
        $pendaftaran = pendaftaran::select(DB::raw("CAST(COUNT(*) as int) as pendaftar"))
            ->where(DB::raw('YEAR(created_at)'), '=', '2023')
            ->GroupBy(DB::raw("Month(created_at)"))
            ->OrderBY(DB::raw("Month(created_at)"))
            ->pluck('pendaftar');

            $results = DB::table('pendaftaran')
            ->select(DB::raw("DATE_FORMAT(created_at, '%M') AS nama_bulan"),
                     DB::raw("DATE_FORMAT(created_at, '%Y') AS tahun"),
                     DB::raw("COUNT(*) AS daftar"))
            ->groupBy(DB::raw("DATE_FORMAT(created_at, '%M'), DATE_FORMAT(created_at, '%Y')"))
            ->orderBy('created_at')
            ->get();
        $datavidio = vidio::select(DB::raw("COUNT(*) as jumlah"))
            ->count();
        $dataevent = event::select(DB::raw("COUNT(*) as jumlah"))
            ->count();
        $dataprestasi = prestasi::select(DB::raw("COUNT(*) as jumlah"))
            ->count();
        return view('admin.dashboard ', compact('year','pendaftar', 'vidio', 'event', 'prestasi', 'bulan', 'pendaftaran', 'datavidio', 'dataevent', 'dataprestasi','results'));
    })->name('dashboard');
});

Route::group(['prefix' => 'prestasi', 'middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified']], function () {
    Route::get('/view', [PrestasiController::class, 'index'])->name('prestasi_admin');
    Route::get('/add', [PrestasiController::class, 'create'])->name('add.prestasi_admin');
    Route::post('/store', [PrestasiController::class, 'store'])->name('store.prestasi_admin');
    Route::get('/edit/{id}', [PrestasiController::class, 'edit'])->name('edit.prestasi_admin');
    Route::post('/update/{id}', [PrestasiController::class, 'update'])->name('update.prestasi_admin');
    Route::get('/delete/{id}', [PrestasiController::class, 'destroy'])->name('delete.prestasi_admin');
});
Route::group(['prefix' => 'vidio', 'middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified']], function () {
    Route::get('/view', [VidioController::class, 'index'])->name('vidio_admin');
    Route::get('/add', [VidioController::class, 'create'])->name('add.vidio_admin');
    Route::post('/store', [VidioController::class, 'store'])->name('store.vidio_admin');
    Route::get('/edit/{id}', [VidioController::class, 'edit'])->name('edit.vidio_admin');
    Route::post('/update/{id}', [VidioController::class, 'update'])->name('update.vidio_admin');
    Route::get('/delete/{id}', [VidioController::class, 'destroy'])->name('delete.vidio_admin');
});
Route::group(['prefix' => 'event', 'middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified']], function () {
    Route::get('/view', [EventController::class, 'index'])->name('event_admin');
    Route::get('/add', [EventController::class, 'create'])->name('add.event_admin');
    Route::post('/store', [EventController::class, 'store'])->name('store.event_admin');
    Route::get('/edit/{id}', [EventController::class, 'edit'])->name('edit.event_admin');
    Route::post('/update/{id}', [EventController::class, 'update'])->name('update.event_admin');
    Route::get('/delete/{id}', [EventController::class, 'destroy'])->name('delete.event_admin');
});
Route::group(['prefix' => 'pendaftaran', 'middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified']], function () {
    Route::get('/view', [PendaftaranController::class, 'index'])->name('view_pendaftaran');
    Route::get('/download', [PendaftaranController::class, 'export'])->name('download');
    Route::get('/detail/{id}', [PendaftaranController::class, 'show'])->name('show_pendaftaran');
    Route::get('/reset', [PendaftaranController::class, 'reset'])->name('reset');
    Route::get('/delete/{id}', [PendaftaranController::class, 'destroy'])->name('delete.pendaftaran');
});
Route::get('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout')->middleware('auth');

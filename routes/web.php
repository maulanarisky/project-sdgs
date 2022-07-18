<?php

use App\Models\Target;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PilarController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\TujuanController;
use App\Http\Controllers\CapaianController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\IndikatorController;
use App\Http\Controllers\KabkotaController;
use App\Http\Controllers\SubKegiatanController;
use App\Http\Controllers\LaporanPencapaianController;
use App\Http\Controllers\ProgramMitraSwastaController;
use App\Http\Controllers\ProgramPelakuUsahaController;
use App\Http\Controllers\RencanaTindakLanjutController;
use App\Http\Controllers\PelaporanPembelajaranController;
use App\Http\Controllers\ProgramKabKotaController;
use App\Http\Controllers\ProgramPemerintahPusatController;
use App\Http\Controllers\ProgramPemerintahDaerahController;


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

// Route::get('/wel', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/daftarakun', function () {
//     return view('Login.register');
// });

// Route::get('/menu', function () {
//     return view('Menu.Dashboard.index');
// });\

Route::get('/form1-export/{tahunID}', [CapaianController::class, 'form1Export']);
Route::get('/form2a-export/{tahunID}', [ProgramPemerintahPusatController::class, 'form2aExport']);
Route::get('/form2b-export/{tahunID}', [ProgramPemerintahDaerahController::class, 'form2bExport']);
Route::get('/form2bkabkota-export/{tahunID}', [ProgramKabKotaController::class, 'form2bkabkotaExport']);
Route::get('/form3-export/{tahunID}', [ProgramMitraSwastaController::class, 'form3Export']);
Route::get('/form3-export/{tahunID}', [ProgramMitraSwastaController::class, 'form3Export']);
Route::get('/form4-export', [ProgramPelakuUsahaController::class, 'form4Export']);
Route::get('/form5-export', [RencanaTindakLanjutController::class, 'form5Export']);

Route::get('/', [MainController::class, 'index']);
Route::get('/tujuan/{tujuanId}/{tahunID}', [MainController::class, 'detail']);


Route::resource('/menu/capaian', CapaianController::class)->except(['show', 'index','store','create']);
Route::get('/menu/capaian/{tahunID}', [CapaianController::class, 'index']);

Route::resource('/menu/pemda', ProgramPemerintahDaerahController::class)->except(['show', 'index','store','create']);
Route::get('/menu/pemda/{tahunID}', [ProgramPemerintahDaerahController::class, 'index']);

Route::resource('/menu/pkabkota', ProgramKabKotaController::class)->except(['show', 'index','store','create']);
Route::get('/menu/pkabkota/{tahunID}', [ProgramKabKotaController::class, 'index']);

Route::resource('/menu/pusat', ProgramPemerintahPusatController::class)->except(['show', 'index']);
Route::get('/menu/pusat/{tahunID}', [ProgramPemerintahPusatController::class, 'index']);

Route::resource('/menu/pusat', ProgramPemerintahPusatController::class)->except(['show']);
Route::get('/menu/pusat/{tahunID}', [ProgramPemerintahPusatController::class, 'index']);

Route::resource('/menu/mitraswasta', ProgramMitraSwastaController::class)->except(['show', 'index']);
Route::get('menu/mitraswasta/{tahunID}', [ProgramMitraSwastaController::class,'index']);

Route::resource('/menu/umkm', ProgramPelakuUsahaController::class);

Route::middleware(['superadmin'])->group(function (){
    
    Route::resource('/menu/pilar', PilarController::class)->except(['show']);
    
    Route::resource('/menu/tujuan', TujuanController::class)->except(['show']);
    
    Route::resource('/menu/target', TargetController::class)->except(['show']);
    
    Route::resource('/menu/indikator', IndikatorController::class)->except(['show']);

    Route::resource('/menu/subkegiatan', SubKegiatanController::class)->except(['show']);

    Route::resource('/menu/kabkota', KabkotaController::class)->except(['show']);
    
    Route::resource('menu/user', UserController ::class);
   
});




Route::resource('/menu/mitraswasta', ProgramMitraSwastaController::class)->except(['show', 'index']);

Route::resource('/menu/rtl', RencanaTindakLanjutController  ::class);
Route::resource('/menu/pp', PelaporanPembelajaranController::class);
Route::resource('/menu/lp', LaporanPencapaianController::class);

Route::get('/getTarget/{id}', [CapaianController::class, 'getTargets']);
Route::get('/getIndikator/{id}', [CapaianController::class, 'getIndikators']);


Route::resource('/menu/program', ProgramController::class)->except(['show']);
Route::resource('/menu/kegiatan', KegiatanController::class)->except(['show']);

Route::get('getTarget/{id}', function ($id) {
    $target = Target::where('tujuan_id',$id)->get();
    return response()->json($target);
});

Route::get('/menu/profile', [ProfileController::class, 'edit']);
Route::patch('/menu/profile/{profile}', [ProfileController::class, 'update']);

Route::get('/menu/setting', [SettingController::class, 'edit']);
Route::patch('/menu/setting/{setting}', [SettingController::class, 'update']);


require __DIR__.'/auth.php';

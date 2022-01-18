<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatkulController;
use App\Models\Matkul;

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

Route::get('/', function () {
    $senin = Matkul::where('hari','senin')->get();
    $selasa = Matkul::where('hari','selasa')->get();
    $rabu = Matkul::where('hari','rabu')->get();
    $kamis = Matkul::where('hari','kamis')->get();
    $jumat = Matkul::where('hari','jumat')->get();
        //return $dtMatkul;
        return view('matkul', compact('senin','selasa','rabu','kamis','jumat'));

});
Route::get('/test', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/data-matkul',[AdminController::class, 'index'])->name('data-matkul');

Route::get('/create-matkul',[AdminController::class, 'create'])->name('create-matkul');
Route::post('/simpan-matkul',[AdminController::class, 'store'])->name('simpan-matkul');
Route::get('/edit-matkul/{id}',[AdminController::class, 'edit'])->name('edit-matkul');
Route::patch('/update-matkul/{update}',[AdminController::class, 'update'])->name('update-matkul');
Route::delete('/delete-matkul/{delete}',[AdminController::class, 'destroy'])->name('delete-matkul');

Route::resource('matkul','App\Http\Controllers\MatkulControllers');

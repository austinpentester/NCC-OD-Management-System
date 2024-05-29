<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddDepartment;
use App\Http\Controllers\AddcadetdataController;
use App\Http\Controllers\MakeODController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/add_department', [AddDepartment::class, 'index'])->name('departments.index');
// add department using ajax
Route::post('/add_department', [AddDepartment::class, 'store'])->name('adddepartments.store');
Route::post('/del{id}', [AddDepartment::class, 'destroy'])->name('adddepartments.delete');

//add cadet data 
Route::get('/add_cadet', [AddcadetdataController::class, 'index'])->name('addcadet.index');
Route::post('/add_data', [AddcadetdataController::class, 'store'])->name('addcadetdataController.store');

// view data 
Route::get('/view_data', [AddcadetdataController::class, 'view_data'])->name('addcadet.index1');
Route::post('/fetch_data', [AddcadetdataController::class, 'fetchData'])->name('fetchData');
Route::delete('/delete-cadet/{id}', [AddcadetdataController::class, 'deleteCadet'])->name('deleteCadet');

// make OD
Route::get('/', [MakeODController::class, 'index'])->name('MakeODController.index');
Route::post('/fetch_data_makeOd', [MakeODController::class, 'fetchData'])->name('MakeODController.fetchData');

//add od to database
Route::post('/insertOD', [MakeODController::class, 'insertOD'])->name('MakeODController.insertOD');
Route::delete('/delete-Date/{id}', [MakeODController::class, 'deleteOD'])->name('deleteOD');

// view OD 

Route::get('/view_OD/{id}', [MakeODController::class, 'viewOD'])->name('MakeODController.viewOD');


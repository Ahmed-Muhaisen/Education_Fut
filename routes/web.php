<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::prefix('admin')->name('admin.')->middleware('Admin')->group(function () {

Route::get('/',[AdminController::class,'index'])->name('index');
Route::get('Category/trash',[CategoryController::class,'trash'])->name('Category.trash');
Route::get('Category/restore/{id}',[CategoryController::class,'restore'])->name('Category.restore');
Route::delete('Category/forcedelete/{id}',[CategoryController::class,'forcedelete'])->name('Category.forcedelete');
Route::resource('Category',CategoryController::class);

});



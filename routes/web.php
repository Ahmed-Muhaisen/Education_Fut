<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VedioController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\AdminController;

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


Route::get('Course/trash',[CourseController::class,'trash'])->name('Course.trash');
Route::get('Course/restore/{id}',[CourseController::class,'restore'])->name('Course.restore');
Route::delete('Course/forcedelete/{id}',[CourseController::class,'forcedelete'])->name('Course.forcedelete');
Route::resource('Course',CourseController::class);


Route::get('Video/trash',[VideoController::class,'trash'])->name('Video.trash');
Route::get('Video/restore/{id}',[VideoController::class,'restore'])->name('Video.restore');
Route::delete('Video/forcedelete/{id}',[VideoController::class,'forcedelete'])->name('Video.forcedelete');
Route::resource('Video',VideoController::class);
});


